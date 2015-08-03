<?php

$a = array('a', 'b'=>'c');

echo property_exists( (object) $a, 'a') ? 'true' : 'false';
echo '-';
echo property_exists( (object) $a, 'b') ? 'true' : 'false';

// Output: false-true

// The value of 0 => 'a' is not valid for the first expression
