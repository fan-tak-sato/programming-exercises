<?php

include_once('BookPrototype.php');

class SQLBookPrototype extends BookPrototype {

	public function __construct() {
		$this->topic = 'SQL';
	}

	public function __clone() {

	}

}
