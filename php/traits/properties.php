<?php

trait TestTrait
{
    public static $foo;
}

class Hello
{
    use TestTrait;
}

class User
{
    use TestTrait;
}
 
Hello::$foo = 'Hello';
User::$foo = 'Andrea';

echo Hello::$foo . ' ' . User::$foo;
