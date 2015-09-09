<?php

class DBManager {

	private $db_dsn;
	private $db_username;
	private $db_password;
	private $connection = null;

	public function __construct($db_dsn, $db_username, $db_password) {
		$this->db_dsn = $db_dsn;
		$this->db_username = $db_username;
		$this->db_password = $db_password;
	}

	// The open function sets up the database for operation.
	public function open() {
		try {
			$this->connection = new PDO($this->db_dsn,
			$this->db_username,
			$this->db_password);
		} catch(PDOException $e) {
			echo "An database connection error occurred:".
			" {$e->getMessage()}";
			exit();
		}
	}

	public function execute($sql) {
		try {
			$result = $this->connection->query($sql);
			if (!$result) {
				throw new PDOException();
			}
			return $result;
		} catch (PDOException $e ) {
			$this->test("Execute failed: ".$sql);
			return $result;
		}
	}
}

