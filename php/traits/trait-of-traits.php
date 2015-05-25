<?php

trait Hello
{
    public function sayHello() {
        echo 'Hello ';
    }
}

trait User 
{
    use Hello;
    public function sayName() {
        echo ' Andrea';
    }
}
 
class Greeting 
{
    use User;
}
 
$g = new Greeting();
$g->sayHello() . $g->sayName();