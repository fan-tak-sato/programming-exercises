<?php

function getPasswordHash($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

$current_hash = getPasswordHash('myPassword');
if ( password_needs_rehash($current_hash, PASSWORD_BCRYPT) )
{ 
    $new_hash = getPasswordHash('myNewPassword');    
}
