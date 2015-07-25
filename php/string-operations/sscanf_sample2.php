<?php

// Given the following PHP code, what value must be assigned to $format so each digit is extracted individually in the call to sscanf()?


$str = '31337';
$format = '%1d%1d%1d%1d%1d'; // Answer
$format = '%d%d%d%d%d';

$digits = sscanf($str, $format);

foreach($digits as $digit) {
	echo $digit;
}
