<?php
// whole file is looking for folder model to access database.php 
require_once(__DIR__ . "/../model/database.php");

// function that helps the blog run mysqli calls the variables in database.php
$connection = new mysqli($host, $username, $password);
// checking to see if the connection is working 
	if($connection->connect_error) {
		die("Error: " . $connection->connect_error);

}
// creating a variable to select database
		$exists = $connection->select_db($database);
// this is creating a query that will create a database
		if(!$exists) {
			$query = $connection->query("CREATE DATABASE $database");
//if the conneection doesn't exist then you are creating the database
//if the query is correct then there will be an echo of successfully.......
			if($query) {
				echo "Successfully created database:" . $database;
			}

		}
//if the query is incorrect then the database will echo already exists
		else {
			
			echo "Database already exists";
		}	
// the query makes a chart that will allow a maxium of 255 characters to be typed
// the table post will be added by one each time 
	$query = $connection->query("CREATE TABLE posts ("
	. "id int(11) NOT NULL AUTO_INCREMENT,"
	. "title varchar(255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))");
// the if statement is just making sure the code is running properly
		if($query) {
			echo "<p>Successfully create table: posts</p>";
		}
		else {
			echo "<p>$connection->error</p>";
		}
	$connection->close();