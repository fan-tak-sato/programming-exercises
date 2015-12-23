<?php

/**
 * @param int $n
 * @return array
 */
function fibonacci($n)
{
    $fibarray = array(0, 1);
    for ( $i=2; $i<=$n; ++$i ) {
        $fibarray[$i] = $fibarray[$i-1] + $fibarray[$i-2];
    }
    
    return $fibarray;
}

/**
 * @param int $n
 * @return mixed
 */
function getFibonacciOccurrence($n)
{
    $fibLowValues = array(0, 1);
    if (isset($fibLowValues[$n])) {
        return $fibLowValues[$n];
    }

    $fibonacci = fibonacci($n);

    return $fibonacci[count($fibonacci)-1];
}

echo getFibonacciOccurrence(10);