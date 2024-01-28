<?php
ini_set('SMTP','smtp.gmail.com');
ini_set('smtp_port',25);


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";
$recipient = "mreitmayer@mrwebpages.com";

mail($recipient, $subject, $message, $mailheader)
	or die("Error!");
	echo '
	<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, intial-scale:1.0">
	<title>Thank You!</title>
	  <link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,700i|Source+Sans+Pro" rel="stylesheet">
	</head>	
<body>
	<?php include "navbar.php"?>
	<div class="contactcomplete">
	<div class="controller">
	<h1>Thank you for contacting me! I will answer as soon as I can!</h1>
		<p><a href="index.php">Back to the Home Page!</a></p>
		</div></div>
	
	
	
	
	</body>
</html>
	
	
	
	';

?>