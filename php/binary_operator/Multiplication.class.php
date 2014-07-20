<?php

class Multiplication implements iBinaryOperator
{
    public function calc($x, $y)
    {
        return $x * $y;
    }
}