<?php

function factorial($number)
{
    if ($number < 0) {
        throw new InvalidArgumentException('Number cannot be less than zero');
    }
    $factorial = 1;
    while ($number > 0) {
        $factorial *= $number;
        $number --;
    }
    return $factorial;
}

echo factorial(6);
