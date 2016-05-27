<?php

class DBconnect {

	function __construct() {
		$this->connect_database();
	}

	public function getConnection() {
		return $this->dbh;
	}

	function connect_database() {

		$servername = "localhost";
		$username = "root";
		$password = "";

		try{
			$this->dbh = new PDO("mysql:host=$servername;dbname=søborgblomster;charset=utf8", $username, $password);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo "Connection failed: " . $e->getMessage();
		}
	}
}
?>