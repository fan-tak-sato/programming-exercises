<?php

//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved

include_once('BookPrototype.php');

class SQLBookPrototype extends BookPrototype {

	function __construct() {
		$this->topic = 'SQL';
	}

	function __clone() {
	}

}
