<?php

abstract class Base {

	protected function __construct() {

	}

	public static function create() {
		return new static(); // HERE static is used to return itself
	}

	abstract function action();
}

class Item extends Base {
	public function action() { echo __CLASS__; }
}

$item = Item::create();
$item->action(); // outputs "Item"
