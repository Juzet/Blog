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
// we are storing the date and the time in a variable
	$date = new DateTime('today'); 
// using the America/Los Angeles time zone so that we can use the time in the state/city we are in
	$time = new DateTime('America/Los_Angeles');
// this is inserting a post and asking you to insert the title and the post you want to put 
	$query = $_SESSION["connection"]->query ("INSERT INTO posts SET title = '$title' , post = '$post'");
// if the query is true it prints out the post with the title
	if($query) {
		echo"<div><p>Title: $title</p></div>";
		echo"<div><p>Post: $post</p></div>";
		echo"<p>Posted on: " . $date->format ("m/d/y") . " at " . $time->format("h:i");
	}
// if the query is false then the connecton error will pop up
// session will check everything over but they will pop up as mistakes if the code is wrong
	else {
		echo"<p>" . $_SESSION["connection"]->error . "</p>";
	}
?>	