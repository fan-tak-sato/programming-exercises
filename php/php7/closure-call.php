<?php

/*
$f = function () {
    return $this->n;
};

class MyClass {
	private $n = 42;
}

$myC = new MyClass;
$c = $f->bindTo($myC, "MyClass");
$c();
*/

// This will become:
$f = function () {
    return $this->n;
};

class MyClass {
    private $n = 42;
}

$myC = new MyClass;
echo $f->call($myC);
