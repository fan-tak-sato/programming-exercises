<?php

function counter($start, &$stop)
{
	if ($stop > $start) {
		return;
	}
echo "time <br>";
	counter($start--, ++$stop);
}

$start = 5;

$stop = 2;

counter($start, $stop);

// How many times will the function counter() be executed? 5;  4+1
