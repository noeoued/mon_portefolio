<?php
$encoding = "utf-8";
$from_name = "CAMPUS PLUS MALI";
$from_mail = "campusplusmali.fr";

// Preferences for Subject field
$subject_preferences = array(
    "input-charset" => $encoding,
    "output-charset" => $encoding,
    "line-length" => 76,
    "line-break-chars" => "\r\n"
);

// Mail header
$header = "Content-type: text/html; charset=".$encoding." \r\n";
$header .= "From: ".$from_name." <".$from_mail."> \r\n";
$header .= "MIME-Version: 1.0 \r\n";
$header .= "Content-Transfer-Encoding: 8bit \r\n";
$header .= "Date: ".date("r (T)")." \r\n";
$header .= iconv_mime_encode("Subject", "Essaie d'envoi de mail via php", $subject_preferences);

$message ='<body>
<div align="center">
Envoyé via php Essaie d\'envoi de mail via php
</div>


</body>';

// Send mail
mail("noe.com", "Essaie d'envoi de mail via php", $message, $header);
?>

   
<!--
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if ($name === ''){
echo "Veillez bien remplir";
die();
}
if ($email === ''){
echo "Email cannot be empty.";
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Votre email n'est pas valide";
die();
}
}
if ($subject === ''){
echo "Saississez un sujet.";
die();
}
if ($message === ''){
echo "Champs message vide";
die();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "bricejohson0@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Votre email a bien été envoyer!";
?>-->