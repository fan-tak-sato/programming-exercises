<?php

trait foo { }

class bar {
	use foo;
}

print_r( class_uses(new bar) );

print_r( class_uses('bar') );

