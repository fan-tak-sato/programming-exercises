<?php

$a = 42 & 05 + 17;

echo $a;

// Output: 2

// NOTE: The operator precedence means we do 17 + 5 = 22 first, then we do 42 & 22 ... & is a binary operation, so we need those numbers in binary first. 22 in binary: 10110 42 in binary: 101010 The only column where both numbers have a 1, is in the 2 place.
