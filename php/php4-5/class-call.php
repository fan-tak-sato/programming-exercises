<?php

class MyClass{
	public function getInstance() {
		$a = new MyClass(); return $a;
	}
	
	public function doSomething() {
		echo 'Hello World!';
	}
}

// $a = new MyClass();
// $b = $a->getInstance();

$c = (new MyClass())->getInstance()->doSomething();
