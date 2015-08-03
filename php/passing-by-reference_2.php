<?php

function foo(&$var)
{
    $var++;
}
function bar() // Note the missing &
{
    $a = 5;
    return $a;
}

foo(bar()); // Produces fatal error as of PHP 5.0.5, strict standards notice
            // as of PHP 5.1.1, and notice as of PHP 7.0.0

foo($a = 5); // Expression, not variable
foo(5); // Produces fatal error

