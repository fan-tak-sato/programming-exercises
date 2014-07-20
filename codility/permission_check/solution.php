<?php

function solution($A) {
    sort($A, SORT_NUMERIC);
    $i=0;
    $c = count($A);
    while($i < $c) {
        if ($i+1 <> $A[$i++]) {
            return 0;
        }
    }
    return 1;
}