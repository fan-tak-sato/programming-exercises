<?php

class MyClass
{
	public function getInstance()
	{
		return $this;
	}
	
	public function doSomething()
	{
		return true;
	}
}

$a = new MyClass();

echo $a->getInstance()->doSomething();

echo "<br>";

echo (new MyClass())->getInstance()->doSomething();
