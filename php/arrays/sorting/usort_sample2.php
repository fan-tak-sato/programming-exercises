<?php

function sortByLength($a, $b)
{
	$lenA = strlen($a);
	$lenB = strlen($b);

	if ($lenA == $lenB) { return 0; }

	return $lenA < $lenB ? -1 : 1;
}

$values = array(
	'ccc',
	'a',
	'eeeeee',
	'dddd',
	'bb',
	'fffff'
);

usort($values, 'sortByLength');

echo $values[5];

