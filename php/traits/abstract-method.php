<?php

trait Greeting
{
    public function sayHello() {
        echo 'Hello ';
    }
	
    abstract public function sayName();
}
 
class MyGreeting 
{
	use Greeting;
	
    public function sayName() {
        echo ' Andrea';
    } 
}
 
$g = new MyGreeting();
$g->sayHello() . $g->sayName();
