<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, intial-scale:1.0">
	<title>Contact</title>
	  <link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,700i|Source+Sans+Pro" rel="stylesheet">
	</head>	
<body>
	<?php include 'navbar.php'?>
	<div class="contact">
	<div class="controller">
		<h1>Contact Me!</h1>
	</div>
	<p>Contact me for your webpage needs!</p>
	<form action="mail.php" method="POST">
	<label for="name">Name:</label>
		<input type="text" name="name" id="name">
		<label for="email">Email:</label>
		<input type="email" name="email" id="email">
		<label for="subject">Subject:</label>
		<input type="text" name="subject" id="subject">
		<label for="message">Message:</label>
		<textarea name="message" id="message" cols="30" rows="10"></textarea>
		<input type="submit" value="Send!">
	</form>
		</div>
	
	
	
	
	</body>
</html>