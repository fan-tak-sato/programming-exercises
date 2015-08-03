<?php

$a = "a, b,c, d, e f, g";

$b = array_merge(explode(', ', $a), array("a", "b"));

echo count($b);

// Output: 7


var_dump( array_merge(array("a", "b"), array("a", "c")) ); // This will not overwrite a
var_dump( array_merge(array("mykey" => 1, "b"), array("mykey" => 1, "c")) ); // This will overwrite a!!!

// From php.net: if the input arrays have the SAME STRING KEYS, then the later value for that key will overwrite the previous one. If, however, the arrays contain numeric keys, the later value will NOT overwrite the original value, but will be appended.
