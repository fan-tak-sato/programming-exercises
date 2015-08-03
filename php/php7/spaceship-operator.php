<?php
function cmp_php5($a, $b) {
    return ($a < $b) ? -1 : (($a >$b) ? 1 : 0);
}

function cmp_php7($a, $b) {
    return $a <=> $b;
}
