<?php

class MyObject {
	public function __invoke(&$value, $key)
	{
		$value *= 2;
	}
}

$obj = new MyObject();

$array = array(1,2,3);

array_walk($array, $obj);

var_dump($array);
