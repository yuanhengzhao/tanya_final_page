<?php

if ((isset($_POST['fullName'])) && (strlen(trim($_POST['fullName'])) > 0)) {
    $fullName = stripslashes(strip_tags($_POST['fullName']));
} else {
    $fullName = 'No name entered';
}
if ((isset($_POST['phoneNumber'])) && (strlen(trim($_POST['phoneNumber'])) > 0)) {
    $phoneNumber = stripslashes(strip_tags($_POST['phoneNumber']));
} else {
    $phoneNumber = 'No phone number entered';
}
if ((isset($_POST['emailAddress'])) && (strlen(trim($_POST['emailAddress'])) > 0)) {
    $emailAddress = stripslashes(strip_tags($_POST['emailAddress']));
} else {
    $emailAddress = 'No email entered';
}

if ((isset($_POST['address'])) && (strlen(trim($_POST['address'])) > 0)) {
    $address = stripslashes(strip_tags($_POST['address']));
} else {
    $address = 'No address entered';
}

$body = <<<CONT
<html>
<head>
    <style type="text/css">
    </style>
</head>
<body>
<h3>Thank you for your interest in my D'zigned to Sell Program. Click on the link to read my exclusive eBook: <a href='http://realtorinmilton.ca/assert/ebook_selling.pdf'>A Roadmap to Selling Your Home</a>.</h3>
<hr />
<h3>For your records, here is the information you provided:</h3>
<table width="550" border="0" cellspacing="0" cellpadding="15">
    <tr bgcolor="#eeffee">
        <td>Name</td>
        <td>$fullName</td>
    </tr>
    <tr bgcolor="#eeffee">
        <td>Phone</td>
        <td>$phoneNumber</td>
    </tr>
    <tr bgcolor="#eeeeff">
        <td>Email</td>
        <td>$emailAddress</td>
    </tr>
    
    <tr bgcolor="#eeeeff">
        <td>Address</td>
        <td>$address</td>
    </tr>
</table>
</body>
</html>
CONT;

require("../vendor/autoload.php");

$mail = new PHPMailer();

$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only0
$mail->SMTPAuth = true;  // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail

$mail->Host = 'mail.realtorinmilton.ca';
$mail->Port = 26; 
$mail->Username = 'homes@realtorinmilton.ca';  
$mail->Password = 'CyPanCrut^YAq##n';           
$mail->From = 'homes@realtorinmilton.ca';
$mail->FromName = 'Contact Form';
$mail->Subject = 'Seller Contact Form';
$mail->Body = $body;
$mail->AddAddress('tanya@tanyafernandes.ca');
$mail->AddAddress($emailAddress);

$mail->WordWrap = 50;
$mail->IsHTML(true);

$mail->AltBody = "From: ".$name."\nEmail Address: ".$email."\nPhone Number: ".$phone;

if (!$mail->Send()) {
    $s = 4;
}else{
    $s = 7;
}

header("Location: /?s=".$s);


