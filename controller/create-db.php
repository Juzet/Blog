<?php
// whole file is looking for folder model to access config.php 
require_once(__DIR__ . "/../model/config.php");

// the query makes a chart that will allow a maxium of 255 characters to be typed
// the table post will be added by one each time 
	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
	. "id int(11) NOT NULL AUTO_INCREMENT,"
	. "title varchar(255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))");
// the if statement is just making sure the code is running properly
		if($query) {
			echo "<p>Successfully create table: posts</p>";
		}
		else {
			echo "<p>" . $_SESSION ["connection"]->error . "</p>";
		}
// setting query equal to session and creating a post in myadmin for the users information
	$query = $_SESSION ["connection"]->query("CREATE TABLE users ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "username varchar(30) NOT NULL,"
		. "email varchar(50) NOT NULL,"
		. "password char(128) NOT NULL,"
		. "salt char(128) NOT NULL,"
		. "PRIMARY KEY (id))");

// this checking to see if the query is outputing the data on the webpage
		if($query) {
			echo "<p>Successfully created table: users</p>";
		}
		else {
			echo "<p>" . $_SESSION ["connection"]->error . "</p>";
		}