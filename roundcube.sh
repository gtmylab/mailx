#!/bin/bash

# Function to check if a string exists in a file
check_string_in_file() {
    local file=$1
    local string=$2
    grep -qF "$string" "$file"
}

# Function to retrieve stored password
retrieve_password() {
    local filepath=$1
    if [ -f "$filepath" ]; then
        cat "$filepath"
    else
        echo "Error: Password file $filepath not found."
        exit 1
    fi
}

# Function to generate a random password with only letters and numbers
generate_password() {
    local length=$1
    local chars="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"
    local password=""
    for i in $(seq 1 $length); do
        password+=$(echo $chars | fold -w1 | shuf | head -n1)
    done
    echo $password
}



# Function to create or update the Postfix virtual alias file
update_postfix_virtual() {
    local domain=$1
    local username=$2

    if ! check_string_in_file "/etc/postfix/virtual" "$username@$domain"; then
        echo "$username@$domain $username" >> /etc/postfix/virtual
        postmap /etc/postfix/virtual
        echo "Updated /etc/postfix/virtual with $username@$domain."
    else
        echo "Entry for $username@$domain already exists in /etc/postfix/virtual."
    fi
}

# Function to update the Postfix main.cf configuration
update_postfix_maincf() {
    local domain=$1

    if ! check_string_in_file "/etc/postfix/main.cf" "virtual_alias_domains"; then
        echo "virtual_alias_domains = $domain" >> /etc/postfix/main.cf
    else
        sed -i "/^virtual_alias_domains/c\virtual_alias_domains = $domain" /etc/postfix/main.cf
    fi

    if ! check_string_in_file "/etc/postfix/main.cf" "virtual_alias_maps"; then
        echo "virtual_alias_maps = hash:/etc/postfix/virtual" >> /etc/postfix/main.cf
    fi

    if ! check_string_in_file "/etc/postfix/main.cf" "mydomain"; then
        echo "mydomain = $domain" >> /etc/postfix/main.cf
    else
        sed -i "/^mydomain/c\mydomain = $domain" /etc/postfix/main.cf
    fi

    if ! check_string_in_file "/etc/postfix/main.cf" "myorigin"; then
        echo "myorigin = \$mydomain" >> /etc/postfix/main.cf
    else
        sed -i "/^myorigin/c\myorigin = \$mydomain" /etc/postfix/main.cf
    fi

    if ! check_string_in_file "/etc/postfix/main.cf" "mydestination"; then
        echo "mydestination = \$myhostname, localhost.\$mydomain, localhost, \$mydomain" >> /etc/postfix/main.cf
    else
        sed -i "/^mydestination/c\mydestination = \$myhostname, localhost.\$mydomain, localhost, \$mydomain" /etc/postfix/main.cf
    fi

    echo "Postfix main.cf configuration updated."
}


# Function to update Postfix configuration files
update_postfix_config() {
    local domain=$1
    local hostname=$2

    echo "Postfix Backup original configuration files....."

    # Backup original configuration files
    cp /etc/postfix/main.cf /etc/postfix/main.cf.bak
    cp /etc/postfix/master.cf /etc/postfix/master.cf.bak

    echo "Download customized Postfix configuration files....."

    # Download customized Postfix configuration files
    wget -qO /etc/postfix/main.cf https://raw.githubusercontent.com/gtmylab/mailx/main/postfix_main.cf
    wget -qO /etc/postfix/master.cf https://raw.githubusercontent.com/gtmylab/mailx/main/postfix_master.cf
    
    echo "Replace Postfix placeholders with actual values....."

    # Replace placeholders with actual values
    sed -i "s/{EMAIL_DOMAIN}/$domain/g" /etc/postfix/main.cf
    sed -i "s/{EMAIL_DOMAIN}/$domain/g" /etc/postfix/master.cf
    sed -i "s/{HOSTNAME}/$hostname/g" /etc/postfix/main.cf
    sed -i "s/{HOSTNAME}/$hostname/g" /etc/postfix/master.cf

    echo "Restart Postfix to apply changes....."
    # Restart Postfix to apply changes
    systemctl restart postfix

    echo "Postfix configuration updated."
}

# Function to install Roundcube
install_roundcube() {
    local EMAIL_DOMAIN=$1
    local HOSTNAME=$2
    local ADMIN_MAILX_EMAIL=$3    
    local MYSQL_ROOT_PASSWORD=$(retrieve_password /usr/local/mysql_root_pwd.txt)
    local ROUNDCUBE_DB_PASSWORD=$(retrieve_password /usr/local/roundcube_db_pwd.txt)
    local ROUNDCUBE_DB_USER="roundcube"
    local ROUNDCUBE_DB_NAME="roundcubemail"
    local ROUNDCUBE_ADMIN_EMAIL="admin@$EMAIL_DOMAIN"
    local ROUNDCUBE_ADMIN_PASS=$(openssl rand -base64 12)

    # Update hostname and hosts file
    echo "$HOSTNAME" > /etc/hostname
    sed -i "s/127.0.0.1.*/127.0.0.1 localhost $HOSTNAME/" /etc/hosts
    hostnamectl set-hostname $HOSTNAME

        # Ensure /etc/mailname exists and update it if hostname is a valid FQDN
    # Ensure /etc/mailname exists and update it if hostname is a valid FQDN
    if [[ "$HOSTNAME" =~ ^[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$ ]]; then
        echo "$HOSTNAME" | sudo tee /etc/mailname > /dev/null
    else
        echo "Warning: '$HOSTNAME' is not a fully qualified domain name. /etc/mailname not changed."
    fi

    # Update system and install necessary packages
    apt-get update -y && apt-get upgrade -y
    apt-get install -y software-properties-common
    LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php -y
    apt-get update

    # Install MySQL without interactive prompts
    export DEBIAN_FRONTEND=noninteractive
    debconf-set-selections <<< "mysql-server mysql-server/root_password password $MYSQL_ROOT_PASSWORD"
    debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $MYSQL_ROOT_PASSWORD"
    apt-get install -y mysql-server

    # Create Roundcube database and user
    mysql -u root -p"$MYSQL_ROOT_PASSWORD" -e "CREATE DATABASE IF NOT EXISTS $ROUNDCUBE_DB_NAME;"
    mysql -u root -p"$MYSQL_ROOT_PASSWORD" -e "CREATE USER IF NOT EXISTS '$ROUNDCUBE_DB_USER'@'localhost' IDENTIFIED BY '$ROUNDCUBE_DB_PASSWORD';"
    mysql -u root -p"$MYSQL_ROOT_PASSWORD" -e "GRANT ALL PRIVILEGES ON $ROUNDCUBE_DB_NAME.* TO '$ROUNDCUBE_DB_USER'@'localhost';"
    mysql -u root -p"$MYSQL_ROOT_PASSWORD" -e "FLUSH PRIVILEGES;"

    # Install required packages for Roundcube
    apt-get install -y postfix apache2 php8.1 libapache2-mod-php8.1 php8.1-cli php8.1-common \
    php8.1-curl php8.1-mysql php8.1-xml php8.1-mbstring php8.1-zip php8.1-intl php8.1-pspell \
    php8.0 libapache2-mod-php8.0 php8.0-cli php8.0-common php8.0-curl php8.0-mysql php8.0-xml \
    php8.0-mbstring php8.0-zip php8.0-intl php8.0-pspell apache2 dovecot-imapd

# Install mailutils if not already installed
if ! dpkg -l | grep -q mailutils; then
    apt-get update
    apt-get install -y mailutils
fi

    # Configure Apache for Roundcube
    cat <<EOF > /etc/apache2/sites-available/roundcube.conf
    <VirtualHost *:80>
        ServerName $HOSTNAME
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

   # a2ensite roundcube.conf
   # systemctl reload apache2

    # Disable old PHP version and enable PHP 8.1
    a2enmod php8.1
    systemctl restart apache2

    # Download and install Roundcube
    echo "Downloading and installing Roundcube..."
    cd /var/www/html
    wget -q https://github.com/roundcube/roundcubemail/releases/download/1.5.0/roundcubemail-1.5.0-complete.tar.gz
    tar -xzf roundcubemail-1.5.0-complete.tar.gz
    mv roundcubemail-1.5.0 roundcube
        echo "chown Roundcube..."

    chown -R www-data:www-data /var/www/html/roundcube
    cd roundcube
    cp config/config.inc.php.sample config/config.inc.php
    echo "Configure Roundcube..."

    # Configure Roundcube
        # Check if mail_domain exists and add if not

    sed -i "s/\$config\['db_dsnw'\].*/\$config\['db_dsnw'\] = 'mysql:\/\/$ROUNDCUBE_DB_USER:$ROUNDCUBE_DB_PASSWORD@localhost\/$ROUNDCUBE_DB_NAME';/" config/config.inc.php
    sed -i "s/\$config\['default_host'\].*/\$config\['default_host'\] = 'localhost';/" config/config.inc.php
    sed -i "s/\$config\['smtp_server'\].*/\$config\['smtp_server'\] = 'localhost';/" config/config.inc.php
    sed -i "s/\$config\['support_url'\].*/\$config\['support_url'\] = 'mailto:$ROUNDCUBE_ADMIN_EMAIL';/" config/config.inc.php

    sed -i "s/\$config\['smtp_port'\].*/\$config\['smtp_port'\] = 25;/" config/config.inc.php
    sed -i "s/\$config\['smtp_user'\].*/\$config\['smtp_user'\] = '';/" config/config.inc.php
    sed -i "s/\$config\['smtp_pass'\].*/\$config\['smtp_pass'\] = '';/" config/config.inc.php

   # if ! check_string_in_file config/config.inc.php "\$config['mail_domain']"; then
        sed -i "/\$config\['smtp_server'\]/i \$config['mail_domain'] = '$EMAIL_DOMAIN';" config/config.inc.php
  #  else
   #     sed -i "s/\$config\['mail_domain'\].*/\$config\['mail_domain'\] = '$EMAIL_DOMAIN';/" config/config.inc.php
    #fi


    echo "Initialize Roundcube database schema..."

    # Initialize Roundcube database schema
    sudo -u www-data ./bin/initdb.sh --dir=./SQL --create

    echo "Roundcube installation completed."

    # Update Postfix configurations
    update_postfix_config "$EMAIL_DOMAIN" "$HOSTNAME"

    # Add First User
    add_roundcube_user "admin" "$ROUNDCUBE_ADMIN_PASS"

 # Send notification to admin email
    send_notification_email "$ADMIN_MAILX_EMAIL" "http://$HOSTNAME/roundcube" "roundcube" "$ROUNDCUBE_ADMIN_PASS"


    # Output Roundcube admin details
    echo "Roundcube admin email: $ROUNDCUBE_ADMIN_EMAIL"
    echo "Roundcube admin password: $ROUNDCUBE_ADMIN_PASS"
}

# Function to add a new Roundcube user
add_roundcube_user() {
    #local ROUNDCUBE_DB_PASSWORD=$1
    local ROUNDCUBE_DB_USER="roundcube"
    local ROUNDCUBE_DB_NAME="roundcubemail"

    local username=$1
    local domain=$(retrieve_password /usr/local/roundcube_mail_domain.txt)
    local password=$2

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

    # Retrieve MySQL root and Roundcube DB passwords
    MYSQL_ROOT_PASSWORD=$(retrieve_password /usr/local/mysql_root_pwd.txt)
    ROUNDCUBE_DB_PASSWORD=$(retrieve_password /usr/local/roundcube_db_pwd.txt)

    # Update Roundcube database with new user
    mysql -u $ROUNDCUBE_DB_USER -p"$ROUNDCUBE_DB_PASSWORD" $ROUNDCUBE_DB_NAME -e "INSERT INTO users (username, mail_host, created, last_login, language) VALUES ('$username', '$domain', NOW(), NOW(), 'en_US.utf8');"


    # Update Postfix configurations
    update_postfix_virtual "$domain" "$username"
    update_postfix_maincf "$domain"

    # Restart Postfix to apply changes
    systemctl restart postfix

    # Notify user via email
    send_welcome_email "$email" "$username"

    # Inform user creation details
    echo "==============================================="
    echo "New Roundcube User Details:"
    echo "Email: $email"
    echo "Username: $username"
    echo "Password: $password"
    echo "==============================================="
}

# Function to uninstall Roundcube, including database and user
uninstall_roundcube() {
    local MYSQL_ROOT_PASSWORD
    MYSQL_ROOT_PASSWORD=$(retrieve_password /usr/local/mysql_root_pwd.txt)

    # Drop Roundcube database and user
    mysql -u root -p"$MYSQL_ROOT_PASSWORD" -e "DROP DATABASE IF EXISTS roundcubemail;"
    mysql -u root -p"$MYSQL_ROOT_PASSWORD" -e "DROP USER 'roundcube'@'localhost';"

    # Remove Roundcube directory
    rm -rf /var/www/html/roundcube

    echo "Roundcube uninstallation completed."
}

# Function to uninstall Postfix, MySQL, and Roundcube
uninstall_all() {

    echo "Uninstalling Postfix, MySQL, and Roundcube..."
    # Call function to uninstall Roundcube database and user
    uninstall_roundcube

    # Stop services
    systemctl stop postfix
    systemctl stop apache2
    systemctl stop mysql

    # Remove packages
    apt-get purge -y postfix mysql-server apache2 php* roundcube

    # Remove configuration files
    rm -rf /etc/postfix
    rm -rf /etc/mysql
    rm -rf /etc/apache2
    rm -rf /etc/roundcube
    rm -rf /var/www/html/roundcube



    echo "Uninstallation completed."
}

# Function to send email notification
send_notification_email() {
    local recipient_email=$1
    local roundcube_url=$2
    local roundcube_db_user=$3
    local roundcube_db_password=$4

    local subject="Roundcube Installation Successful"
    local body="Dear User,

The Roundcube installation was successful. Here are the details:

Roundcube URL: $roundcube_url
Roundcube Database Username: $roundcube_db_user
Roundcube Database Password: $roundcube_db_password

Please keep these details secure.

Best regards,
Your Server Team"

    echo "$body" | mail -s "$subject" "$recipient_email"
}

# Function to send welcome email to user
send_welcome_email() {
    local recipient_email=$1
    local roundcube_user=$2

    local subject="Welcome to Roundcube Webmail, $roundcube_user"
    local body="Dear User,\n\nCongratulations! 
    Your Roundcube email has been successfully set up.
    \n\nHere are your login details:\n\n
    Email Address: $recipient_email\n
    Username: $roundcube_user\n
    You can access your Roundcube webmail interface anytime\n\n
    Thank you,\nAdmin Team"

    echo -e "$body" | mail -s "$subject" "$recipient_email"
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
echo "3. Uninstall Roundcube"
echo "4. Uninstall Postfix, MySQL, and Roundcube"

read -p "Enter your choice (1, 2, 3, or 4): " choice

case $choice in
    1)
        # Prompt for email domain, hostname, and MySQL root password
        read -p "Enter email domain (e.g., example.com): " EMAIL_DOMAIN
        read -p "Enter  hostname (e.g., mail.example.com): " HOSTNAME
        read -p "Enter  Admin Email: " ADMIN_MAILX_EMAIL

        # Hostname (e.g., mail.example.com): "
      #  HOSTNAME=$(hostname)
        # Validate hostname
        if [[ ! "$HOSTNAME" =~ ^[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$ ]]; then
            echo "Error: '$HOSTNAME' is not a fully qualified domain name. Please enter a valid FQDN."
            exit 1
        fi

        # Generate MySQL root password
        MYSQL_ROOT_PASSWORD=$(generate_password 16)
        ROUNDCUBE_DB_PASSWORD=$(generate_password 16)

            echo "$MYSQL_ROOT_PASSWORD" > /usr/local/mysql_root_pwd.txt
            echo "$ROUNDCUBE_DB_PASSWORD" > /usr/local/roundcube_db_pwd.txt
            echo "$EMAIL_DOMAIN" > /usr/local/roundcube_mail_domain.txt

        # Install Roundcube with specified configurations
        install_roundcube "$EMAIL_DOMAIN" "$HOSTNAME" "$ADMIN_MAILX_EMAIL"

        # Output MySQL root password
        #echo "MySQL root password: $MYSQL_ROOT_PASSWORD"
        ;;

    2)
        read -p "Enter new username: " username
      #  read -p "Enter domain: " domain
        read -sp "Enter password for $username@$(retrieve_password /usr/local/roundcube_mail_domain.txt): " password
        echo

        # Call function to add Roundcube user
        add_roundcube_user "$username" "$password"

        ;;

    3)
    read -p "Are you sure you want to uninstall ? (yes or no): " RECONFIRM_UNINSTALL

    if [[ "$RECONFIRM_UNINSTALL" == "yes" ]]; then
        uninstall_roundcube
    else
        echo "Uninstallation aborted. Exiting."
    fi
    exit 1
    ;;

    4)
    read -p "Are you sure you want to uninstall Postfix, MySQL, and Roundcube ? (yes or no): " RECONFIRM_UNINSTALL

    if [[ "$RECONFIRM_UNINSTALL" == "yes" ]]; then
       # Call function to uninstall Postfix, MySQL, and Roundcube
        uninstall_all    else
        echo "Uninstallation aborted. Exiting."
    fi
    exit 1
    ;;

    *)
        echo "Invalid choice. Exiting."
        exit 1
        ;;
esac
