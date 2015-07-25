<?php

class Object {
	function Object( $entity ) {
		$entity->name="John";
	}
}

class Entity {
	var $name = "Maria";
}

$entity = new Entity();

$obj = new Object( $entity );

print $entity->name; // John

// NOTE: in PHP 4, the output would be Maria, in PHP 5 is John because it changes the value of a public var!
