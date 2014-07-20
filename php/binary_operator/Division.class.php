<?php

class Division implements iBinaryOperator
{
    public function calc($x, $y)
    {
        if ($y == 0) {
            return 'error';
        }

        return $x / $y;
    }
}