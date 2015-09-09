<?php

class Number {
	private $v;
	private static $sv = 10;
	public function __construct($v) {
		$this->v = $v;
	}
	public function mul() {
		return static function ($x) {
			return isset($this) ? $this->v * $x : self::$sv * $x;
		};
	}
}
$one = new Number(1);
$two = new Number(2);
$double = $two->mul();
$x = Closure::bind($double, null, 'Number');
echo $x(5);
