<?php

$a = NULL;
$b = 1;
$c = 2;

echo $a ?? $b; // 1
echo $c ?? $b; // 2
echo $a ?? $b ?? $c; // 1
echo $a ?? $x ?? $c; // 2
