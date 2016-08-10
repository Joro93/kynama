<?php 

session_start();

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {


	# Pointless variables (except message)
	$name 		= $_POST['name'];
	$email 		= $_POST['email'];
	$subject 	= $_POST['subject'];
	$message 	= 'From: '.$name." ";
	$message   .= 'Message: '. $_POST['message'];

	$to 		= "contact@kynama.com";

	# Mails Georgi and Marto
	mail($to, $subject, $message, "From: " . $email);

	# Gives me a cookie :3
	setcookie("message_sent", true);
}


// dont write code below this
?>
<?php header('Location: index.html'); ?>