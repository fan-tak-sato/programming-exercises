<?php

//copyright Lawrence Truett and FluffyCat.com 2006, all rights reserved

include_once('BookPrototype.php');

class PHPBookPrototype extends BookPrototype {

	function __construct() {
		$this->topic = 'PHP';
	}

	function __clone() {
	
	}

}
