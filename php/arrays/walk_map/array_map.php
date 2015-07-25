<?php

/**
 * array array_map ( callable $callback , array $array1 [, array $... ] )
 * 
 * array_map applies the callback to the elements of the given arrays
 *
 * Returns an array containing all the elements of array1 after applying the callback function to each one.
 */
function square($val)
{
	return pow($val, 2);
}

$arr = array(1, 2, 3, 4);

$squares = array_map('square', $arr);

$i = 0;
foreach ($squares as $value) {
	if ($i++ > 0) {
	    echo ".";
	}

	echo $value;
}
