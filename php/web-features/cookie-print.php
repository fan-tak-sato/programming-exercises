<?php
session_start(); // initialize session
session_destroy(); // destroy session
setcookie("PHPSESSID", "", time()-3600, "/"); // delete PHPSESSID from cookie value

$_SESSION['test'] = 21;
setcookie('theme', 'green', strtotime('+30 days'));

print_r($_COOKIE);
// setcookie('theme', NULL, time() - 3600);
print_r($_COOKIE);
// unset($_COOKIE);
// print_r($_COOKIE);

// Resource: http://www.zendexam.com/question/486/with-a-single-existing-cookie-set-for-this-domain-with-the-key--theme--and-the-value--green--what-does-the-following-code-output/
