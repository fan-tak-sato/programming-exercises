<?php

trait Singleton {
	
    private static $_instance;
	
    public static function getInstance() {
        if (!isset(self::$_instance)) {
            $class = __CLASS__;
            self::$_instance = new $class;
        }
 
        return self::$_instance;
    }       
}

class BaseHello 
{
    public function hello()
    {
        return 'Hello';
    }        
}

class BaseUser 
{
    public function name($name)
    {
        return $name;
    }        
}

class Hello extends BaseHello
{
    use Singleton;
}

class User extends BaseUser
{
    use Singleton;
}
 
$h = Hello::getInstance();
$u = User::getInstance();

echo $h->hello() . ' ' . $u->name('Andrea');