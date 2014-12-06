<?php
// we are getting access to the data in the folder model file config
	require_once(__DIR__ . "/../model/config.php");

?>
	<h1>Login</h1>

<!-- these methods will input a username,password,and submit button on the screen -->
	<form method ="post" action ="<?php echo $path . "controller/login-user.php"; ?>">
<!-- a div box that contains the username and the form it will be placed in -->
		<div>
			<label for="username"> Username: </label>
			<input type="text" name="username"/>
		</div>
<!-- another div box that is storing the password in the password form -->
		<div>
			<label for="password"> Password: </label>
			<input type="password" name="password"/>
		</div>
<!-- another div box that is creating a submit button -->
		<div>
			<button type="submit"> Submit </button>
		</div>
	</form>


