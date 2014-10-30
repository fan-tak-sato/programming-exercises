<?php

$arrayOfNumbers = array();

for($i=1; $i<=100; $i++) {
	$arrayOfNumbers[$i] = $i;
}

$missedNumber = rand(1, 99);
unset($arrayOfNumbers[$missedNumber]);

/* Solution using array_diff */
$arrayWithMissedValue = range(1, max($arrayOfNumbers));                                      
$arrayWithMissingElement = array_diff($arrayWithMissedValue, $arrayOfNumbers);

echo implode('', $arrayWithMissingElement);
