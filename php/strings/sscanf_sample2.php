<?php

// Given the following PHP code, what value must be assigned to $format so each digit is extracted individually in the call to sscanf()?

$str = '31337';
$format = '%1d%1d%1d%1d%1d';
$digits = sscanf($str, $format);
foreach($digits as $digit) {
	echo $digit."<br>";
}

// $format = '%1d%1d%1d%1d%1d'; // this is more precise. This one is ok too but there is no number of digits to take $format = '%d%d%d%d%d';
