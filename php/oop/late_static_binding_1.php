<?php

/**
 * http://www.php.net/manual/en/language.oop5.late-static-bindings.php
 */
class A
{
	public static function who() {
		echo __CLASS__;
	}
	
	public static function test() {
		self::who();
	}
}

class B extends A
{
	public static function who() {
        	echo __CLASS__;
	}
	
	public function foo() {
        	echo __CLASS__;
	}
}

B::test(); // A

$b = new B();
$b->foo(); // B
