<?php

// session_regenerate_id() is good to use 

session_start();

if (!array_key_exists('counter', $_SESSION)) {
	$_SESSION['counter'] = 0;
} else {
	$_SESSION['counter']++;
}

session_regenerate_id();

echo $_SESSION['counter'];

