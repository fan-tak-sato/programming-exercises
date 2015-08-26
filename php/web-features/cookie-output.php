<?php
session_start(); // initialize session
session_destroy(); // destroy session
setcookie("PHPSESSID", "", time()-3600, "/"); // delete PHPSESSID from cookie value

$_SESSION['test'] = 21;
setcookie('aaa', '13', strtotime('+30 days'));
var_dump($_SESSION);
var_dump($_COOKIE);
