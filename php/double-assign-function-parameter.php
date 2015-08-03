<?php

function f(stdClass &$x = NULL) {
	$x = 42;
}

$z = new stdClass;

f($z);

var_dump($z);

// Output: 42

// NOTE: there will be no error passing the function parameter in this way!

