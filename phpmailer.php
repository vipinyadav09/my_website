<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'testvipinyadav@gmail.com';
$mail->Password = 'Vipin@123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('testvipinyadav@gmail.com', 'test Vipin');
$mail->addAddress('vipinyadav208017@gmail.com', 'vipin yadav');
//$mail->addAddress('ellen@example.com');
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
$mail->isHTML(true);                                

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
