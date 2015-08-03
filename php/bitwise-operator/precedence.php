<?php

$a = 4 << 2 + 1;

echo $a;

// Output: 32
// NOTE the addition has the precedence, so it will be executed first. So 4 << 3 = 32. http://www.php.net/manual/en/language.operators.precedence.php
