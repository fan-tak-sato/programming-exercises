<?php
$subs = array(
	'at'  => '@',
	'com' => 'net'
);

$email = 'comnet@example.com';

echo strtr($email, $subs);

