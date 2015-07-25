<?php

// Multiple array_key_exists
// http://stackoverflow.com/questions/13169588/how-to-check-if-multiple-array-keys-exists

$required = array('key1', 'key2', 'key3');

$data = array(
    'key1' => 10,
    'key2' => 20,
    'key3' => 30,
    'key4' => 40
);

if (count(array_intersect_key(array_flip($required), $data)) === count($required)) {
    echo "All required keys exist!";
}
