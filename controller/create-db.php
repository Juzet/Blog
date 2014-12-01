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