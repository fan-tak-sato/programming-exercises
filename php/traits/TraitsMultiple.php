<?php

/**
 * Traits: http://php.net/manual/en/language.oop5.traits.php
 * Sitepoint: http://www.sitepoint.com/using-traits-in-php-5-4/
 */

trait Hello
{
    function sayHello() {
        echo "Hello";
    }
}

trait World
{
    function sayWorld() {
        echo "World";
    }
}

trait HelloWorld
{
    use Hello, World;
}

class MyWorld
{
    // use Hello, World;
    use HelloWorld;
}

$world = new MyWorld();

echo $world->sayHello() . " " . $world->sayWorld(); //Hello World