<?php

$input = [0, 2, 'string', new stdClass(), 'false'];

$sanitized = array_map(function($item) {
	return (bool)$item;
}, $input);

// $sanitized = array_map("boolval", $input); // it works with PHP5.5

var_dump($sanitized);
