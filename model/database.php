<?php
// with this class you remove repitition within the create-db.php page
// a class is object information that allows you to access the information at any time 
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

	// This is making the class suitable for any initialization that the object may call before it is used
	// the constructor is executed after the objects are initialized, the purpose is to put the object in a solid state
	public function__construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username= $username;
		$this->password= $password;
		$this->database= $database;
	}

	public function openConnection() {
		$this->connection - new mysqli($this->host, $this->username, $this->password, $this->database );

		if (this->$connection->connect_error) {
			die("<p>Error:" . $this->connection->connect_error . "</p>");
		}
	}
	public function closeConnection(){
		if(isset ($this->connection)){
			$this_>connection->close();
		}
	}
	public function query($string) {
		$this->openConnection();

		$query = $this->connection->query($string);

		$this->closeConnection();
		return $query;
	}

}

