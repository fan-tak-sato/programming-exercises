<?php

namespace MyFramework\String;

function strlen($str)
{
return \strlen($str)*2;
}

print strlen("Hello world!");

// Using namespaces it' is possible to redeclare a PHP function (bad practice).
