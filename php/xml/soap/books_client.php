<?php
if(!extension_loaded("soap")){
	dl("php_soap.dll");
}

ini_set("soap.wsdl_cache_enabled", "0");

$client = new SoapClient("http://localhost/exercises/php/xml/soap/books.wsdl");
$search = $client->doMyBookSearch("test");

print_r($search);