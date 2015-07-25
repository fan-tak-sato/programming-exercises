<?php

$client = new SoapClient(null, array(
	'location' => "http://localhost/exercises/php/xml/soap/hello_server.php",
	'uri'      => "urn://www.herong.home/req",
	'trace'    => 1
	)
);

$return = $client->__soapCall("hello",array("world"));

echo("\nReturning value of __soapCall() call: ".$return);

echo("\nDumping request headers: <br><br>".$client->__getLastRequestHeaders());

echo("\nDumping request: <br><br>".$client->__getLastRequest());

echo("\nDumping response headers: <br><br>".$client->__getLastResponseHeaders());

echo("\nDumping response: <br><br>".$client->__getLastResponse());
