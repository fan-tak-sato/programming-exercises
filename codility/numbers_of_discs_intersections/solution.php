<?php

function solution($A) {
    $result = 0;
    $cnt = count($A);
    $dps = array_fill(0, $cnt, 0);
    $dpe = array_fill(0, $cnt, 0);
    for ($i = 0; $i < $cnt; $i++){
        $dps[max(0, $i - $A[$i])]++;
        $dpe[min($cnt - 1, $i + $A[$i])]++;
    }
    $t = 0;
    for ($i = 0; $i < $cnt; $i++){
        if ($dps[$i] > 0){
            $result += $t * $dps[$i];
            $result += $dps[$i] * ($dps[$i] - 1) / 2;
            if($result > 10000000){
                return -1;
            }
            $t += $dps[$i];
        }
        $t -= $dpe[$i];
    }
    return $result;
}
