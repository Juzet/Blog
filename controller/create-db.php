<?php
// whole file is looking for folder model to access config.php 
require_once(__DIR__ . "/../model/config.php");

// the query makes a chart that will allow a maxium of 255 characters to be typed
// the table post will be added by one each time 
// this data will be stored in the php myadmin data
	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
	. "id int(11) NOT NULL AUTO_INCREMENT,"
	. "title varchar(255) NOT NULL,"
	. "post text NOT NULL,"
	. "DateTime datetime NOT NULL,"
	. "PRIMARY KEY (id))");
// the if statement is just making sure the code is running properly
		if($query) {
			echo "<p>Successfully create table: posts</p>";
		}
// this will also like the others pop up with an error
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

// this checking to see if the query is outputing the data on the webpageg you to their problem(s)
// if this is query is true they will echo the following
		if($query) {

			echo "<p>Successfully created table: users</p>";
		}
// if the query is false there will be an error that pop up directin
		else {
			echo "<p>" . $_SESSION ["connection"]->error . "</p>";
		}