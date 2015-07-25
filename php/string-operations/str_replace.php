<?php

$var = 2;
$str = 'zy string';

echo str_replace('z', 'm', $str, $var); // $var will contain the count of string replaced (0 if it has not found any string)

