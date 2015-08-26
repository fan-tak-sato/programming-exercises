<?php

$arrayOfNumbers = array();

for($i=1; $i<=100; $i++) {
	$arrayOfNumbers[$i] = $i;
}

$missedNumber = rand(1, 99);
unset($arrayOfNumbers[$missedNumber]);


$Expected = 1;
foreach ($arrayOfNumbers as $Key => $Number)
{
   if ($Expected != $Number)
   {
       break;
   }
   $Expected++;
}

echo $Number;