<?php

$password = "Itssoeasy";

$hash = password_hash($password, PASSWORD_DEFAULT);

$current_hash = password_get_info($hash);

echo PHP_EOL;

echo $hash . PHP_EOL;