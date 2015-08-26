<?php
for ($i = 0; $i < 1.02; $i += 0.17) {
	$a[$i] = $i;
	// var_dump($a);echo "<br>";
}
echo count($a);

// Output: 1

// There is no float value for an array index. So 0.17 * 6 = 1.02 but the result wil not be > 0, so the only int number available is 0!
