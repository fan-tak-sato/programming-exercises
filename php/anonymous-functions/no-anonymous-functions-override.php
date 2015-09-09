<?php
class A {
	public $a = 1;

	public function __construct($a) { $this->a = $a; }

	public function mul() {
		return function($x) {
			return $this->a*$x;
		};
	}
}

$a = new A(2);
$a->mul = function($x) {
	return $x*$x;
};
$m = $a->mul();
echo $m(3);

// The anonymous function will NOT override the A->mul() method
// To call the anonymous function: $m = $a->mul 
