<?php

class C {
	public $x = 1;
	public function __construct() { ++$this->x; }
	public function __invoke() { return ++$this->x; }
	public function __toString() { return (string) --$this->x; }
}

$obj = new C();
// echo $obj; // Output: 1
echo $obj(); // Output: 3

// The __invoke() method is called when a script tries to call an object as a function.
// The object is created and $x is incremented for the first time and it become 2. When $obj() is called $x become 3
// __toString() method is not called

