<?php

$numbers = array(5, 6, 7, 8);
end($numbers);

while ( key($numbers) ) {
	echo current($numbers);
	prev($numbers);
}

// Output: 876

// The while loop print the array keys from the end of the file until 6 because key(5) is 0

