<?php

error_reporting(E_ALL);

class A {
	private $var;
}

class B extends A {
	public function func() {
		$this->var = 1;
	}
}

$b = new B();
$b->func();

