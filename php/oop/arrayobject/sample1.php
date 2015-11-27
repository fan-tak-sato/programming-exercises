<?php
 
$array = array('one', 'two', 'three');
 
$arrayObj = new ArrayObject($array);
 
var_dump( ($array[0] == $arrayObj[0]) );

// Output: true

