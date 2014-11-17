<?php
// with this class you remove repitition within the create-db.php page
// a class is object information that allows you to access the information at any time 
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

	public function__construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username= $username;
		$this->password= $password;
		$this->database= $database;
	}

}

