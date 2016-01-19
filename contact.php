<?php
	$serverOutput = "";
	if(isset($_POST["username"]) && isset($_POST["topic"])){
		$serverOutput = "The contact form is not active yet. Please try again later.";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- This MOTD set of pages was created by titan -->
		<!-- The code is HTML and CSS, no script applied. -->
		<!-- Reproduction forbidden without permission -->
		<meta charset="UTF-8">
		<title>VanillaTTT - MOTD</title>
		<link rel="stylesheet" type="text/css" href="./src/stylesheets/reset.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="./src/stylesheets/main.css">
	</head>
	<body>
		<div id="header">
			Contact - Report a bug / Suggest features
		</div>
		<div id="navBar">
			<a href="./howToPlay.html">How To Play</a>
			<a class="active" href="./index.html">Rules</a>
			<a href="./staff.html">Ranks and Staff</a>
		</div>
		<div id="contact-container">
			<h2>You may use the following form to report a bug on the server, the motd,<br> or to suggest improvements or features to be added.</h2>
			<p>Please remember, you can also post on the forum on vanillattt.com</p>
			<form method="POST">
				<label for="username">Username<br><input type="text" name="username" id="username" placeholder="Required" required></label>
				<label for="topic">Topic<br><input type="text" name="topic" id="topic" placeholder="Required" required></label>
				<label for="message">Message<br><textarea rows="4" cols="50">Place your message here</textarea></label>
				<label><input type="submit" value="Send"></label>
			</form>
			<p style="color: #FF0000;"><?php echo $serverOutput; ?></p>
		</div>
		<div id="footer">
			Last update: 18 JAN 2016, &copy; vanilla TTT, a Garry's Mod Server. MOTD created by titan, rules by jamie.nullriver 
		</div>
	</body>
</html>