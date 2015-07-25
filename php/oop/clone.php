<?php

/**
 * http://php.net/manual/en/language.oop5.cloning.php
 * http://en.wikipedia.org/wiki/Object_copy
 */

class test
{
    public $a;
    private $b;
    
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    function __clone()
    {
        $this->a = "c";
    }
}

$a = new test("ankur" , "techflirt");
$b = $a; // Copy of the object
$c = clone $a; // clone of the object
$a->a = "no Ankur";
print_r($a);
print_r($b);
print_r($c);
print_r($a);