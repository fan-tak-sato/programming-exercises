<?php

$test = array(
	0 => -7,
	1 => 1,
	2 => 5,
	3 => 2,
	4 => -4,
	5 => 3,
	6 => 0,
);

function equi($A) {
for ($i = 0; $i < count($A); $i++) {

$sum_left = 0;
$sum_right = 0;

if ($i > 0) {
//sum left
for ($h = $i - 1; $h >= 0; $h--) {
$sum_left += $A[$h];
}
}

// sum right
for ($j = $i + 1; $j < count($A); $j++) {
$sum_right += $A[$j];
}

$eq = -1;

if ($sum_left == $sum_right) {
$eq = $i;
break;
}
}

return $eq;
}

echo equi($test);