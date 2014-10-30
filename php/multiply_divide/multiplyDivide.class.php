<?php

/**
 * Let's multiply or divide 2 numbers without using * or /
 * 
 * @author Andrea Fiori
 * @since  21 November 2012
 */
class multiplyDivide
{
    /**
     * Multiply 2 numbers without using * operator
     * 
     * @param number $first
     * @param number $second
     * @return number|boolean
     */
    public function multiply($first, $second)
    {
        if (!is_numeric($first) or !is_numeric($second)) {
            return false;
        }

        $result = 0;
        for($i=0; $i < $second; $i++) {
            $result = $result + $first;
        }
        return $result;
    }

    /**
     * Divide 2 numbers without using / operator
     * 
     * @param number $first
     * @param number $second
     * @return number|boolean
     */
    public function divide($first, $second)
    {
        if (!is_numeric($first) or !is_numeric($second) 
                or $second > $first or $second <= 0) {
            return false;
        }

        $counter = 0;
        while($first > 0)
        {
            $first = $first - $second;
            $counter++;
        }
        return $counter;
    }
}
