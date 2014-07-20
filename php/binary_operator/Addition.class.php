<?php

class Addition implements iBinaryOperator
{
    public function calc($x, $y)
    {
        return $x + $y;
    }
}