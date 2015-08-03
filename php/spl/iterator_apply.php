<?php

/**
 * iterator_apply - call a function for every element in an iterator
 */
function print_caps(Iterator $iterator) {

    echo strtoupper($iterator->current()) . "\n";

    return TRUE;
}

$it = new ArrayIterator(array("Apples", "Bananas", "Cherries"));

iterator_apply($it, "print_caps", array($it));

