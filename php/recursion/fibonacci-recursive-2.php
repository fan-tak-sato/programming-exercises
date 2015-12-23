<?php

/**
 * @param int $n
 * @return string
 */
function fibonacci($n) {

    if ($n == 0) {
        $num = "1";
    } else if ($n == 1) {
        $num = "1";
    } else {
        $num = fibonacci($n-1) + fibonacci($n-2);
    }

    return $num;
}

$numero = 29;
if ($numero == round($numero) and $numero >= 1 and $numero < 30) {
    $i = 0;
    while ($i <= $numero) {
        echo fibonacci($i)."<br>\n";
        $i++;
    }
}