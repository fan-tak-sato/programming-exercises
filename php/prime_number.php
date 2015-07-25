<?php

function isPrimeNumber($num)
{
	for ($i = 2; $i <= $num - 1; $i++) {
		if (bcmod($num, $i) == 0) {
			return false;
		}
	}
	if ($num == $i) {
		return true;
	}
}

echo isPrimeNumber(4);

echo isPrimeNumber(11);