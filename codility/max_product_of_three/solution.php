<?php

function solution($A) {
    $cnt = count($A);
    sort($A, SORT_NUMERIC);
    return max($A[0]*$A[1]*$A[$cnt-1], $A[$cnt-1]*$A[$cnt-2]*$A[$cnt-3]);
}