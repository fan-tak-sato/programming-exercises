<?php
class Magic {
	protected $v = array("a" => 1, "b" => 2, "c" => 3);

	public function &__get($v) {
// var_dump($this->v);
		return $this->v[$v];
	}
}

$m = new Magic();
$m->d[] = 4;
echo $m->d[0];

// The & on the function __get will allow to 
