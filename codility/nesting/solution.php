<?php

function solution($S) {
    $s = preg_replace('~[^\(\)]~', '', $S);
    if($S <> $s){
        return 0;
    }
    $S = str_split($S);
    if(empty($S)){
        return 1;
    }
    $counter = 0;
    foreach($S as $v){
        switch($v){
            case '(':
                $counter++;
                break;
            case ')':
                $counter--;
                break;
        }
        if($counter < 0){
            return 0;
        }
    }
    return $counter == 0 ? 1 : 0;
}