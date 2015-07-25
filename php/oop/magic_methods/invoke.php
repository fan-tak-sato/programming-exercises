<?php

/**
 * The magic method __invoke() is called when a script tries to call an object as a function
 */
class CallableClass
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}

$obj = new CallableClass;
$obj(5);

var_dump( is_callable($obj) );
