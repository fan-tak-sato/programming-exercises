<?php

$values = array(37, 5, "09");

sort($values, SORT_STRING);

foreach ($values as $v) {
	echo $v;
}

// Output: 
