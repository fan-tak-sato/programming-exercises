<?php

/**
 * 
 */
function reducer($total, $elt)
{
	return $elt + $total;
}

$arr = array(1, 2, 3, 4, 5);

echo array_reduce($arr, 'reducer', 1);
