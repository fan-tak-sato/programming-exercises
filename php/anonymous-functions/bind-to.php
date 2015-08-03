<?php

$f = function () {
    return $this->n;
};

class MyClass {
    private $n = 42;
}

$myC = new MyClass();
$c = $f->bindTo($myC, "MyClass");
$c();

// Resources: http://php.net/manual/en/functions.anonymous.php , http://php.net/manual/en/closure.bindto.php,
