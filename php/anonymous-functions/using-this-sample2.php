<?php

class A
{
    public $value = 12;
    public function getClosure()
    {
        $self = $this;
        return function() use($self)
        {
            return $self->value;
        };
    }
}

$a = new A;
$fn = $a->getClosure();
echo $fn(); // 12
