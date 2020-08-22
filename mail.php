<?php
$toemail = "vipinyadav208017@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From:testvipinyadav@gmail.com";

if (mail($toemail, $subject, $body, $headers))
    {
    echo "Email successfully sent to $toemail...";
}
 else
 {
    echo "Email sending failed";
}
?>
