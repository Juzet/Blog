<?php
// in order to make the website run with certain parameters the webpage needs to function properly
require_once(__DIR__ . "/../model/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="post.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>
<body class="shot">
<div id="what">
Register
</div>
	<form method ="post" action ="<?php echo $path . "controller/create-user.php"; ?>">
<!-- a div box that is storing teh email in a box with the words in plain text -->
		<div class="email">
			<label for="email"> Email: </label>
			<input type="text" name="email"/>
		</div>
<!-- a div box that is storing the the username in a box in plain text as well -->
		<div class="user">
			<label for="username"> Username: </label>
			<input type="text" name="username"/>
		</div>
<!-- a div box that is storing the password in a box but the text will be in black dots so you cannot see the password being typed in -->
		<div class="pass">
			<label for="password"> Password: </label>
			<input type="password" name="password"/>
		</div>
<!-- creating a submit button -->
		<button type="submit" id="myButton" class="btn btn-primary" autocomplete="off">
			Submit
		</button>
	</form>
<!-- we are creating input for the user to put a username, passowrd, and email -->
<!-- for the input for password we put password because we don't want the words to show on the screen -->
</body>
</html>