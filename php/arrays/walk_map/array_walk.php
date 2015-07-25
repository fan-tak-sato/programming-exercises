<?php

/**
 * array_walk apply a user supplied function to every member of an array
 *
 * Returns TRUE on success or FALSE on failure.
 */
function square(&$item, $key)
{
	$item = pow($item, 2);
}

$arr = array(1, 2, 3, 4);

$squares = array_walk($arr, 'square');

var_dump($arr);
