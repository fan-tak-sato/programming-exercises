<?php

function reverseString($str) {
    return $str ? reverseString(substr($str,1)).$str[0] : '';
}

echo reverseString('gnirtSyMsIsiht'); // thisIsMyString
