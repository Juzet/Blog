<!-- creating variables for the post -->
<?php
// requiring the config file
	require_once(__DIR__ . "/../model/config.php");
// this is creating a connection using the mysqli method
// $host, $username, $password, $database are being stored in the connection
	$connection = new mysqli($host, $username, $password, $database);
// variable allowas you to input a post
// this is inputing the post into the php database and it filters the post as well
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
// this is inserting a post and asking you to insert the title and the post you want to put 
	$query = $connection->query("INSERT INTO posts SET title = '$title' , post = '$post'");
// if the query is true it prints sucessfully inserted post
	if($query) {
		echo"<p>Successfully inserted post: $title</p>";
	}
// if the query is false then the connecton error will pop up
	else {
		echo"<p>$connection->error</p>";
	}
// this is currently closing the connection
	$connection->close();