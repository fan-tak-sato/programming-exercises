<?php

/**
 * Traits: http://php.net/manual/en/language.oop5.traits.php
 * Sitepoint: http://www.sitepoint.com/using-traits-in-php-5-4/
 */

trait Singleton
{
    private static $instance;

    public static function getInstance() {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}

class DbReader extends ArrayObject
{
    use Singleton;
}

class  FileReader
{
    use Singleton;
}

// Usage
$a = DbReader::getInstance();
$b = FileReader::getInstance();
var_dump($a);  // object(DbReader)
var_dump($b);  // object(FileReader)