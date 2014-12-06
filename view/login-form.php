<?php
// we are getting access to the data in the folder model file config
	require_once(__DIR__ . "/../model/config.php");

?>
	<h1>Login</h1>

<!-- these methods will input a username,password,and submit button on the screen -->
	<form method ="post" action ="<?php echo $path . "controller/login-user.php"; ?>">

		<div>
			<label for="username"> Username: </label>
			<input type="text" name="username"/>
		</div>

		<div>
			<label for="password"> Password: </label>
			<input type="password" name="password"/>
		</div>

		<div>
			<button type="submit"> Submit </button>
		</div>
	</form>


