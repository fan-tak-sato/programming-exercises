<?php

/**
 * returns whether the input integer is odd
 */
function odd($var)
{
	return($var & 1);
}

/**
 * returns whether the input integer is even
 */
function even($var)
{
	return(!($var & 1));
}

$array1 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Odd :\n";
print_r(array_filter($array1, "odd"));

echo "Even:\n";
print_r(array_filter($array2, "even"));
