<?php

$client = new SoapClient(null, array(
	'location' => "http://localhost/exercises/php/xml/soap/hello_server.php",
	'uri'      => "urn://www.herong.home/req",
	'trace'    => 1,
	"exceptions" => 0
	)
);

echo $client->__getLastRequest();