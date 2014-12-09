<?php

class AppleFactory {

    static $id = 0;

    static public function getApple($className) {
        $apple = new $className();
        $apple->id = self::$id++;
        return $apple;
    }

}

class Apple {

    public $id;
    public $color;
    public $size;
    public $origin;
    public $season;

}

class GrannySmith extends Apple {

    public function __construct() {
        $this->color = 'Green';
        $this->size = 'medium';
        $this->origin = 'Australia';
        $this->season = 'October - Desember';
    }

}

$a = AppleFactory::getApple('GrannySmith');
print_r($a);