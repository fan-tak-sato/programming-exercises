<?php

$myvar = 'somevalue';
$x = $_GET['arg'];
eval('$myvar = ' . $x . ';');

// The argument of "eval" will be processed as PHP, so additional commands can be appended. For example, if "arg" is set to "10; system('/bin/echo uh-oh')", additional code is run which executes a program on the server, in this case "/bin/echo".
