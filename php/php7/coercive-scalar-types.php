<?php

// Type hinting will be possible for int, float and strings

function logmsg(string $msg, int $level, float $severity) {
    var_dump($msg);      // string(1) "1"
    var_dump($level);    // int(2)
    var_dump($severity); // float(3)
}
logmsg(1, "2.5", 3);
