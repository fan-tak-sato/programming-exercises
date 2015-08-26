<?php

$str   = '0x0fc929cc';

$regex = '/[0-9a-f]{3,5}(C+)$/i';

if (preg_match($regex, $str, $matches)) {
	echo $matches[1];
} else {
	echo 'b';
}
