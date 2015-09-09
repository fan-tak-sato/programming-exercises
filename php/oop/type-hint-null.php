<?php

function f(stdClass &$x = NULL) {
	$x = 42;
}

$z = new stdClass;

f($z);

var_dump($z);
