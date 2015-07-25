<?php

class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function doSomething()
    {
	echo "Here!\n";
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass('Hello');

echo $class."<br>";
$class->doSomething();
