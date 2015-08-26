<?php

/* remove elements by value */
$arr = array('nice_item', 'remove_me', 'another_liked_item', 'remove_me_also');

$arr = array_diff($arr, array('remove_me', 'remove_me_also'));

echo "<pre>".print_r($arr,1)."</pre>";
