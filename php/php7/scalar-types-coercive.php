<?php

/**
 * http://php.net/manual/en/migration70.new-features.php
 *
 * Scalar type declarations come in two flavours: coercive (default) and strict. The following types for parameters can now be enforced (either coercively or strictly): strings (string), integers (int), floating-point numbers (float), and booleans (bool). They augment the other types introduced in PHP 5: class names, interfaces, array and callable.
 */

// Coercive mode
function sumOfInts(int ...$ints)
{
    return array_sum($ints);
}

var_dump(sumOfInts(2, '3', 4.1));

