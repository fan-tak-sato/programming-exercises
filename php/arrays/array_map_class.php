<?php

class test {
	
	public function multipleTwo($item) {
		if (is_int($item)) {
			return $item * 2;
		}
		return $item;
	}
}

$test = new test();
$map = array_map(array($test, 'multipleTwo'), array(1, 2, "string", 3));

var_dump($map);
