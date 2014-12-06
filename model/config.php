<!-- creating a variable called $path -->
<?php
	require_once(__DIR__ . "/database.php");
// starting the session that will now store the variable connection
	session_start();

// these are variables that lead to specific destinations in the database
	$path = "/Blog/";

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

// this is making a connection in the database storing username password and database
// this is also setting the session variable to connection
	if(!isset($_SESSION["connection"])) {
	$connection = new Database($host, $username, $password, $database);
	$_SESSION ["connection"] = $connection;
    }

