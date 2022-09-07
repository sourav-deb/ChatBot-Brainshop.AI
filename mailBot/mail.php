
<?php

// include 'brain.php';

// $b = 'sourav.deb299@gmail.com';


// $b = $_pos;

// include required phpmailer files
require 'includes/PHPMailer.php'; 
require 'includes/SMTP.php'; 
require 'includes/Exception.php'; 
// define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// create instance of phpmailer
$mail = new PHPMailer;
// set mailer to use smtp
$mail->isSMTP();
// Timeout settings
set_time_limit(120); // set the time limit to 120secs
$mail->Timeout = 120; // set timeout to 120s
// define smtp host
$mail->Host = "smtp.hostinger.in";
//  enable smtp authentication
$mail->SMTPAuth = "true";
// set type of encryption (ssl/tsl)
$mail->SMTPSecure = "tls";
// set port to connect smtp
$mail->Port = "587";
// set gmail username
$mail->Username = "airbot@mistu.tk";
// set gmail password
$mail->Password = "Mistu@2000";
// set email subect
$mail->Subject = "Mistu's MailBot";
// set sender email
$mail->setFrom("airbot@mistu.tk");
// enable html
$mail->isHTML(true);

// email body
// $mail->Body = $_POST['msg'];
$mail->Body = $msg;
// $mail->Body = 'Hello Test 1';
// add recipient
$mail->addAddress("$email");

// send mail
if ( $mail->Send() ) {
    // echo "Email Sent..!";
    echo ("<div class='success'><div class='msg-pad'>airBot has send its reply to your E-mail. Check your E-mail.</div></div>");
}else{
    echo ("<div class='error'><div class='msg-pad'>SMTP Error.</div></div>");
}
// close smtp connection.
$mail->smtpClose();
?>
