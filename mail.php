<?php

$name = $_POST['username'];
$email = $_POST['email'];
$Number = $_POST['number'];
$Message = $_POST['message'];


$to = "info@ptecad.com";
$subject = 'Admin | Peak Tach';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $email. "\r\n";
$headers .= 'Cc: '. "\r\n";
$message = '<p>email:'. $email.'</p><p>number:'. $Number.'</p><p>username:'. $name.'</p><p>message:'. $Message.'</p><br>';
$result = @mail($to, $subject, $message, $headers);
echo  '<script>alert("Mail sent successfully !")</script>';
echo  '<script>window.location.href="contact.php";</script>';
    

?>