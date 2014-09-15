<?php
require 'password_file.php';
$passHash = password_hash('secret_pass', PASSWORD_DEFAULT);
if (password_verify('bad-password', $passHash))
{
    //Right Password
}
else
{
    //Wrong password
}