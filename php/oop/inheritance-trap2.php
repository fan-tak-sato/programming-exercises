<?php

class M {
	public function identify() {
		echo self::myName();
	}
	public function myName() {
		return "Mike";
	}
}

class N extends M {
	public function myName() {
		return "November";
	}
}

function m(N $n) {
	$n->identify();
}

$m = new N();

m($m);

// Output: Mike

// NOTE: Late static binding http://php.net/manual/en/language.oop5.late-static-bindings.php the self:: call the method inside the parent class.
