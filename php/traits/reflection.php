<?php

trait Login
{
    function log() 
    {
        echo "Accesso al sistema";
    }
}
 
trait Logout
{
    function log() 
    {
        echo "Uscita dal sistema";
    }
}
 
class User
{
    use Login, Logout {
        Login::log insteadof Logout;
        Logout::log as logLogout;
    }
}

$reflection = new ReflectionClass('User');
if (!$reflection->isTrait()) {
    
	echo $reflection->getTraitNames()[0];
	
    echo $reflection->getTraitAliases()['logLogout'];
	
    foreach ($reflection->getTraits() as $v) {
        echo $v->getMethods()[0]->class . ' ' . $v->getMethods()[0]->name;
    }
}