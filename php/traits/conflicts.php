<?php

trait Login
{
    function log() 
    {
        echo "Login";
    }
}
 
trait Logout
{
    function log() 
    {
        echo "Logout";
    }
}
 
class User
{
    use Login, Logout {
        Login::log insteadof Logout;
        Logout::log as logLogout;
    }
}

$u = new User();
$u->log();	echo "<br>";
$u->logLogout();