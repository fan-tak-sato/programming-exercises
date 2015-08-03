<?php

class TestClass
{
    public $foo = 4;

    public function __construct()
    {

    }

    public function __clone()
    {
	$this->foo = 1;
    }
}

$class = new TestClass();

$myClassClone = clone $class;

echo $myClassClone->foo;

// NOTE: the magic method __clone is called when you clone an object

