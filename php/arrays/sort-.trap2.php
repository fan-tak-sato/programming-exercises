<?php

function format(&$item) {
   $item = strtoupper($item) . '.';
   return $item;
}
$shopping = array("fish", "bread", "eggs", "jelly", "apples");
array_walk($shopping, "format");
$shopping = sort($shopping);
echo $shopping[1];

// Output: 

// NOTE: 
