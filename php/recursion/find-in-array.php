<?php

/**
 * @param mixed $key
 * @param mixed $arr
 * @return bool
 */
function find_in_arr($key, $arr) {
    foreach ($arr as $k => $v) {
        if ($k == $key) {
            return $v;
        }
        if (is_array($v)) {
            foreach ($v as $_k => $_v) {
            if ($_k == $key) {
                    return $_v;
                }
            }
        }
    }
    return false;
}

$arr = [
    'name' => 'Php Master',
    'subject' => 'Php',
    'type' => 'Articles',
    'items' => [
        'one' => 'Iteration',
        'two' => 'Recursion',
        'methods' => [
            'factorial' => 'Recursion',
            'fibonacci' => 'Recursion',
        ],
    ],
    'parent' => 'Sitepoint',
];
 
var_dump(
    find_in_arr('two', $arr),
    find_in_arr('parent', $arr),
    find_in_arr('fibonacci', $arr)
);