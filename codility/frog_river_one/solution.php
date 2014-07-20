<?php

function solution($X, $A) {
    $tiles  = array();
    for ($i = 0; $i < count($A); $i++){
        $j = $A[$i] - 1;
        if (!isset($tiles[$j])){
            $X--;
            $tiles[$j] = true;
        }
        if (!$X){
            return $i;
        }
    }
    return -1;
}