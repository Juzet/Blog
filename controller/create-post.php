<!-- creating variables for the post -->
<?php
// requiring the database file
	require_once(__DIR__ . "/../model/database.php");
// this is creating a connection using the mysqli method
// $host, $username, $password, $database are being stored in the connection
	$connection = new mysqli($host, $username, $password, $database);
// variable allowas you to input a post
// this is inputing the post into the php database and it filters the post as well
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
// printing on teh screen the words title and post 
	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";
// this is currently closing the connection
	$connection->close();