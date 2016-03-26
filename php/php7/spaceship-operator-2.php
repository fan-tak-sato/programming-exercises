<?php

// The spaceship operator is used for comparing two expressions. It returns -1, 0 or 1 when $a is respectively less than, equal to, or greater than $b. Comparisons are performed according to PHP's usual type comparison rules: http://php.net/manual/en/types.comparisons.php

// Integers
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// Floats
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1
 
// Strings
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
