<?php

$str = 'I am 30';

$vals = sscanf($str, '%s %d');

echo trim($vals[0] . ' ' . $vals[1]);

// Output: I (whithout any space, because they will be removed by trim!). $vals is only Array ( [0] => I [1] => ) 
