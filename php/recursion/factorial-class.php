<?php

class Factorial {

	public function calculate($number) {
	    if ($number < 2) {
		return 1;
	     } else {
		return ($number * $this->calculate($number-1));
	     }
	}
}

$factorial = new Factorial();

echo $factorial->calculate(5);

