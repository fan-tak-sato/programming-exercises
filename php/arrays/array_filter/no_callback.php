<?php
/**
 * Calling array_filter without a callback function:
 *  if no callback is supplied, all entries of array equal to FALSE (see converting to boolean) will be removed.
 */
$myArray = array(
        0,
        NULL,
        '',
        '0',
        -1
    );

echo count( array_filter($myArray) );
