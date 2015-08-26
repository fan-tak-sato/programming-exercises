<?php

/**
 * strcmp returns < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.
 *
 * if str1 < str2  return  < 0
 * if str1 > str2  return  > 0
 * if str1 == str2  return 0
 *
 */
echo strcasecmp('Hi', 'hi');
$comparison = strcmp(5678, '5678');

if ($comparison===0) {
	echo "They are equal!<br>";
}

echo strcmp(13, 14); echo "<br>\n";

echo strcmp(2, 1); echo "<br>\n";

echo strcmp(14, 12); echo "<br>\n";

echo "String comparison: ".strcmp("Hello", "hello"); echo "<br>\n";

