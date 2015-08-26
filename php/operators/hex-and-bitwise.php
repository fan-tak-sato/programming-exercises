<?php

$a = 0xf2 + 0x09;
$b = $a >> 3;
echo $b;

// There are three steps here. First, take the hexadecimal numbers and convert them to decimal, which gives you (242 + 9) = 251. Next, write 251 in binary (it's 255 less 4 if you like shortcuts) which is 11111011. Now shift that number to the right three steps, ignoring the digits which get shifted away to the right of the 1 column. This should give you 11111 – which is 31 when you turn it back into decimal.
