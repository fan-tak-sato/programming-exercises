<?php

function solution($A) {
    $cnt    = count($A);
    $cntm   = $cnt - 2;
    $min_avg_value = ($A[0] + $A[1])/2.0 ;
    $min_avg_pos = 0 ;

    for($i=0;$i<$cntm;$i++){
        if( ($A[$i] + $A[$i+1])/2 < $min_avg_value){
            $min_avg_value = ($A[$i] + $A[$i+1])/2;
            $min_avg_pos = $i;
        }
        if( ($A[$i] + $A[$i+1] + $A[$i+2])/3 < $min_avg_value){
            $min_avg_value = ($A[$i] + $A[$i+1] + $A[$i+2])/3;
            $min_avg_pos = $i;
        }
    }

    if(($A[$cnt - 1] + $A[$cnt - 2]) /2 < $min_avg_value){
        $min_avg_value = ($A[$cnt - 1] + $A[$cnt - 2]) /2;
        $min_avg_pos = $cnt-2;
    }

    return $min_avg_pos;
}