<?php

// What value should be assigned to $format to ensure the following script outputs 250007?

 $number1 = 250;
$number2 = 7;

$format = '%1$03d'; // Here is the ANSWER code

echo sprintf($format, $number1); // 250
echo sprintf($format, $number2); // 007

// output is 250007
