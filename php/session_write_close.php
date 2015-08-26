<?php

session_start();
$_SESSION['n1'] = 'this is n1';

session_write_close();

$_SESSION['notWritten'] = 'not written';

ini_set('session.use_only_cookies', false);
ini_set('session.use_cookies', false);
ini_set('session.use_trans_sid', false);
ini_set('session.cache_limiter', null);

session_start();

$_SESSION['Written'] = 'on the second session start!';

print_r($_SESSION);

