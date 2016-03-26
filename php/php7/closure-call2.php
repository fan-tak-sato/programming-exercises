<?php

/** http://php.net/manual/en/closure.call.php
 *
 * Closure::call() is a more performant, shorthand way of temporarily binding an object scope to a closure and invoking it.
 **/

class A {
	private $x = 1;
}

// Pre PHP 7 code
$getXCB = function() {return $this->x;};
$getX = $getXCB->bindTo(new A, 'A'); // intermediate closure
echo $getX();

// PHP 7+ code
$getX = function() {return $this->x;};
echo $getX->call(new A);

