<?php

class A {
static $word = "hello";
static function hello() {print static::$word;} // print self::$word; will get hello
}
class B extends A {
static $word = "bye";
}
B::hello();

// Output: bye
