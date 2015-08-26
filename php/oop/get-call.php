<?php
class foo
{
	function __get($n)
	{
		var_dump($n);
	}

	function __call($m, $a)
	{
		print $m;
	}
}

$test = new foo();
$varname = 'invalid,variable+name';
$test->$varname; // __get will be called
$test->$varname(); // __call will be called

