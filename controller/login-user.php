<?php
	require_once(__DIR__ . "/../model/config.php");
// this is also sanitizing the password and username entities 
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
// the session is connecting to the query and stating that the salt will select the password form the users wntity when username is equal to password 
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
// this is making sure the query checks these variable before logging in
	if($query->num_rows == 1) {
// variable $ray is going to get an array 
		$row = $query->fetch_array();
// the statement encypting the words for the password
		if($row["password"] === crypt($password, $row["salt"] )) {
			echo "<p> Login Successful </p>";
// if the if statement is true then the login is successful and authenticated
			$_SESSION["authenticated"] = true;
		}
// if the if statement is wrong the code will pop up invalid user and password
		else {
			echo "<p> Invalid username and password </p>";
		}
	}
	else {
			echo "<p> Invalid username and password </p>";
		}