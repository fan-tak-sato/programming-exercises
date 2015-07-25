<?php

class Base
{
    public function  sayHello()
    {
        echo "Ciao ";
    }
}

trait Greeting
{
    public function  sayHello()
    {
		echo "Hello ";
    }
 
    public function sayName()
    {
		echo 'John';
    }
}
 
class MyGreeting extends Base
{
    use Greeting;
 
    public function sayName()
    {
        echo 'Andrea';
    }
 
    public function sayBaseHello()
    {
        echo parent::sayHello() . $this->sayName();
    }
}
 
$g = new MyGreeting();
$g->sayHello() . $g->sayName(); echo "<br>";
$g->sayBaseHello();
