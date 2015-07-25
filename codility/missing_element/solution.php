<?php

function solution($A) {
    $N   = count($A);
    $sum = ($N + 2) * ($N + 1) / 2;
    for($i = 0; $i < $N; $i++) {
        $sum -= $A[$i];
    }
    return intval($sum);
}