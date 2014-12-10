<?php
// looking for files in different folders using require once using the directry
	require_once(__DIR__ . "/controller/login-verify.php");
	require_once (__DIR__ . "/view/header.php");
	if(authenticateUser()) {
		require_once (__DIR__ . "/view/navigation.php");
	}
	require_once (__DIR__ . "/controller/create-db.php");
	require_once (__DIR__ . "/view/footer.php");
?>