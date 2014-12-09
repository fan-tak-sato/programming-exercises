<?php

$obj1 = new StdClass;
$obj1->prop = array(1,2,3);

$obj2 = new StdClass;
$obj2->prop = array(1,3);

print_r( recursive_array_diff( (array)$obj2, (array)$obj1) );
