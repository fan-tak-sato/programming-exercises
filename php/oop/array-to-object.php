<?php

$a = array('a', 'b'=>'c');

echo property_exists((object) $a, 'a')?'true':'false';
echo '-';
echo property_exists((object) $a, 'b')?'true':'false';
