<?php

$pattern= '/[a-z]{4} /';
 
$string = 'The quick brown fox jumps over the lazy dog';
 
$matches = preg_match($pattern, $string, $realMatch);
 
echo $matches[0]; // null? preg_match returns 1. The matched result is stored on $realMatch (third parameter).

// var_dump($realMatch);

