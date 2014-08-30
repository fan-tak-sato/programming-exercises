<?php

function solution($H) {
    $N         = count($H);
    $stones    = 0;
    $stack     = array_fill(0, $N, 0);
    $stack_num = 0;

    for($i = 0; $i < $N; $i++){
        while($stack_num > 0 && $stack[$stack_num - 1] > $H[$i]){
            $stack_num--;
        }
        if($stack_num > 0 && $stack[$stack_num - 1] == $H[$i]){
            continue;
        }
        else{
            $stones++;
            $stack[$stack_num++] = $H[$i];
        }
    }
    return $stones;
}