<?php

/**
 * 
 * http://php.net/manual/en/language.oop5.overloading.php
 * http://en.wikipedia.org/wiki/Function_overloading
 * http://en.wikipedia.org/wiki/Method_overriding
 * 
 */
class testParent
{
    public function f1()
    {
        echo 1;
    }
    public function f2()
    {
        echo 2;
    }
}

class testChild
{
    public function f2($a)
    {
        echo $a;
    }
}

$a = new testChild();
$a->f2("ankur");
