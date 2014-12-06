<?php

	require_once(__DIR__ . "/../model/config.php");

// this is allowing us to retrieve the posts from the databse
	$query = "SELECT * FROM posts";
	$result = $_SESSION["connection"]->query($query);
//this is allowing our website to show the posts I save in the database 
// this is getting an array that the posts will appear a certain way
	if($result) {
		while($row = mysqli_fetch_array($result)) {
			echo "<div class='post'>";
			echo "<h2>" . $row['title'] . "</h2>";
			echo "<br />";
			echo "<p>" . $row['post'] . "</h1>";
			echo "<br/>";
			echo "</div";

		}
	}