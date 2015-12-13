<?php

trait Cat {
	public function roar() {
		echo "Meowww";
	}
}

class Animal {
	public function roar() {
		echo "Makes animal sounds";
	}
}

class Tiger extends Animal {
	use Cat;
}

$tiger = new Tiger;
$tiger->roar();

