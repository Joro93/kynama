<?php 

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = 'From: '.$name." ";
$message .= 'Message: '. $_POST['message'];

$to = "contact@kynama.com";

mail($to, $subject, $message, "From: " . $email);

header('Location: index.html');


$_COOKIE['message_sent'] = true;


?>