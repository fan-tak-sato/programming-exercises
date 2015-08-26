<?php

ini_set('display_errors', 0);
error_reporting(0);

function modV(&$b) {
	$b = --$b;
	$c = ++$b;
	$c = $c + 1;
	return $c;
}

$a = 1;
$b = 2;

$b = modV($a);

echo "Uno e Due: ".$a.' e '.$b;
echo "\n";

$b = 2234;
$v = 12354;
$v = $v % $v;
$b = pow($v * $b,0) * $v;

echo "Uno: ";
if ($b>=0 && $v>=0 && $b==$v) {
	echo 1;
} else {
	echo 0;
}
echo "\n";
