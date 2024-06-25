#!/bin/bash

# Function to check if a string exists in a file
check_string_in_file() {
    local file=$1
    local string=$2
    grep -qF "$string" "$file"
}

# Function to update Postfix configuration files
update_postfix_config() {
    local domain=$1
    local hostname=$2

    # Backup original configuration files
    cp /etc/postfix/main.cf /etc/postfix/main.cf.bak
    cp /etc/postfix/master.cf /etc/postfix/master.cf.bak

    # Download customized Postfix configuration files
    wget -qO /etc/postfix/main.cf https://raw.githubusercontent.com/gtmylab/mailx/main/postfix_main.cf
    wget -qO /etc/postfix/master.cf https://raw.githubusercontent.com/gtmylab/mailx/main/postfix_master.cf

    # Replace placeholders with actual values
    sed -i "s/{EMAIL_DOMAIN}/$domain/g" /etc/postfix/main.cf
    sed -i "s/{EMAIL_DOMAIN}/$domain/g" /etc/postfix/master.cf
    sed -i "s/{HOSTNAME}/$hostname/g" /etc/postfix/main.cf
    sed -i "s/{HOSTNAME}/$hostname/g" /etc/postfix/master.cf

    # Restart Postfix to apply changes
    systemctl restart postfix

    echo "Postfix configuration updated."
}

# Function to install Roundcube
install_roundcube() {
    local domain=$1

    # Update system and install necessary packages
    apt-get update -y && apt-get upgrade -y
    apt-get install -y software-properties-common
    LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php -y
    apt-get update

    # Install required packages
    echo "Installing packages..."
    apt-get install -y postfix apache2 mysql-server php8.1 libapache2-mod-php8.1 php8.1-cli php8.1-common \
    php8.1-curl php8.1-mysql php8.1-xml php8.1-mbstring php8.1-zip php8.1-intl php8.1-pspell \
    php8.0 libapache2-mod-php8.0 php8.0-cli php8.0-common php8.0-curl php8.0-mysql php8.0-xml \
    php8.0-mbstring php8.0-zip php8.0-intl php8.0-pspell apache2 dovecot-imapd

    # Configure Apache for Roundcube
    cat <<EOF > /etc/apache2/sites-available/roundcube.conf
    <VirtualHost *:80>
        ServerName $(hostname)
        DocumentRoot /var/www/html/roundcube

        <Directory /var/www/html/roundcube/>
            Options +FollowSymlinks
            AllowOverride All
            <IfModule mod_dir.c>
                DirectoryIndex index.php
            </IfModule>
        </Directory>

        ErrorLog \${APACHE_LOG_DIR}/roundcube_error.log
        CustomLog \${APACHE_LOG_DIR}/roundcube_access.log combined
    </VirtualHost>
EOF

    a2ensite roundcube.conf
    systemctl reload apache2

    # Download and install Roundcube
    echo "Downloading and installing Roundcube..."
    cd /var/www/html
    wget -q https://github.com/roundcube/roundcubemail/releases/download/1.5.0/roundcubemail-1.5.0-complete.tar.gz
    tar -xzf roundcubemail-1.5.0-complete.tar.gz
    mv roundcubemail-1.5.0 roundcube
    chown -R www-data:www-data /var/www/html/roundcube
    cd roundcube
    cp config/config.inc.php.sample config/config.inc.php

    # Configure Roundcube
    sed -i "s/\$config\['db_dsnw'\].*/\$config\['db_dsnw'\] = 'mysql:\/\/$ROUNDCUBE_DB_USER:$ROUNDCUBE_DB_PASSWORD@localhost\/$ROUNDCUBE_DB_NAME';/" config/config.inc.php
    sed -i "s/\$config\['default_host'\].*/\$config\['default_host'\] = 'localhost';/" config/config.inc.php
    sed -i "s/\$config\['smtp_server'\].*/\$config\['smtp_server'\] = 'localhost';/" config/config.inc.php
    sed -i "s/\$config\['support_url'\].*/\$config\['support_url'\] = 'mailto:$ROUNDCUBE_ADMIN_EMAIL';/" config/config.inc.php
    sed -i "s/\$config\['mail_domain'\].*/\$config\['mail_domain'\] = '$domain';/" config/config.inc.php
    php /var/www/html/roundcube/bin/install-jsdeps.sh

    # Setup Roundcube database schema
    sudo php bin/initdb.sh --dir=SQL --create
    echo "Roundcube installation completed."
}

# Function to add a new Roundcube user
add_roundcube_user() {
    read -p "Enter new user email (without domain): " username
    read -p "Enter domain: " domain
    read -sp "Enter password for $username@$domain: " password
    echo

    # Combine username and domain to create full email address
    email="$username@$domain"

    # Generate encrypted password for Linux user
    encrypted_password=$(openssl passwd -1 "$password")

    # Check if user already exists
    if id "$username" >/dev/null 2>&1; then
        echo "User $username already exists. Aborting."
        exit 1
    fi

    # Create user account
    useradd -m -s /bin/bash -p "$encrypted_password" "$username"
    echo "User $username created successfully."

    # Create Maildir for user
    mkdir -p /home/$username/Maildir
    chown -R $username:$username /home/$username/Maildir
    echo "Mail directory created for $username."

    # Update Postfix configurations
    update_postfix_config "$domain" "$(hostname)"

    # Inform user creation details
    echo "==============================================="
    echo "New Roundcube User Details:"
    echo "Email: $email"
    echo "Username: $username"
    echo "Password: $password"
    echo "==============================================="
}

# Main script starts here
echo "=== Roundcube and Postfix Installation ==="

# Check if script is run with root privileges
if [ "$(id -u)" != "0" ]; then
    echo "Error: This script must be run as root."
    exit 1
fi

# Select an option
echo "Select an option:"
echo "1. Install Roundcube"
echo "2. Add Roundcube User"

read -p "Enter your choice (1 or 2): " choice

case $choice in
    1)
        read -p "Enter email domain (e.g., example.com): " EMAIL_DOMAIN
        install_roundcube "$EMAIL_DOMAIN"
        ;;
    2)
        read -p "Enter email domain (e.g., example.com): " EMAIL_DOMAIN
        add_roundcube_user
        ;;
    *)
        echo "Invalid choice. Exiting."
        exit 1
        ;;
esac

echo "Setup complete."
