<?php

// The null coalescing operator (??) has been added as syntactic sugar for the common case of needing to use a ternary in conjunction with isset(). It returns its first operand if it exists and is not NULL; otherwise it returns its second operand.

$a = NULL;
$b = 1;
$c = 2;

echo $a ?? $b; // 1
echo $c ?? $b; // 2
echo $a ?? $b ?? $c; // 1
echo $a ?? $x ?? $c; // 2

