<?php
$to       = 'mekdi1610@gmail.com';
$subject  = 'Testing sendmail.exe';
$message  = 'Hi, you just received an email using sendmail!';
$headers  = 'From: ERK.MAED.INTERNAL@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
?>
<!--?php
$to       = 'mekdi1610@gmail.com';
//$to       = 'unixjme@gmail.com';
$subject  = 'Confirmation code';
$message  = 'Hi, Here is your Email Test';
$headers  = 'From: ERK.MAED.INTERNAL@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers)) {
    header("Email sent!");
}
else
{
    echo "Email sending failed";
}
?-->