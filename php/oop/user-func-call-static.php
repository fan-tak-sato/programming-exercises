<?php

class Test {
	public function __call($name, $args) {
		call_user_func_array(array('static', "test$name"), $args);
		// call_user_func_array(array($this, "test$name"), $args);
		// call_user_func_array(array(__CLASS__, "test$name"), $args);
	}
	
	public function testS($l) {
		echo "$l,";
	}
}

class Test2 extends Test {
	public function testS($l) {
		echo "$l,$l,";
	}
}

$test = new Test2();
$test->S('A'); // Test2->TestS will be called

// Output: A,A
