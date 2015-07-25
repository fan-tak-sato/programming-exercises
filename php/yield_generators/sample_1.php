<?php

function xrange($start, $end) {
    for ($i = $start; $i <= $end; $i ++) {
        yield $i;
    }
}

foreach (xrange(0, 24) as $number) {
    echo $number.PHP_EOL;
}

