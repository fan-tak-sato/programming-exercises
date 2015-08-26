<?php

class A
{
	const NAME = 'A';

	public static function test() {
		$args = func_get_args();
		echo static::NAME, " ".join(',', $args)." \n";
	}
}

class B extends A
{
	const NAME = 'B';

	public static function test() {
		echo self::NAME, "\n";
		forward_static_call_array(array('A', 'test'), array('more', 'args')); // call parent method
		forward_static_call_array('test', array('other', 'args')); // function
	}
}

B::test('foo');

function test() {
	$args = func_get_args();
}

