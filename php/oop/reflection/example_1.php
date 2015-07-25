 <?php

class myparent
{
	 public function foo($bar) {

	 }
}
 
class mychild extends myparent
{
	 public $val;
 
	 private function bar(myparent &$baz) {
	 
	 }

	 public function __construct($val) {
		 $this->val = $val;
	 }
 }

$child = new mychild('hello world');
$child->foo('test');

$reflect = new ReflectionClass('mychild');

echo $reflect;

