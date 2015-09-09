<?php

class C {
	public $ello = 'ello';

	public $c;

	public $m;

	public function __construct($y) {
		$this->c = static function($f) {
			return $f() . "ello";
		};
		
		$this->m = function() {
			return "h";
		};
	}
}

$x = new C("h");
$f = $x->c;
echo $f($x->m);

// Output: hello
