<?php

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value)
{
	$value = $value * 2;
}

print_r($arr);
reset($arr);
while (list(, $value) = each($arr)) 
{
    echo "Value: $value<br />\n";
}
