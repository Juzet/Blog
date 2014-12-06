<?php
// in order to make the website run with certain parameters the webpage needs to function properly
require_once(__DIR__ . "/../model/config.php");
?>
<h1>Register</h1>

	<form method ="post" action ="<?php echo $path . "controller/create-user.php"; ?>">
<!-- a div box that is storing teh email in a box with the words in plain text -->
		<div>
			<label for="email"> Email: </label>
			<input type="text" name="email"/>
		</div>
<!-- a div box that is storing the the username in a box in plain text as well -->
		<div>
			<label for="username"> Username: </label>
			<input type="text" name="username"/>
		</div>
<!-- a div box that is storing the password in a box but the text will be in black dots so you cannot see the password being typed in -->
		<div>
			<label for="password"> Password: </label>
			<input type="password" name="password"/>
		</div>
<!-- creating a submit button -->
		<div>
			<button type="submit"> Submit </button>
		</div>
	</form>
<!-- we are creating input for the user to put a username, passowrd, and email -->
<!-- for the input for password we put password because we don't want the words to show on the screen -->