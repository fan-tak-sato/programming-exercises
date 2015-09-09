<?php

$foo = array(true, '0' => false, false => true);

var_dump($foo);

// The 0 key will have true as a value: the last element with false will overwrite even the 0 => false element!
