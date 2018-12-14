
<?php
$name = @trim(stripslashes($_POST['name'])); 
$email = @trim(stripslashes($_POST['email']));
$topic = @trim(stripslashes($_POST['topic']));
$message = @trim(stripslashes($_POST['message']));

$email_from = $email;
$email_to = 'armando.gautreaux01@gmail.com';//replace with your email

$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Topic: ' . $topic . "\n\n" . 'Message: ' . $message;

$success = @mail($email_to, $body, 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Topic: ' . $topic . "\n\n" . 'Message: ' . $message);

?>




<!DOCTYPE HTML>
<html lang="en-US">
<head>
<script>alert("Thank you for contact us. As early as possible I will contact you.");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=../index.html"> 
</head>