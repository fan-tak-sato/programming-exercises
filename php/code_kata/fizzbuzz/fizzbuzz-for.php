<?php

for ($i = 1; $i <= 100; $i++)
{
	$mod3 = $i % 3;
	$mod5 = $i % 5;
	$str = '';
	
	if (!$mod3) {
		$str = ' Fizz';
	}

	if (!$mod5) {
		$str .= ' Buzz';
	}
	
	if ($mod3 && $mod5) {
		$str .= $i;
	}
	echo $str, "<br>\n";
}