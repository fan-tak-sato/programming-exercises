<?php

class Getter {

	private $x;

	public function __construct()
	{

	}

	public function __get($var) {
		echo 'Variable '. $var.' does not exist!';
	}
}

$foo = new Getter();

echo $foo->a;

// __get() is utilized for reading data from inaccessible properties

