<?php

class A {
	protected $x = array();
	public function &getX() {
		return $this->x;
	}
}

$a = new A();

array_push($a->getX(), "one");
array_push($a->getX(), "two");

echo count($a->getX());

// &getX() will allow to get the value and update it
