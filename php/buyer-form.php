<?php

if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
    $name = stripslashes(strip_tags($_POST['name']));
} else {
    $name = 'No name entered';
}
if ((isset($_POST['phone'])) && (strlen(trim($_POST['phone'])) > 0)) {
    $phone = stripslashes(strip_tags($_POST['phone']));
} else {
    $phone = 'No phone entered';
}
if ((isset($_POST['email'])) && (strlen(trim($_POST['email'])) > 0)) {
    $email = stripslashes(strip_tags($_POST['email']));
} else {
    $email = 'No email entered';
}

$body =<<<CONT
<html>
<head>
    <style type="text/css">
    </style>
</head>
<body>
<h3>Thank you for contacting me for your home buying needs. Click on the link to read my exclusive eBook: <a href='http://realtorinmilton.ca/assert/ebook.pdf'>7 Steps for Home Buying Success</a>.</h3>
<hr />
<h3>For your records, here is the information you provided:</h3>
<table width="550" border="0" cellspacing="0" cellpadding="15">
    <tr bgcolor="#eeffee">
        <td>Name</td>
        <td>$name</td>
    </tr>
    <tr bgcolor="#eeeeff">
        <td>Email</td>
        <td>$email</td>
    </tr>
    <tr bgcolor="#eeffee">
        <td>Phone</td>
        <td>$phone</td>
    </tr>
</table>
</body>
</html>
CONT;

require("../vendor/autoload.php");

$mail = new PHPMailer();

$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true;  // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail

$mail->Host = 'mail.realtorinmilton.ca';
$mail->Port = 26; 
$mail->Username = 'homes@realtorinmilton.ca';  
$mail->Password = 'CyPanCrut^YAq##n';           
$mail->From = 'homes@realtorinmilton.ca';
$mail->FromName = 'Contact Form';
$mail->Subject = 'Buyer Contact Form';
$mail->Body = $body;
$mail->AddAddress('tanya@tanyafernandes.ca');
$mail->AddAddress($email);

//$mail->AddAttachment( '../assert/ebook.pdf' );
//$mail->AddAttachment( '../assert/house1.jpg' );
//$mail->AddAddress($email);
    
$mail->WordWrap = 50;
$mail->IsHTML(true);

$mail->AltBody = "From: ".$name."\nEmail Address: ".$email."\nPhone Number: ".$phone;

if (!$mail->Send()) {
    $s = 4;
}else{
    $s = 8;
}
header("Location: /?s=".$s);

