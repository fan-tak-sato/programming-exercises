<?php

class Foo implements ArrayAccess {
	public function offsetExists($k) { return true; }
	public function offsetGet($k) { return 'a'; }
	public function offsetSet($k, $v) {}
	public function offsetUnset($k) {}
}

$x = new Foo();

echo array_key_exists('foo', $x) ? 'true' : 'false';

