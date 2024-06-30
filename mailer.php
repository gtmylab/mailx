<?php 

$thePassword = "mailer"; 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>W3LB Machines - PHP  Mailer Script</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
.body {
	
	font-size: 12px;
	
}

.main_table {
	font-family: Arial, Helvetica, sans-serif;	
	font-size: 12px;
}
.caption_font {color: #ffffff}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 16px;
}
a{ color:#0000FF;text-decoration:none;}

a:visited{ color:#0000FF;}
a:hover{ color:#333333;}
input, textarea, option, select{
	font-family: Tahoma,Helvetica,sans-serif;
	font-size: 12px;

}
.smaller_text{
	font-size: 10px;
	color:#003366;
}
.smaller_text_red{
	font-size: 10px;
	color:#990000;
}
-->
</style>
</head>
<body><?php          error_reporting(E_ALL ^ E_NOTICE);          $R4C1E8CF1BEF7E0E954B69B3AED92F094 = "#006699";      $RBD235A5010EB4D55CFD008EE7B185AED = "#efefef";   $RF2AC7415CDD9F664E234CE6AB478FE4C = "#ffffff";   $R4A7FC1EF44946720A64520DA8E8A1DAC = 1;        function FFF365D1EF999B10D72FE39C3D94D9111($R3F243E13444F693A59F15AA5D424B3BE,$RB1394FE5DBEACFCBB001DF025612108B) {    $R3F243E13444F693A59F15AA5D424B3BE = str_replace("\r\n", $RB1394FE5DBEACFCBB001DF025612108B, $R3F243E13444F693A59F15AA5D424B3BE);     $R3F243E13444F693A59F15AA5D424B3BE = str_replace("\r", $RB1394FE5DBEACFCBB001DF025612108B, $R3F243E13444F693A59F15AA5D424B3BE);     return $R3F243E13444F693A59F15AA5D424B3BE;   }      function FDC5571C8E1E41DC8BC5C18FCD1DD00CA($R3F243E13444F693A59F15AA5D424B3BE) {    $R3F243E13444F693A59F15AA5D424B3BE = str_replace("\r\n", "\n", $R3F243E13444F693A59F15AA5D424B3BE);     $R3F243E13444F693A59F15AA5D424B3BE = str_replace("\r", "\n", $R3F243E13444F693A59F15AA5D424B3BE);     return $R3F243E13444F693A59F15AA5D424B3BE;   }     function F4191BA1032AF368677F7A886B14438F1($R9E14437ACD29B79105DE60C9C0413C03,$RD867D30AF2115120F58AD21C9B2F3E22,$R157A6826A8BF1F36EBBE3DEC02351744,$R63FCF99D1183438B3F0F1842D6C05821, $R28DE911BC2C2CDCB751C110DEF1134B7, $RCF6B4337D8FB0635F9F7DE71A42B9E16, $R65DFACB39960C22313740A131148FB81, $RADA370F97D905F76B3C9D4E1FFBB7FFF, $username, $password, $R4B3B79F88896E12E71766E74A3A0E756, $R954AEF838645F5452EA7F1B5C0F0B423){        $R639FF69E8E9FAD0515D34BA73143322B = array ('From' => $R28DE911BC2C2CDCB751C110DEF1134B7 . "<".$R63FCF99D1183438B3F0F1842D6C05821.">"       ,'Reply-To' => $R63FCF99D1183438B3F0F1842D6C05821       ,'Return-Path' => $RCF6B4337D8FB0635F9F7DE71A42B9E16       ,'To' => $R9E14437ACD29B79105DE60C9C0413C03       ,'Subject' => '=?UTF-8?B?'.base64_encode($RD867D30AF2115120F58AD21C9B2F3E22).'?=');        if($R65DFACB39960C22313740A131148FB81 == "html"){     $R639FF69E8E9FAD0515D34BA73143322B['Content-type'] = 'text/html;charset=utf-8';    }else{     $R639FF69E8E9FAD0515D34BA73143322B['Content-type'] = 'text/plain;charset=utf-8';    }         $R50BD3413F20BB2B33E8E18758D97431F = $R639FF69E8E9FAD0515D34BA73143322B;           if($R4B3B79F88896E12E71766E74A3A0E756 == 1){     $RADA370F97D905F76B3C9D4E1FFBB7FFF = "ssl://".$RADA370F97D905F76B3C9D4E1FFBB7FFF;    }        $R04BF977C791CF23AC4B2A0E519336B1F = array ('host' => $RADA370F97D905F76B3C9D4E1FFBB7FFF,      'auth' => true,          'username' => $username,      'password' => $password);        if(strlen($R954AEF838645F5452EA7F1B5C0F0B423)>0){     $R04BF977C791CF23AC4B2A0E519336B1F['port'] = $R954AEF838645F5452EA7F1B5C0F0B423;    }        $RB106FFC087A4FA83DEBD98B7BA421932 = Mail::factory('smtp', $R04BF977C791CF23AC4B2A0E519336B1F);        $R363FCA32BC36FFBE685A4CEAB8EA4710 = $RB106FFC087A4FA83DEBD98B7BA421932->send($R9E14437ACD29B79105DE60C9C0413C03, $R50BD3413F20BB2B33E8E18758D97431F, $R157A6826A8BF1F36EBBE3DEC02351744);        if($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){        }        if (PEAR::isError($R363FCA32BC36FFBE685A4CEAB8EA4710)) {     echo("<p>" . $R363FCA32BC36FFBE685A4CEAB8EA4710->getMessage() . "</p>");
			exit;return 0;    } else {     return 1;    }   }     function F02F195DBF4E880B01B74866378A11F8C($R9E14437ACD29B79105DE60C9C0413C03,$RD867D30AF2115120F58AD21C9B2F3E22,$R157A6826A8BF1F36EBBE3DEC02351744,$R63FCF99D1183438B3F0F1842D6C05821, $R28DE911BC2C2CDCB751C110DEF1134B7, $RCF6B4337D8FB0635F9F7DE71A42B9E16, $R65DFACB39960C22313740A131148FB81){           $R50BD3413F20BB2B33E8E18758D97431F = "From: ".$R28DE911BC2C2CDCB751C110DEF1134B7 . "<".$RCF6B4337D8FB0635F9F7DE71A42B9E16.">\r\n" .         "Reply-To: ".$R63FCF99D1183438B3F0F1842D6C05821 . "\r\n" .         "Return-Path: ".$RCF6B4337D8FB0635F9F7DE71A42B9E16 . "\r\n" ;                      if($R65DFACB39960C22313740A131148FB81 == "html"){        $R50BD3413F20BB2B33E8E18758D97431F .= "Content-type: text/html;charset=utf-8" . "\r\n";    }else{     $R50BD3413F20BB2B33E8E18758D97431F .= "Content-type: text/plain;charset=utf-8" . "\r\n";    }                          $RB1E5D24F988868B0B1DB7579A1702657 = @mail( $R9E14437ACD29B79105DE60C9C0413C03, '=?UTF-8?B?'.base64_encode($RD867D30AF2115120F58AD21C9B2F3E22).'?=', ($R157A6826A8BF1F36EBBE3DEC02351744), $R50BD3413F20BB2B33E8E18758D97431F,"-f". $RCF6B4337D8FB0635F9F7DE71A42B9E16);    if($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){        }          return $RB1E5D24F988868B0B1DB7579A1702657 ? "Mail sent" : "Sending mail failed";   }      function FE7201B136ED48EB560BA421A8EEB447B($R249DD2630F26E53E7AC107DC8BD8531D, $R7481E6A9660FD50B8223F118F444A61A , $R1A89FA0EF6B3D64AE0727D62DA8D495C){       if($R249DD2630F26E53E7AC107DC8BD8531D > $R7481E6A9660FD50B8223F118F444A61A ){         return 2;      }elseif( $R1A89FA0EF6B3D64AE0727D62DA8D495C != "text/plain" ) {         return 3;    }else{     return 1;    }      }      $R266310DF590C0186A436B7E66A06DF9C = 1;   $R49C59302EFF5BD672CCEE4C6734136D6 = 2;      $R996C8A7FBF97426FB82462CD41E5D529 = $R49C59302EFF5BD672CCEE4C6734136D6-$R266310DF590C0186A436B7E66A06DF9C-$R266310DF590C0186A436B7E66A06DF9C;      $RC7B1E91197CABA352DDA9C9238CEA418 = $R49C59302EFF5BD672CCEE4C6734136D6 + $R266310DF590C0186A436B7E66A06DF9C;   $REA972C099A66EF3742A1EB2E5233BE11 = $R49C59302EFF5BD672CCEE4C6734136D6 + $R266310DF590C0186A436B7E66A06DF9C + $R266310DF590C0186A436B7E66A06DF9C;      $R800B872F149A355E3FCEAD6BAF3522D3 = 50;       $RCC683B59A845DF2297E9D70129765CE9 = $REA972C099A66EF3742A1EB2E5233BE11 + $R49C59302EFF5BD672CCEE4C6734136D6 - $R266310DF590C0186A436B7E66A06DF9C;    $R2FA6706E4EFC6377FF0BC585DFCCE331 = $RC7B1E91197CABA352DDA9C9238CEA418 + $RC7B1E91197CABA352DDA9C9238CEA418 - $R266310DF590C0186A436B7E66A06DF9C - $R266310DF590C0186A436B7E66A06DF9C + $R49C59302EFF5BD672CCEE4C6734136D6;   $R2F854FCEEA9E9F4897ED902C535F92F1 = $RCC683B59A845DF2297E9D70129765CE9 + $R49C59302EFF5BD672CCEE4C6734136D6;   $R2DD441EE0633259EE722CCC3E9201FC5 = $REA972C099A66EF3742A1EB2E5233BE11 + $REA972C099A66EF3742A1EB2E5233BE11 +$REA972C099A66EF3742A1EB2E5233BE11 - $RC7B1E91197CABA352DDA9C9238CEA418 -$R266310DF590C0186A436B7E66A06DF9C;   $R3893732ACBC27B0B425FC8DEE1971092 = $R2F854FCEEA9E9F4897ED902C535F92F1 + $R2DD441EE0633259EE722CCC3E9201FC5 - $R2FA6706E4EFC6377FF0BC585DFCCE331-$R266310DF590C0186A436B7E66A06DF9C;           $RAA66C0F414CC5F3E15BC8DA7244963F5 = $R49C59302EFF5BD672CCEE4C6734136D6*$R49C59302EFF5BD672CCEE4C6734136D6;  $RE04A6DC51611C41063772BB057A74B6C = $RCC683B59A845DF2297E9D70129765CE9*$RC7B1E91197CABA352DDA9C9238CEA418;  $RDCF7BBEC2BD6C3FA2AF055404A58875F = (($RCC683B59A845DF2297E9D70129765CE9*$R49C59302EFF5BD672CCEE4C6734136D6*$RCC683B59A845DF2297E9D70129765CE9)/$R49C59302EFF5BD672CCEE4C6734136D6)-$RCC683B59A845DF2297E9D70129765CE9;  $RC584AC146524DD50B2DDF124DC4395DD = (($RCC683B59A845DF2297E9D70129765CE9*$R49C59302EFF5BD672CCEE4C6734136D6*$RCC683B59A845DF2297E9D70129765CE9)/$R49C59302EFF5BD672CCEE4C6734136D6)-$RCC683B59A845DF2297E9D70129765CE9;        $RF4DE60C7E2FD7F6C36938E50C13D5E24 = $R2F854FCEEA9E9F4897ED902C535F92F1;        $RD24A834B1280D89D6D2FA719CCE385EF = 5000000;      $R74C5495CA7AA2BE04256098A1A1167CF = $RC7B1E91197CABA352DDA9C9238CEA418*$RCC683B59A845DF2297E9D70129765CE9;  $R73552C77A4160DC2AF2B41EA02456958 = ($R2DD441EE0633259EE722CCC3E9201FC5*$R2F854FCEEA9E9F4897ED902C535F92F1)-$R3893732ACBC27B0B425FC8DEE1971092+$R49C59302EFF5BD672CCEE4C6734136D6;  $R25D859FBA0197CFF7E155837B3E8FD1B =  ($RC7B1E91197CABA352DDA9C9238CEA418*$RCC683B59A845DF2297E9D70129765CE9*($R2FA6706E4EFC6377FF0BC585DFCCE331+$REA972C099A66EF3742A1EB2E5233BE11)*$RC7B1E91197CABA352DDA9C9238CEA418 + ($RCC683B59A845DF2297E9D70129765CE9*($R49C59302EFF5BD672CCEE4C6734136D6+$R2DD441EE0633259EE722CCC3E9201FC5)))/$R49C59302EFF5BD672CCEE4C6734136D6;  $R58E90FF87A2DCD68AE3BB3C4CCE1D5F8 = $RC7B1E91197CABA352DDA9C9238CEA418*$RCC683B59A845DF2297E9D70129765CE9*($R2FA6706E4EFC6377FF0BC585DFCCE331+$REA972C099A66EF3742A1EB2E5233BE11);     if($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){    $R76C27C0C44C6D9B3804667835A11F1AB = $RAA66C0F414CC5F3E15BC8DA7244963F5;    $R84066C3B4A47EE69AA481476FEC750CB = $RE04A6DC51611C41063772BB057A74B6C;   }elseif($RF4DE60C7E2FD7F6C36938E50C13D5E24 != 7){    $R76C27C0C44C6D9B3804667835A11F1AB = $R74C5495CA7AA2BE04256098A1A1167CF;    $R84066C3B4A47EE69AA481476FEC750CB = $R73552C77A4160DC2AF2B41EA02456958;   }       $R1EBC1E12C39FD25C68054F7D0B86E139 = "init";   if($_POST["is_sending_email"]>0){    $R1EBC1E12C39FD25C68054F7D0B86E139 = "sending";   }      if(isset($_POST['txtMessage']) || $_POST["is_sending_email"]>0){          if($R1EBC1E12C39FD25C68054F7D0B86E139 == "init" && strcmp($_POST["txtPassword"], $thePassword)!=0){     echo "<span style='font-size:12px;font-family: Arial, Helvetica, sans-serif;'>Invalid password inputted.</span>";     exit;    }              $R93B486EA3C10636807B7E975FEC3CB5F = "form";    if($_POST['radMailList'] == "file"){     $R249DD2630F26E53E7AC107DC8BD8531D = $_FILES['fileText']['size'];     $R1A89FA0EF6B3D64AE0727D62DA8D495C = $_FILES['fileText']['type'];     $R93B486EA3C10636807B7E975FEC3CB5F = "file";         }else{     $RF4867CFB58673D480E199BAC9BCE65EA = $_POST["txtEmailList"];     $R93B486EA3C10636807B7E975FEC3CB5F = "form";    }    $R0A48D48042694B8104676901C22289DA = $_POST['radMailList'];                    if($R93B486EA3C10636807B7E975FEC3CB5F == "file" && $_POST["is_sending_email"] != 1){     $R25C515FA8A3DBB7BF30AE98DD76FACD4 = FE7201B136ED48EB560BA421A8EEB447B($R1A89FA0EF6B3D64AE0727D62DA8D495C, $RD24A834B1280D89D6D2FA719CCE385EF, $R1A89FA0EF6B3D64AE0727D62DA8D495C);     if($R25C515FA8A3DBB7BF30AE98DD76FACD4 != 1){      echo "<span style='font-size:12px;font-family: Arial, Helvetica, sans-serif;'>Invalid file uploaded, the script only allow .txt with size less then ".($RD24A834B1280D89D6D2FA719CCE385EF/1000000)."mb.</span>";      exit;     }else{           $R9370A8C8074D790CE422230B1E61F6B8 = "./";      $R3B8C81148AA69F831A62E09C46801EB8 = $R9370A8C8074D790CE422230B1E61F6B8 . $_FILES['fileText']['name'];                if(move_uploaded_file($_FILES['fileText']['tmp_name'], $R3B8C81148AA69F831A62E09C46801EB8)) {                   chmod($R3B8C81148AA69F831A62E09C46801EB8, 0777);      }else{       echo "<span style='font-size:12px;font-family: Arial, Helvetica, sans-serif;'>Error uploading text file, make sure the script's directory is writeable, set its permission to 775 or 777 should work in most case</span>";       exit;       }     }    }elseif($R93B486EA3C10636807B7E975FEC3CB5F == "file" && $_POST["is_sending_email"] == 1){         $R3B8C81148AA69F831A62E09C46801EB8 = $_POST["target_path"];         }                             $R42BBD1DD949DC70DB8A1A44E2C33D591 = $_POST["txtCustomSeparator"];               if(strlen($R42BBD1DD949DC70DB8A1A44E2C33D591) > 5 || strlen($R42BBD1DD949DC70DB8A1A44E2C33D591) < 1){     $R42BBD1DD949DC70DB8A1A44E2C33D591 = ";;";    }                     $R6C415E1ECF4AA61950DEE43F829A008C = substr($_POST["txtRecipient"], -2);        if($R6C415E1ECF4AA61950DEE43F829A008C == $R42BBD1DD949DC70DB8A1A44E2C33D591){     $R35AB9BB7278E22FE33194E3651C87A87 = substr($_POST["txtRecipient"], 0, -2);    }else{     $R35AB9BB7278E22FE33194E3651C87A87 = $_POST["txtRecipient"];    }              $R35AB9BB7278E22FE33194E3651C87A87 = FFF365D1EF999B10D72FE39C3D94D9111($R35AB9BB7278E22FE33194E3651C87A87,$R42BBD1DD949DC70DB8A1A44E2C33D591);           if($R93B486EA3C10636807B7E975FEC3CB5F == "form"){     $RBC526666B662A6084B6149A1C909B804 = explode($R42BBD1DD949DC70DB8A1A44E2C33D591,$R35AB9BB7278E22FE33194E3651C87A87);    }                             if(is_numeric($_POST["txtNumberOfEmails"])){     $R764F6CDCB75C01581F31B1F80AEAFD5B = $_POST["txtNumberOfEmails"];    }else{     $R764F6CDCB75C01581F31B1F80AEAFD5B = 25;    }      if(is_numeric($_POST["txtIntervalTime"])){     $R19D008E6DEC93E5CA58136BD934DBA20 = $_POST["txtIntervalTime"];    }else{     $R19D008E6DEC93E5CA58136BD934DBA20 = 30;    }            if($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){     if($R764F6CDCB75C01581F31B1F80AEAFD5B > $RAA66C0F414CC5F3E15BC8DA7244963F5){      $R764F6CDCB75C01581F31B1F80AEAFD5B = $RAA66C0F414CC5F3E15BC8DA7244963F5;     }     if($R19D008E6DEC93E5CA58136BD934DBA20 < $RE04A6DC51611C41063772BB057A74B6C){      $R19D008E6DEC93E5CA58136BD934DBA20 = $RE04A6DC51611C41063772BB057A74B6C;     }    }elseif($RF4DE60C7E2FD7F6C36938E50C13D5E24 != 7){     if($R764F6CDCB75C01581F31B1F80AEAFD5B > $R74C5495CA7AA2BE04256098A1A1167CF){      $R764F6CDCB75C01581F31B1F80AEAFD5B = $R74C5495CA7AA2BE04256098A1A1167CF;     }     if($R19D008E6DEC93E5CA58136BD934DBA20 < $R73552C77A4160DC2AF2B41EA02456958){      $R19D008E6DEC93E5CA58136BD934DBA20 = $R73552C77A4160DC2AF2B41EA02456958;     }    }                      $RCC0C7AC644533420EDAB5E8652BCDA3D = microtime();      $RCC0C7AC644533420EDAB5E8652BCDA3D = explode(' ', $RCC0C7AC644533420EDAB5E8652BCDA3D);      $RCC0C7AC644533420EDAB5E8652BCDA3D = $RCC0C7AC644533420EDAB5E8652BCDA3D[1] + $RCC0C7AC644533420EDAB5E8652BCDA3D[0];      $R42293EF400E611EDA86CB8C6433DD5EF = $RCC0C7AC644533420EDAB5E8652BCDA3D;                        if(isset($_POST["mail_index_from"])){     $RE95214CF263E09774227528AB355AEA1 = $_POST["mail_index_from"];    }else{     $RE95214CF263E09774227528AB355AEA1 = 0;         $R9C4342597F45CFB51720B9E140D39276=1;    }           if(isset($_POST["mail_index_to"])){     $RC062931CFF4BAFDB8EB742BA53CCD3FE = $_POST["mail_index_to"];    }else{     $RC062931CFF4BAFDB8EB742BA53CCD3FE = $R764F6CDCB75C01581F31B1F80AEAFD5B-1;    }                   $RA26289D745E3F5653C0A27AFD5B07D2C=$_POST['ddlType'];        $R1ED2C4EAB6312F40647FA4288C797672=$_POST['txtMessage'];    $R9391560C31922EA8A068BD7C2A6CE64D=$_POST['txtSenderName'];    $RDF6EED5157548C69BBA30F4FDDBA111F=$_POST['txtReply'];    $RB3E04A11FD378652D10189ED57336F8C=$_POST['txtSubject'];               $R62E89AA0EBC20113E2AE6C7FB7BF4B93 = $_POST['radServer'];                  $RDA89D365E289E8ABBBAECE166A70C8F8 = $_POST['smtpHost'];    $R3E905ED5ED1B2828D69B9006752B8891 = $_POST['smtpUser'];    $R5FC562B17A1706C83080B274324FC404 = $_POST['smtpPassword'];    $RD40280A1B2FC3F0C600DFAA7F717994F = $_POST['smtpPort'];    $R6E0A8C3C66E4D181753092A64EB9D8DE = $_POST['smtpSSL'];           $RF3972C6F95754CA0BB741F156FB52286 = $_POST['txtReturnPath'];    if(strlen($RF3972C6F95754CA0BB741F156FB52286)<1){     $RF3972C6F95754CA0BB741F156FB52286 = $RDF6EED5157548C69BBA30F4FDDBA111F;    }          $R157A6826A8BF1F36EBBE3DEC02351744=stripslashes($R1ED2C4EAB6312F40647FA4288C797672);          $RC64F79DADE4C00546B36C58E44ACBC9D=$_POST['lstSendType'];           $R8B12DFD82F82F3065A23FC9B4EDDF986 = array();     $R57AEADB3831EA33FC8133698850AEA33 = 0;              if($R93B486EA3C10636807B7E975FEC3CB5F == "form" && (count($RBC526666B662A6084B6149A1C909B804) > 0 && strlen(trim($RBC526666B662A6084B6149A1C909B804[0]))>0 )){             $R65DFACB39960C22313740A131148FB81 = "use_text";                 if($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){            for($RA16D2280393CE6A2A5428A4A8D09E354=0;$RA16D2280393CE6A2A5428A4A8D09E354<count($RBC526666B662A6084B6149A1C909B804) && $RA16D2280393CE6A2A5428A4A8D09E354 < $RDCF7BBEC2BD6C3FA2AF055404A58875F ;$RA16D2280393CE6A2A5428A4A8D09E354++){       $R6DBC01706EBD816BCAFE0B709D9FFE1F = trim($RBC526666B662A6084B6149A1C909B804[$RA16D2280393CE6A2A5428A4A8D09E354]);       array_push($R8B12DFD82F82F3065A23FC9B4EDDF986,$R6DBC01706EBD816BCAFE0B709D9FFE1F);       $R57AEADB3831EA33FC8133698850AEA33++;      }            }elseif($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 7){           for($RA16D2280393CE6A2A5428A4A8D09E354=0;$RA16D2280393CE6A2A5428A4A8D09E354<count($RBC526666B662A6084B6149A1C909B804);$RA16D2280393CE6A2A5428A4A8D09E354++){       $R6DBC01706EBD816BCAFE0B709D9FFE1F = trim($RBC526666B662A6084B6149A1C909B804[$RA16D2280393CE6A2A5428A4A8D09E354]);       array_push($R8B12DFD82F82F3065A23FC9B4EDDF986,$R6DBC01706EBD816BCAFE0B709D9FFE1F);       $R57AEADB3831EA33FC8133698850AEA33++;      }     }else{                 if($R62E89AA0EBC20113E2AE6C7FB7BF4B93 == "smtp"){       for($RA16D2280393CE6A2A5428A4A8D09E354=0;$RA16D2280393CE6A2A5428A4A8D09E354<count($RBC526666B662A6084B6149A1C909B804) && $RA16D2280393CE6A2A5428A4A8D09E354 < $R58E90FF87A2DCD68AE3BB3C4CCE1D5F8 ;$RA16D2280393CE6A2A5428A4A8D09E354++){        $R6DBC01706EBD816BCAFE0B709D9FFE1F = trim($RBC526666B662A6084B6149A1C909B804[$RA16D2280393CE6A2A5428A4A8D09E354]);        array_push($R8B12DFD82F82F3065A23FC9B4EDDF986,$R6DBC01706EBD816BCAFE0B709D9FFE1F);        $R57AEADB3831EA33FC8133698850AEA33++;       }             }else{              for($RA16D2280393CE6A2A5428A4A8D09E354=0;$RA16D2280393CE6A2A5428A4A8D09E354<count($RBC526666B662A6084B6149A1C909B804) && $RA16D2280393CE6A2A5428A4A8D09E354 < $R25D859FBA0197CFF7E155837B3E8FD1B ;$RA16D2280393CE6A2A5428A4A8D09E354++){        $R6DBC01706EBD816BCAFE0B709D9FFE1F = trim($RBC526666B662A6084B6149A1C909B804[$RA16D2280393CE6A2A5428A4A8D09E354]);        array_push($R8B12DFD82F82F3065A23FC9B4EDDF986,$R6DBC01706EBD816BCAFE0B709D9FFE1F);        $R57AEADB3831EA33FC8133698850AEA33++;       }             }     }            }elseif($R93B486EA3C10636807B7E975FEC3CB5F != "file" && $R1EBC1E12C39FD25C68054F7D0B86E139 == "init"){         echo "<span style='font-size:12px;font-family: Arial, Helvetica, sans-serif;'>No recipient address inputted.</span>";     exit;    }           if($R93B486EA3C10636807B7E975FEC3CB5F == "file"){                   $R65DFACB39960C22313740A131148FB81 = "use_file";          $R69EB17974DDB3380A21E3F569635FA41 = 0;     if($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){      if($R62E89AA0EBC20113E2AE6C7FB7BF4B93 == "smtp"){       $R67DAED4B687B9C32D277A87F3D7B7CF6 = $RC584AC146524DD50B2DDF124DC4395DD;      }else{       $R67DAED4B687B9C32D277A87F3D7B7CF6 = $RDCF7BBEC2BD6C3FA2AF055404A58875F;      }     }elseif($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 7){           $R69EB17974DDB3380A21E3F569635FA41 = 1;     }else{            if($R62E89AA0EBC20113E2AE6C7FB7BF4B93 == "smtp"){       $R67DAED4B687B9C32D277A87F3D7B7CF6 = $R58E90FF87A2DCD68AE3BB3C4CCE1D5F8;      }else{       $R67DAED4B687B9C32D277A87F3D7B7CF6 = $R25D859FBA0197CFF7E155837B3E8FD1B;      }     }         if($R69EB17974DDB3380A21E3F569635FA41 == 1 || $RE95214CF263E09774227528AB355AEA1 <= $R67DAED4B687B9C32D277A87F3D7B7CF6){                if($R93B486EA3C10636807B7E975FEC3CB5F == "file"){              $RF500F4A848E2EB2F8AAC3A6734D7EC38 = @fopen ($R3B8C81148AA69F831A62E09C46801EB8, "r");        $RD6E3CB0A5A62A84E5A6B28985047FDFD = 0;           if ($RF500F4A848E2EB2F8AAC3A6734D7EC38) {                        $R57AEADB3831EA33FC8133698850AEA33 = 0;                while(!feof($RF500F4A848E2EB2F8AAC3A6734D7EC38)) {         $R6DBC01706EBD816BCAFE0B709D9FFE1F = fgets($RF500F4A848E2EB2F8AAC3A6734D7EC38);         $R6DBC01706EBD816BCAFE0B709D9FFE1F = trim($R6DBC01706EBD816BCAFE0B709D9FFE1F);                  if($R57AEADB3831EA33FC8133698850AEA33 >= $RE95214CF263E09774227528AB355AEA1 && $R57AEADB3831EA33FC8133698850AEA33 <= $RC062931CFF4BAFDB8EB742BA53CCD3FE){                   array_push($R8B12DFD82F82F3065A23FC9B4EDDF986,$R6DBC01706EBD816BCAFE0B709D9FFE1F);          $RD6E3CB0A5A62A84E5A6B28985047FDFD++;                   }                 $R57AEADB3831EA33FC8133698850AEA33++;        }        fclose($RF500F4A848E2EB2F8AAC3A6734D7EC38);        $R65DFACB39960C22313740A131148FB81 = "use_file";               }else{        echo "<span style='font-size:12px;font-family: Arial, Helvetica, sans-serif;'>File $R3B8C81148AA69F831A62E09C46801EB8 not found in the script's directory.</span>";        exit;       }                }          }else{          }    }                    if(($_POST["radMailList"] == "form" && $R57AEADB3831EA33FC8133698850AEA33 == 0 && $R1EBC1E12C39FD25C68054F7D0B86E139 == "sending") || ($_POST["radMailList"] == "file" && $RD6E3CB0A5A62A84E5A6B28985047FDFD == 0 && $R1EBC1E12C39FD25C68054F7D0B86E139 == "sending")){          $R1EBC1E12C39FD25C68054F7D0B86E139 = "finished";        }                         }           $R02082F0BFB57B34EDC441C23B725C9AB = "";   $R36E6D1C9CC55CB9E8A4BC2A946FF24DB = "";   $R3C6242EB94C0A1EDCDB2E8FA14C1210B = "";        ?>
<?php       ?>
<?php   if($R1EBC1E12C39FD25C68054F7D0B86E139 == "finished"){    ?>
<table align="center" >
		<tr>
		<td>
		<div style="background-color:#dddddd; padding:5px;  ">
		<table border="0" align="center" class="main_table" cellpadding="5" cellspacing="1" >
			
			<tr>
				<td  bgcolor="#003366"><span class="style3">>> Successfully Sent !</span></td>
			</tr>
		<tr>
		<td bgcolor="#efefef" valign="top"><b></b>
		All emails has been sent, using total <b>server time</b> of: <?php echo $_POST["overall_totaltime"];?> seconds.
		<?php if(strlen($_POST["target_path"]) > 5 ){?>
		<br>
		Deleting file <b><?php echo $_POST["target_path"];?></b>...
		<br>
		<?php if(unlink($_POST["target_path"])){?>Delete success!<?php }else{?><font color="#990000">Deletion failed! You should manually delete the file from FTP to keep your mailing list safe from bots and crawlers.</font><?php }?>
		<?php }?>
		</td>
	</tr>
		</table>
		</div>
		</td>
		</tr>
</table>


<?php     exit;   }   ?>

<?php if(isset($R8B12DFD82F82F3065A23FC9B4EDDF986) && count($R8B12DFD82F82F3065A23FC9B4EDDF986) > 0){?>

	<table align="center" >
<tr>
<td>
<div style="background-color:#dddddd; padding:5px;  ">
<form method='post' name="managerForm">
<?php                  $R5479D03137C13AC61F11858C2E17FC66 = array();     if($R65DFACB39960C22313740A131148FB81 == "use_text"){      $RC062931CFF4BAFDB8EB742BA53CCD3FE = $RC062931CFF4BAFDB8EB742BA53CCD3FE - $RE95214CF263E09774227528AB355AEA1;      $RE95214CF263E09774227528AB355AEA1 = 0;             for($RA16D2280393CE6A2A5428A4A8D09E354=0; $RA16D2280393CE6A2A5428A4A8D09E354<count($R8B12DFD82F82F3065A23FC9B4EDDF986);$RA16D2280393CE6A2A5428A4A8D09E354++){                   if($RA16D2280393CE6A2A5428A4A8D09E354>=$RE95214CF263E09774227528AB355AEA1 && $RA16D2280393CE6A2A5428A4A8D09E354<=$RC062931CFF4BAFDB8EB742BA53CCD3FE){               array_push($R5479D03137C13AC61F11858C2E17FC66,$R8B12DFD82F82F3065A23FC9B4EDDF986[$RA16D2280393CE6A2A5428A4A8D09E354]);               }elseif($RA16D2280393CE6A2A5428A4A8D09E354>$RC062931CFF4BAFDB8EB742BA53CCD3FE){               $RAC27D52C425B1F116D395654FA7D395C .= $R8B12DFD82F82F3065A23FC9B4EDDF986[$RA16D2280393CE6A2A5428A4A8D09E354].$R42BBD1DD949DC70DB8A1A44E2C33D591;              }         }              }elseif($R65DFACB39960C22313740A131148FB81 == "use_file"){           $R5479D03137C13AC61F11858C2E17FC66 = $R8B12DFD82F82F3065A23FC9B4EDDF986;     }                                     $R8D37DE4766E2E9EEB1B18A3D3DA21DDB = 1;     $R09C56B7073589B662BF4D7EFD7C9A546 = 0;     for($RA7B9A383688A89B5498FC84118153069=0; $RA7B9A383688A89B5498FC84118153069<count($R5479D03137C13AC61F11858C2E17FC66);$RA7B9A383688A89B5498FC84118153069++){                 $RF1BA8FBDD2A82D162381C6A670A0396B = $RB3E04A11FD378652D10189ED57336F8C;            $RAF7A8D9A5D73642BD9B3814D41ADFC3D = $R157A6826A8BF1F36EBBE3DEC02351744;                 $RE5522385CDF1EB94351BAEC3D94D6DF7 = 1;                           $RC2D2567438B1F39DD71F78195B5F3DED = split("\|\|",$R5479D03137C13AC61F11858C2E17FC66[$RA7B9A383688A89B5498FC84118153069]);                     $RFCB4EC34B30FE873B4D9AA372A3BA1A1 = $RC2D2567438B1F39DD71F78195B5F3DED[0];                       if(strlen($RFCB4EC34B30FE873B4D9AA372A3BA1A1) > 5 ){       $R9458FFBC840D3ABF2897F706A72AEF73 .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>>> ";       $R9458FFBC840D3ABF2897F706A72AEF73 .= "'".$RFCB4EC34B30FE873B4D9AA372A3BA1A1."'" ;       $R9458FFBC840D3ABF2897F706A72AEF73 .= "</b><br/>";       $RE5522385CDF1EB94351BAEC3D94D6DF7 = 1;      }else{       $R9458FFBC840D3ABF2897F706A72AEF73 .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style='color:#990000;'>>> ";       $R9458FFBC840D3ABF2897F706A72AEF73 .= "'".$RFCB4EC34B30FE873B4D9AA372A3BA1A1."'" ;       $R9458FFBC840D3ABF2897F706A72AEF73 .= " </b><br/>";       $R8D37DE4766E2E9EEB1B18A3D3DA21DDB = 0;             $RE5522385CDF1EB94351BAEC3D94D6DF7 = 0;      }                                  if(count($RC2D2567438B1F39DD71F78195B5F3DED > 1) && $RF4DE60C7E2FD7F6C36938E50C13D5E24 != 1){                   for($RA16D2280393CE6A2A5428A4A8D09E354 = 1; $RA16D2280393CE6A2A5428A4A8D09E354 < count($RC2D2567438B1F39DD71F78195B5F3DED); $RA16D2280393CE6A2A5428A4A8D09E354++){        $RAF7A8D9A5D73642BD9B3814D41ADFC3D = str_replace("{var_".$RA16D2280393CE6A2A5428A4A8D09E354."}", $RC2D2567438B1F39DD71F78195B5F3DED[$RA16D2280393CE6A2A5428A4A8D09E354], $RAF7A8D9A5D73642BD9B3814D41ADFC3D);               $RF1BA8FBDD2A82D162381C6A670A0396B = str_replace("{var_".$RA16D2280393CE6A2A5428A4A8D09E354."}", $RC2D2567438B1F39DD71F78195B5F3DED[$RA16D2280393CE6A2A5428A4A8D09E354], $RF1BA8FBDD2A82D162381C6A670A0396B);       }      }                      if($RA26289D745E3F5653C0A27AFD5B07D2C == "plain"){       $RAF7A8D9A5D73642BD9B3814D41ADFC3D = FDC5571C8E1E41DC8BC5C18FCD1DD00CA($RAF7A8D9A5D73642BD9B3814D41ADFC3D);      }                 if($RE5522385CDF1EB94351BAEC3D94D6DF7 == 1){       if($R62E89AA0EBC20113E2AE6C7FB7BF4B93 == "smtp"){               F4191BA1032AF368677F7A886B14438F1($RFCB4EC34B30FE873B4D9AA372A3BA1A1,$RF1BA8FBDD2A82D162381C6A670A0396B,stripslashes($RAF7A8D9A5D73642BD9B3814D41ADFC3D),$RDF6EED5157548C69BBA30F4FDDBA111F,$R9391560C31922EA8A068BD7C2A6CE64D, $RF3972C6F95754CA0BB741F156FB52286, $RA26289D745E3F5653C0A27AFD5B07D2C, $RDA89D365E289E8ABBBAECE166A70C8F8, $R3E905ED5ED1B2828D69B9006752B8891, $R5FC562B17A1706C83080B274324FC404, $R6E0A8C3C66E4D181753092A64EB9D8DE, $RD40280A1B2FC3F0C600DFAA7F717994F);        $R09C56B7073589B662BF4D7EFD7C9A546++;       }else{        F02F195DBF4E880B01B74866378A11F8C($RFCB4EC34B30FE873B4D9AA372A3BA1A1,$RF1BA8FBDD2A82D162381C6A670A0396B,stripslashes($RAF7A8D9A5D73642BD9B3814D41ADFC3D),$RDF6EED5157548C69BBA30F4FDDBA111F,$R9391560C31922EA8A068BD7C2A6CE64D, $RF3972C6F95754CA0BB741F156FB52286, $RA26289D745E3F5653C0A27AFD5B07D2C);        $R09C56B7073589B662BF4D7EFD7C9A546++;       }            }     }         $R82ECBB5D75237C27A450CD5A91B2D315 = $RE95214CF263E09774227528AB355AEA1+$R764F6CDCB75C01581F31B1F80AEAFD5B ;     $R06B743A20568B43474F330DE6135DAFF = $RC062931CFF4BAFDB8EB742BA53CCD3FE+$R764F6CDCB75C01581F31B1F80AEAFD5B;                                      $RCC0C7AC644533420EDAB5E8652BCDA3D = microtime();     $RCC0C7AC644533420EDAB5E8652BCDA3D = explode(" ", $RCC0C7AC644533420EDAB5E8652BCDA3D);       $RCC0C7AC644533420EDAB5E8652BCDA3D = $RCC0C7AC644533420EDAB5E8652BCDA3D[1] + $RCC0C7AC644533420EDAB5E8652BCDA3D[0];       $R45B8AEF82A8D7137527C81AB41E73170 = $RCC0C7AC644533420EDAB5E8652BCDA3D;       $R6DD222762EA60DCBC529C697EC059EB6 = ($R45B8AEF82A8D7137527C81AB41E73170 - $R42293EF400E611EDA86CB8C6433DD5EF);            ?>
<table border="0" align="center" class="main_table" cellpadding="5" cellspacing="1" >
	
	<tr>
		<td  bgcolor="#003366"><span class="style3">>> Sending out emails.....</span></td>
	</tr>
	<tr>
		<td bgcolor="#efefef" valign="top"><b>>></b> There are <b><?php if($R65DFACB39960C22313740A131148FB81 == "use_file"){echo $R57AEADB3831EA33FC8133698850AEA33-($RE95214CF263E09774227528AB355AEA1+$R4A7FC1EF44946720A64520DA8E8A1DAC);}else{echo $R57AEADB3831EA33FC8133698850AEA33;} ?></b> emails left to send.</td>
	</tr>
	<tr>
		<td bgcolor="#ffffff" valign="top"><b>>> </b>Now sending out email number <b><?php echo $RE95214CF263E09774227528AB355AEA1 + $R4A7FC1EF44946720A64520DA8E8A1DAC;?></b> through <b><?php echo $RC062931CFF4BAFDB8EB742BA53CCD3FE + $R4A7FC1EF44946720A64520DA8E8A1DAC;?></b>, which are:</td>
	</tr>
	<tr>
		<td bgcolor="#efefef" valign="top"><?php echo $R9458FFBC840D3ABF2897F706A72AEF73; ?>
		<?php if($R8D37DE4766E2E9EEB1B18A3D3DA21DDB == 0){?>
		<span class="smaller_text_red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addresses marked in red are invalid and will not be sent</span>
		<?php } ?>
		</td>
	</tr>
	
	
	
	<tr>
		<td bgcolor="#efefef" valign="top">
		
			
            <b>>></b>
            <input name="overall_totaltime" type="hidden" value="<?php echo $_POST["overall_totaltime"] + $R6DD222762EA60DCBC529C697EC059EB6;?>">
            Total time for scripts so far: <?php echo $_POST["overall_totaltime"]*1 ;?>
			<br>
			<span class="smaller_text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this is a total time that the server use its resources for the script</span>		  </td>
	</tr>
	<tr>
		<td bgcolor="#ffffff" valign="top">
			<b>>> </b>Script running??:  
			  <input type="checkbox" id="use_auto_submit" name="use_auto_submit" onClick="autoSubmitForm()" 
		<?php         if($_POST["use_auto_submit"] || $R9C4342597F45CFB51720B9E140D39276 ==1){      echo "checked='checked'";     }    ?>
		 />
		 <br>
		<span class="smaller_text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uncheck the box to pause the script on next interval</span>	
			</td>
	</tr>
	<tr>
		<td bgcolor="#efefef" valign="top">
			<b>>></b> Auto submit every 
			  <input name="txtIntervalTime" type="text" id="txtIntervalTime" value="<?php echo $R19D008E6DEC93E5CA58136BD934DBA20; ?>" size="5" /> 
			seconds.
			<br>	
			<span class="smaller_text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;changes in interval time will take effect on next interval</span>	</td>
	</tr>
	<tr>
		<td bgcolor="#ffffff" valign="top">
			<b>>></b> Sending <b><?php echo $R764F6CDCB75C01581F31B1F80AEAFD5B; ?></b> emails per interval.		</td>
	</tr>
	
	<tr>
		<td bgcolor="#ffffff" valign="top">
			 <b>>></b> Message to send:<br>
			 <textarea  class="inputl"rows="10" name="txtMessage" id="txtMessage" cols="75" ><?php echo stripslashes($_POST['txtMessage']);?></textarea><br><a href="#" onClick="displayHTML(); return false;" style="font-size:12px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>> preview HTML in new window</a>
			 <script>
		
			function displayHTML() {
			 
				//var inf = form.htmlArea.value;
				var inf = document.getElementById("txtMessage").value;
				//alert(inf);
				win = window.open('?', '', 'popup', 'toolbar = no, status = no, width=600,height=400');
				win.document.write("" + inf + "");
			}
		</script>
			 <br>
			<span class="smaller_text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;changes on HTML will take effect on next interval</span></td>
	</tr>
	<tr>
		<td bgcolor="#ffffff" valign="top">
			<?php      if($R65DFACB39960C22313740A131148FB81 == "use_file"){       $RE95214CF263E09774227528AB355AEA1 = $R82ECBB5D75237C27A450CD5A91B2D315;       $RC062931CFF4BAFDB8EB742BA53CCD3FE = $R06B743A20568B43474F330DE6135DAFF;      }     ?>
			<b>>></b> 
			Start sending out next batch in <b><label id="d2">0</label></b> seconds
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click button below to send email number <b><?php echo $R82ECBB5D75237C27A450CD5A91B2D315 + $R4A7FC1EF44946720A64520DA8E8A1DAC;?></b> through <b><?php echo $R06B743A20568B43474F330DE6135DAFF + $R4A7FC1EF44946720A64520DA8E8A1DAC;?></b> now<br> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;without waiting for the script.<br>	
			<input name="txtReply" type="hidden" value="<?php echo $_POST["txtReply"]; ?>" />
			<input name="txtReturnPath" type="hidden" value="<?php echo $RF3972C6F95754CA0BB741F156FB52286; ?>" />
			<input name="txtSenderName" type="hidden" value="<?php echo $_POST["txtSenderName"]; ?>" />
			<input name="ddlType" type="hidden" value="<?php echo $RA26289D745E3F5653C0A27AFD5B07D2C; ?>" />
            <input name="txtSubject" type="hidden" value="<?php echo $_POST["txtSubject"]; ?>" />
			
			<input name="radServer" type="hidden" value="<?php echo $R62E89AA0EBC20113E2AE6C7FB7BF4B93; ?>" />
			<input name="smtpHost" type="hidden" value="<?php echo $RDA89D365E289E8ABBBAECE166A70C8F8; ?>" />
			<input name="smtpUser" type="hidden" value="<?php echo $R3E905ED5ED1B2828D69B9006752B8891; ?>" />
			<input name="smtpPassword" type="hidden" value="<?php echo $R5FC562B17A1706C83080B274324FC404; ?>" />
			
			<input name="smtpPort" type="hidden" value="<?php echo $RD40280A1B2FC3F0C600DFAA7F717994F; ?>" />
			<input name="smtpSSL" type="hidden" value="<?php echo $R6E0A8C3C66E4D181753092A64EB9D8DE; ?>" />
			
            <input name="txtNumberOfEmails" type="hidden" value="<?php echo $R764F6CDCB75C01581F31B1F80AEAFD5B; ?>" />
            <input name="txtRecipient" type="hidden" value="<?php echo $RAC27D52C425B1F116D395654FA7D395C; ?>" />
            <input name="txtEmailList" type="hidden" value="<?php echo $RF4867CFB58673D480E199BAC9BCE65EA; ?>" />
			<input name="mail_index_from" type="hidden" value="<?php echo $RE95214CF263E09774227528AB355AEA1;?>">
            <input name="mail_index_to" type="hidden" value="<?php echo $RC062931CFF4BAFDB8EB742BA53CCD3FE;?>">
            <input name="is_sending_email" type="hidden" value="1">
			
			<input name="radMailList" type="hidden" value="<?php echo $R0A48D48042694B8104676901C22289DA;?>">
			<input name="target_path" type="hidden" value="<?php echo $R3B8C81148AA69F831A62E09C46801EB8;?>">
			
			<input name="Submit" type="submit" class="button" id="Submit" value="Start sending emails now.">
			</td>
	</tr>
</table>
</form>
    <SCRIPT language="javascript">
		//javascript auto submit form	
		autoSubmitForm();	
		function autoSubmitForm()
		{	
			var use_auto_submit = document.getElementById("use_auto_submit"); 
			if (use_auto_submit.checked) { 
				setTimeout("document.managerForm.submit()", <?php echo $R19D008E6DEC93E5CA58136BD934DBA20; ?>*1000);			
			}
		}
		
		//something to do with count down
		var milisec=0 
		var seconds= <?php echo $R19D008E6DEC93E5CA58136BD934DBA20; ?>;
		document.getElementById("d2").innerHTML = seconds ;
		
		function display(){ 
			
			if (milisec<=0){ 
				milisec=9 
				seconds-=1 
			} 
			if (seconds<=-1){ 
				milisec=0 
				seconds+=1 
			} 
			else {
				milisec-=1 
				document.getElementById("d2").innerHTML = seconds+"."+milisec 
				setTimeout("display()",100) 
			}
			
		} 
		display() ;
		
	</SCRIPT>
	
	</div>
	</td>

	</tr>
	</table>

<?php }else{?>

<script language="javascript">
 function Validate_FrmRegister2(frm) {	
 
 	if(!confirm("Are you sure you want to send out emails now using the inputted information?")){
		return false;
	}	
 
	if(frm.txtSubject.value == "")
	{
	  alert("You have to provide Subject");
	  frm.txtSubject.focus();
	  return (false);
	}
	if(frm.txtMessage.value == "")
	{
	  alert("You have to provide Message");
	  frm.txtMessage.focus();
	  return (false);
	}
	if(frm.txtSenderName.value == "")
	{
	  alert("You have to provide sender name");
	  frm.txtSenderName.focus();
	  return (false);
	}
	if(frm.txtReply.value == "")
	{
	  alert("You have to provide address to send mail from");
	  frm.txtReply.focus();
	  return (false);
	}
	if (isNaN(frm.txtIntervalTime.value) || frm.txtIntervalTime.value == "" || frm.txtIntervalTime.value <= 0) {
		alert('Interval time is not a valid number');
		frm.txtIntervalTime.focus();
		return false;
	} else {
		if ((frm.txtIntervalTime.value % 1)!=0) {
			alert('Number can not be a floating-point');
			frm.txtIntervalTime.focus();
			return false;
		} 		
	}
	if (isNaN(frm.txtNumberOfEmails.value) || frm.txtNumberOfEmails.value == "" || frm.txtNumberOfEmails.value <= 0) {
		alert('Number of email per interval is not a valid number');
		frm.txtNumberOfEmails.focus();
		return false;
	} else {
		if ((frm.txtNumberOfEmails.value % 1)!=0) {
			alert('Number of email per interval can not be a floating-point');
			frm.txtNumberOfEmails.focus();
			return false;
		} 		
	}
	
	if(frm.txtPassword.value == "")
	{
	  alert("You have to provide password before sending out emails");
	  frm.txtPassword.focus();
	  return (false);
	}
	return(true);
}
</script>

<?php if ($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){ ?>
<?php } ?>
<?php if ($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 1){ ?>
<?php } ?>
<table align="center">
<tr>
<td>
<div style="background-color:#dddddd; padding:5px;  ">
<form method='post' name="mailForm" onSubmit="return Validate_FrmRegister2(this)" target="_blank" style="margin:0" enctype="multipart/form-data">
<table border="0" align="center" class="main_table" cellpadding="5" cellspacing="1" >
  <tr>
    <td colspan="2" bgcolor="#003366"><span class="style3">&gt;&gt;  W3LB Machines - PHP  Mailer Script</span></td>
    </tr>
  <tr>
    <td bgcolor="<?php echo $R4C1E8CF1BEF7E0E954B69B3AED92F094; ?>" valign="top"><span class="caption_font">1. Input subject of email to send out</span></td>
    <td bgcolor="<?php echo $RBD235A5010EB4D55CFD008EE7B185AED; ?>"><input type="text" class="input" name="txtSubject" size="75" 
	><br>
      <span class="smaller_text">*personalized variables can be input to subject field</span></td>
  </tr>
  <tr>
    <td bgcolor="<?php echo $R4C1E8CF1BEF7E0E954B69B3AED92F094; ?>" valign="top"><span class="caption_font">2. Input email body </span></td>
    <td bgcolor="<?php echo $RF2AC7415CDD9F664E234CE6AB478FE4C; ?>">
		<b>Send email out as: </b>
		<select id="ddlType" name="ddlType" onChange="disp_text(); return false;">
			<option value="html">HTML</option>
			<option value="plain">Plain Text</option>
		</select>
		<br>
		<textarea  class="inputl"rows="10" name="txtMessage" id="txtMessage" cols="75" ><?php    if($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){     $RE2497E791EE9AB75F88443D57460B329 = "<table border='0' align='center' class='main_table' cellpadding='5' cellspacing='1'  style='font-family: Arial, Helvetica, sans-serif; font-size: 12px;'>  <tr>  <td colspan='2' bgcolor='#003366'>  <span style='color: #FFFFFF;font-weight: bold;font-size: 16px;'>&gt;&gt; W3LB  PHP  Mailer Script</span>  </td>  </tr>  <tr>  <td bgcolor='#efefef' align='center'><br>  This is a test message, you can put any HTML that supports by mail clients here.  </td>  </tr>  </table>    <table align='center' width='90%'>  <tr>  <td><div style='font-family: Arial, Helvetica, sans-serif;font-size: 12px;border-top: 1px solid; color: rgb(153, 153, 153);' align='center'>W#LB Home Boys Tools © 2009</div></td>  </tr>  </table>";     echo ($RE2497E791EE9AB75F88443D57460B329);    }        ?></textarea><br>
		<a href="#" id="preview_link" onClick="displayHTML(); return false;" style="font-size:12px">>> preview email body in new window</a>
		<br>
		<span class="smaller_text">*not all HTML tags work on all mail clients,<br>&nbsp;you should test your HTML body first by sending mails to your test email addresses</span>
		<br>
		<span class="smaller_text">*to prepare the body for personalized email <a href="#" onClick="togglePerBody(); return false;">click here to see instructions</a></span>
		
	    <br>
	    <table id="PerBody"  border="0" align="center" class="smaller_text" cellspacing="0" cellpadding="2">
          <tr>
            <td>1. Put tags {var_1}, {var_2}, {var_3},...,{var_X} and so on into the body </td>
          </tr>
		  <tr>
            <td>2. Example:  </td>
          </tr>
		  <tr>
            <td bgcolor="#efefef" style="padding:0 5px 0 5px;"><?php        echo htmlspecialchars('Hello <b>{var_1}</b>, your email is <b>{var_2}</b>');       echo '<br>';       echo htmlspecialchars('<br>This personalized message is just for you: <b>{var_3}</b>');       echo '<br>';       echo htmlspecialchars('<br>Hope to see you soon, <b>{var_1}</b>.');        ?></td>
          </tr>
        </table>
		<?php if ($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 1){ ?><?php } ?>
		<script>
		
			function displayHTML() {
			 
				//var inf = form.htmlArea.value;
				var inf = document.getElementById("txtMessage").value;
				//alert(inf);
				win = window.open('?', '', 'popup', 'toolbar = no, status = no, width=600,height=400');
				win.document.write("" + inf + "");
			}
			
			function togglePerBody(){
							
				if (document.getElementById("PerBody").style["display"] == "none") {
					document.getElementById("PerBody").style["display"] = "";
				}
				else {
					document.getElementById("PerBody").style["display"] = "";
					document.getElementById("PerBody").style["display"] = "none";
				}
			}
			
			function disp_text()
			{
				var w = document.getElementById("ddlType").selectedIndex;
				//var selected_text =  document.getElementById("ddlType").options[w].text;
				if(w==0){
					document.getElementById("preview_link").style["display"] = "";
				}
				if(w==1){
					document.getElementById("preview_link").style["display"] = "none";
					<?php if($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){ ?>
					document.getElementById("txtMessage").value = "Hello,\n\nInput any text here for plain text email.\n\n,Regards";
					<?php } ?>
				}
				//alert(w);
			}

			togglePerBody();
			
		</script>		</td>
  </tr>
  <tr>
    <td bgcolor="<?php echo $R4C1E8CF1BEF7E0E954B69B3AED92F094; ?>" valign="top" ><span class="caption_font">3. Input <b>Sender</b> information,<br>&nbsp;&nbsp;&nbsp;&nbsp;which will appear on receiver's inbox </span></td>
    <td bgcolor="<?php echo $RBD235A5010EB4D55CFD008EE7B185AED; ?>">
	
	  <b>Sender name:</b> <br><input type="text" class="inputl" name="txtSenderName" size="33"  value="<?php if($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){echo "MassBulk Emailer"; }?>">
      <br />
      <span class="smaller_text">name of sender as will appear on reciever's inbox</span>
	  <br>
	  <b>Reply-to address:</b> <br><input type="text" class="inputl" name="txtReply" size="33"  value="<?php if($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){echo "mailer@uklahouse.com"; }?>">
      <br />
      <span class="smaller_text">the email will be seen as it was sending from this email</span>
	  <span class="smaller_text_red"><br>**should be a valid email address on the server so mails won't get pickup as spam</span>
	  <br>
	  <b>Return-Path address:</b> <br><input type="text" class="inputl" name="txtReturnPath" size="33"  value="<?php if($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){echo ""; }?>"> <span class="smaller_text">(optional)</span>     <br />        <span class="smaller_text">      bounced emails (mails that can not reach the recipient) will be sent back to this address    <br>    if not specified then bounced emails will be sent to Reply-to address instead    </span>      <span class="smaller_text_red">    <br>    **this parameter only works on a server that support it   </span> </td>    </tr>    <tr>      <td bgcolor="<?php echo $R4C1E8CF1BEF7E0E954B69B3AED92F094; ?>" valign="top"><span class="caption_font">4. Mail server</span></td>      <td bgcolor="<?php echo $RF2AC7415CDD9F664E234CE6AB478FE4C; ?>">    <input id="radServer" name="radServer" type="radio" value="php" checked="checked" onClick="toggleSMTPBody();"> <b>PHP Mail()</b> <span class="smaller_text">default option, works on most servers</span>       </td>    </tr>    <tr>      <td bgcolor="<?php echo $R4C1E8CF1BEF7E0E954B69B3AED92F094; ?>" valign="top"><span class="caption_font">5. Script information</span></td>      <td bgcolor="<?php echo $RF2AC7415CDD9F664E234CE6AB478FE4C; ?>">     <b>sending out&nbsp;        <input type="text" class="inputl" name="txtNumberOfEmails" size="5"  value="<?php echo $R76C27C0C44C6D9B3804667835A11F1AB;?>">         &nbsp;email(s) every&nbsp;        <input name="txtIntervalTime" type="text" class="inputl" id="txtIntervalTime"  value="<?php echo $R84066C3B4A47EE69AA481476FEC750CB;?>" size="5">     &nbsp;seconds   </b>        <br>     <span class="smaller_text">     ex. for list of 300 mails, sending out 30 mails per interval of 10 seconds each <br>will allow the script to finish sending out all emails within 5 minutes   </span>     <br>     <?php if ($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){ ?><?php } ?>
	  <?php if ($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 1){ ?><?php } ?>	  </td>
  </tr>
  
  <tr>
    <td bgcolor="<?php echo $R4C1E8CF1BEF7E0E954B69B3AED92F094; ?>" valign="top">
		<span class="caption_font">
			6. Input recipient emails
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;you can paste emails directly into textbox
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;or upload text file containing all emails 
			
		</span>
		</td>
    <td bgcolor="<?php echo $RF2AC7415CDD9F664E234CE6AB478FE4C; ?>">
	<input id="radMailList" name="radMailList" type="radio" value="form" checked="checked" onClick="toggleMailList();"> <strong><font color="#003366">Option 1:</font> Input recipient emails into textbox, separated by ';;' separator or line breaks</strong><br><input id="radMailList" name="radMailList" type="radio" value="file" onClick="toggleMailList();"> 
	<strong><font color="#003366">Option 2:</font> Upload mailing list as a text file</strong> <span class="smaller_text">*recommended for list larger than 5,000 emails
	<br>
	  <label id="lblForm">
      <textarea name="txtRecipient" cols="75"rows="10"  class="inputl" id="txtRecipient" >
recipient1@domain1.com;;recipient2@domain2.com
recipient3@domain3.com
recipient3@domain4.com</textarea>
      <br>
	  <strong>Specify a custom separator here: 
	  <input type="text" class="inputl" name="txtCustomSeparator" size="2"  value=";;"/></strong>
	  </label>
	  
	  
	  <div  id="lblFile" style="padding:5px 0 0 25px; background-color:#efefef;">
		  Text file contain recipient emails: <input type="file" name="fileText" />
		  <br>
		  <span class="smaller_text_red">
		  *emails in .txt ARE SEPARATED BY LINE BREAKS ONLY max file size is <?php echo ($RD24A834B1280D89D6D2FA719CCE385EF/1000000)."mb";?>
		  <br>&nbsp;&nbsp;example .txt for: <a href="example_mail.txt">normal mails</a> and <a href="example_mail_personalized.txt">personalized mails</a>
		  </span>
		  <br>
		  <span class="smaller_text_red">*make sure the mailer folder have enough permission so files can be uploaded - usually 775 or 777 will do</span>
		  <br>
		  <span class="smaller_text_red">*uploaded file will be deleted after the script finish running,<br>&nbsp;&nbsp;this is to prevent potential .txt scans from robots and crawlers</span>
	  </div>
	  
	  <script>
			function toggleMailList(){
				
				var val = 0;
				//alert(document.mailForm.radServer.length);
				for( i = 0; i < document.mailForm.radMailList.length; i++ )
				{
					if( document.mailForm.radMailList[i].checked == true ){
						val = document.mailForm.radMailList[i].value;
					}
				}
				//alert( "val = " + val );
				
				if (val == "form") {
					document.getElementById("lblForm").style["display"] = "";
					document.getElementById("lblFile").style["display"] = "none";
				}else if(val == "file") {
					document.getElementById("lblForm").style["display"] = "none";
					document.getElementById("lblFile").style["display"] = "";
				}
			}
			
			toggleMailList();
		</script>
	  <br>
	  <span class="smaller_text">*to prepare the recipient list for personalized email <a href="#" onClick="togglePerRecipient(); return false;">click here to see instructions</a></span>
		
	    <br>
	    <table id="PerRecipient"  border="0" align="center" class="smaller_text" cellspacing="0" cellpadding="2">
          <tr>
            <td>1. Append each recipient's email by variables separated by || </td>
          </tr>
		  <tr>
            <td>2. Example of recipient list for mail body with 3 variables:  </td>
          </tr>
		  <tr>
            <td bgcolor="#efefef" style="padding:0 5px 0 5px;"><?php        echo htmlspecialchars('recipient1@domain1.com||Person One||recipient1@domain1.com||Ant;;');       echo '<br>';       echo htmlspecialchars('recipient2@domain2.com||Customer Two||recipient2@domain2.com||Boy;;');       echo '<br>';       echo htmlspecialchars('recipient3@domain3.com||Tony Three||recipient3@domain3.com||Cat');        ?></td>
          </tr>
        </table>
		<script>
		
			
			function togglePerRecipient(){
							
				if (document.getElementById("PerRecipient").style["display"] == "none") {
					document.getElementById("PerRecipient").style["display"] = "";
				}
				else {
					document.getElementById("PerRecipient").style["display"] = "";
					document.getElementById("PerRecipient").style["display"] = "none";
				}
			}
			
			togglePerRecipient();
			
		</script>
		<?php if ($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){ ?><?php } ?>
	  <?php if ($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 1){ ?><?php } ?>
	  <?php if ($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 1){ ?>
	  <br>
	  <?php } ?>
	  
      <!--<br>
      <br>
      <strong>Also use emails in the following .txt </strong><br>
      <input type="text" class="inputl" name="txtEmailList" size="33"  value="email.txt"> 
      <br />
      <span class="smaller_text">This file have to be in the same directory as this script<br />
      The email list need to have 1 email per line.</span>
	  -->	   </td>
  </tr>
  <tr>
    <td bgcolor="<?php echo $R4C1E8CF1BEF7E0E954B69B3AED92F094; ?>" valign="top"><span class="caption_font">7. Input password <br>
      &nbsp;&nbsp;&nbsp;&nbsp;and click on 'Continue' to start <br>
      &nbsp;&nbsp;&nbsp;&nbsp;sending out emails </span></td>
    <td bgcolor="<?php echo $RBD235A5010EB4D55CFD008EE7B185AED; ?>">
	    <b>Password:</b> <br><input type="password" class="inputl" name="txtPassword" size="33"  > 
		<?php if ($RF4DE60C7E2FD7F6C36938E50C13D5E24 == 0){ ?>
		<br>
		<?php }elseif(strcmp($thePassword,"mailer")==0){ ?>
		<br>
		<span class="smaller_text_red">*the script is currently using default password, you should change it as per installtion instruction</span><?php } ?><br><input type="submit" name="Submit2" value="Continue >>" class="button">
		<br>
		<span class="smaller_text">the mailer will open in new window so you won't lose information on this page</span>	</td>
  </tr>
</table>
</form>

</div>
</td>
</tr>
</table>


<table align="center" width="90%">
  <tr>
    <td><div style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;border-top: 1px solid; color: rgb(153, 153, 153);" align="center"></div></td>
  </tr>
</table>

<?php }?>
</body></html>
