<?php

function fibonacci($n) {
    if ($n == 0)
        return 0;
    else if ($n == 1)
        return 1;
    else
        return ( fibonacci($n - 1) + fibonacci($n - 2) );
}

$term = 15;
$c = 0;
for ($i = 1; $i <= $term; $i++) {
    echo "<br>".fibonacci($c);
    $c++;
}