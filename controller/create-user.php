<?php
// we are getting access to the data in the folder model file config
	require_once(__DIR__ . "/../model/config.php");

// sanitizing the email so that it will delete unknown charaters in the email 
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
// sanitizing by string so any invalid characters will automatically be deleted using a string
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
// sanitizing the passowrd so any invalid characters will automatically be deleted using a string 
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);



	echo $email . " - " . $username . " - " . $password;
