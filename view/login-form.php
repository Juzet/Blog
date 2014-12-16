<?php
// we are getting access to the data in the folder model file config
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
<div id="wat">
	<h1>Login</h1>
</div>
<!-- these methods will input a username,password,and submit button on the screen -->
	<form method ="post" action ="<?php echo $path . "controller/login-user.php"; ?>">
<!-- a div box that contains the username and the form it will be placed in -->
		<div class="user">
			<label for="username"> Username: </label>
			<input type="text" name="username"/>
		</div>
<!-- another div box that is storing the password in the password form -->
		<div class="pass">
			<label for="password"> Password: </label>
			<input type="password" name="password"/>
		</div>
<!-- another div box that is creating a submit button -->
		<button type="submit" id="button" class="btn btn-primary" autocomplete="off">
			Submit
		</button>
	</form>

</body>
</html>


