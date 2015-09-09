<?php

class Base {
	protected static function whoami() {
		echo "Base ";
	}

	public static function whoareyou() {
		static::whoami();
	}
}

class A extends Base {
	public final static function test() {
		Base::whoareyou();
		self::whoareyou();
		parent::whoareyou();
		static::whoareyou();
	}

	public static function whoami() {
		echo "A ";
	}
}

class B extends A {
	public final static function whoami() {
		echo "B ";
	}
}

A::test();

