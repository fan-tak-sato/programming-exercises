<?php

/**
 * @param $a
 * @param $b
 * @return int
 */
function cmp_php5($a, $b) {
    return ($a < $b) ? -1 : (($a >$b) ? 1 : 0);
}

/**
 * @param $a
 * @param $b
 * @return bool
 */
function cmp_php7($a, $b) {
    return $a <=> $b;
}
