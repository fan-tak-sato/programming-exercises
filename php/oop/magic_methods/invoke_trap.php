<?php

class C {
public $x = 1;
function __construct() { ++$this->x; }
function __invoke() { return ++$this->x; }
function __toString() { return (string) --$this->x; }
}

$obj = new C();
echo $obj();

// The __invoke() method is called when a script tries to call an object as a function.
// The object is created and $x is incremented for the first time and it become 2. When $obj() is called $x become 3
// __toString() method is not called

