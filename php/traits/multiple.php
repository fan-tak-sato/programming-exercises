<?php

trait Hello
{
    public function sayHello() {
        echo 'Hello ';
    }
}

trait User 
{
    public function sayName() {
        echo ' Andrea';
    }
}
 
class Greeting 
{
    use Hello, User;
}
 
$g = new Greeting();
$g->sayHello() . $g->sayName();