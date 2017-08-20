<?php

// Call a method with a string

class className {
	
	public $variableName;
	
	public function methodName()
	{
		echo "test!";
	}
}

${"variableName"} = 12;

$className = new className();
$className->{"variableName"};
$className->{"methodName"}();

// Using static method
// StaticClass::${"variableName"};
// StaticClass::{"methodName"}();