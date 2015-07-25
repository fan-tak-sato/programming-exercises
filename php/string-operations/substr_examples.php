<?php

$str = 'abcd';

echo substr($str, 0, 1); echo "<br>"; // a
echo substr($str, 0, -1); echo "<br>"; // abc
echo substr($str, 3, 1); echo "<br>"; // d
echo substr($str, 3); echo "<br>"; // d
echo substr($str, -3); // bcd

// aabcddbcd
