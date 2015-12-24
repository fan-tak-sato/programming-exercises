<?php

class news {

    var $db, $messageLogger;

    public function __construct()
    {
        singleton::getInstance();
    }

    /**
     * @param $varName
     * @param $value
     */
    public function setVar($varName, $value)
    {
        $this->$varName = $value;
    }
}

class singleton
{
    private static $_instance;

    /**
     * @return null|singleton
     */
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    private function __clone() {}
}

$a = singleton::getInstance();
$b = new news();
$b->setVar("db", "datab");
