<?php

function fun($var)
{
    if (!$var) {
        throw new Exception('Arithmetic exception: Divide by zero...');
    }

    return 1 / $var;
}

try {
    echo fun(0) . "<br />";
} catch (Exception $ex) {
    echo 'Exception caught: ',  $ex->getMessage(), "<br />";
} finally {
    echo "Finally block executed!";
}
