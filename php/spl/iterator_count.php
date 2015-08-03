<?php

/**
 * iterator_count — Count the elements in an iterator
 */

$iterator = new ArrayIterator(array('recipe'=>'pancakes', 'egg', 'milk', 'flour'));

var_dump( iterator_count($iterator) );

