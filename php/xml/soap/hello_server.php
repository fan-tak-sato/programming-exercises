<?php

function hello($someone) { 
	return "Hello " . $someone . "!";
}

$server = new SoapServer(null, array('uri' => "urn://www.website.com/res"));
$server->addFunction("hello");
$server->handle();
