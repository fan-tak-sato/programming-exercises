<?php
$pattern = '/[a-z]{4} /';
$string = 'Mary had a little lamb';
$matches = preg_match($pattern, $string);
print_r($matches);

