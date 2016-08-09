<?php 

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = 'From: '.$name." ";
$message .= 'Message: '. $_POST['message'];

$to = "contact@kynama.com";

mail($to, $subject, $message, "From: " . $email);

setcookie("message_sent", true);


// dont write code below this
?>
<?php header('Location: index.html'); ?>