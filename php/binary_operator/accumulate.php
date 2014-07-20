<?php

/**
 * @param iBinaryOperator $op
 * @param array $operands array of integers of size N, can be empty
 * @return int|string returns an int on successful accumulation, or the string 'error' in error conditions
 */
function accumulate(iBinaryOperator $op, array $operands)
{
    if (count($operands) < 2) {
        return "error";
    }

    $i=0;
    foreach($operands as $operand) {

        if ( !is_numeric($operand) ) {
            return "error";
        }

        if ($i == 0) {
            $result = $operand + next($operands);
        } elseif ($i > 1) {
            $result = $op->calc($result, $operand);
        }

        if ( !is_numeric($result) ) {
            return $result;
        }

        $i++;
    }

    return $result;
}
