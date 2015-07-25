<?php

function solution($A) {
    $cnt = count($A);
    if ($cnt < 3){
        return 0;
    }
    $lcnt = $cnt -2;
    sort($A, SORT_NUMERIC);
    for($i = 0; $i < $lcnt; $i++){
        if($A[$i] + $A[$i+1] > $A[$i+2]){
            return 1;
        }
    }
    return 0;
}