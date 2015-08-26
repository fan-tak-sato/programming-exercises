<?php

// array_shift delete the first element of the array
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);

echo "<br><br>\n";

// array_pop delete the last element of the array
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
