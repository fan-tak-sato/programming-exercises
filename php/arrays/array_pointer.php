<?php

$numbers = array(5, 6, 7, 8);

end($numbers);

while (key($numbers)) {
	echo current($numbers);
	prev($numbers);
}

