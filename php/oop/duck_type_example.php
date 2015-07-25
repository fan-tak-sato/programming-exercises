<?php

/**
 * Based on http://en.wikipedia.org/wiki/Duck_typing
 */
interface DuckTypeInterface
{
    public function quack();
    public function fly();
}

class Duck implements DuckTypeInterface {
    public function quack() { echo "Quack", PHP_EOL; }
    public function fly() { echo "Flap, Flap", PHP_EOL; }
}
 
class Person implements DuckTypeInterface {
    public function quack() { echo "I try to imitate a duck quack", PHP_EOL; }
    public function fly() { echo "I take an airplane", PHP_EOL; }
}

function in_the_forest(DuckTypeInterface $object) {
    $object->quack();
    $object->fly();
}

in_the_forest(new Duck);
in_the_forest(new Person);