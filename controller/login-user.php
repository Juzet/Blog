<?php
	require_once(__DIR__ . "/../model/config.php");
// this is also sanitizing the password and username entities 
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
// the session is connecting to the query and stating that the salt will select the password form the users wntity when username is equal to password 
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");