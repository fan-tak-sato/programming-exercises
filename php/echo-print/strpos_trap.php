<?php

$haystack = 'abcda';
$needle   = 'a';

$pos = strpos($haystack, $needle);

if (!$pos) {
	echo "miss";
} else {
	echo "hit " . $pos;
}

