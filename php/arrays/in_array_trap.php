<?php

$array = array('elephant' => 1, 'tiger' => 0, 'cat' => 1);

var_dump( in_array('mouse', $array) );


// NOTE: http://php.net/manual/en/function.in-array.php 
// If the array contains numbers, especially 0, we must use the third parameter and set it to true to search EXACTLY the same value. Otherwise, PHP compare the value with == using all array values. Infact: 'mouse' == 0 is true becuase PHP convert the string to 0. This can cause the same trouble if we have '12mouse' == 12 and this will be true too.

