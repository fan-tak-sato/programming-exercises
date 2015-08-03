<?php

/**
 * Write an iterative function to reverse a string without using strrev
 *
 * Do the same thing as a recursive function.
 */
function reverseString($str) {
    return $str ? reverseString(substr($str,1)).$str[0] : '';
}

echo reverseString('gnirtSyMsIsiht'); // thisIsMyString
