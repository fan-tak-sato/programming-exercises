<?php
if(!extension_loaded("soap")){
	dl("php_soap.dll");
}

ini_set("soap.wsdl_cache_enabled","0");
$server = new SoapServer("books.wsdl");

function doMyBookSearch($bookTitle){

  $arr[] = array(
           "bookTitle" => "MyBook",
		   "bookYear"  => 2005,
		   "bookAuthor"=> "oke"
		);
		
  $arr[] = array(
           "bookTitle" => "YourBook",
		   "bookYear"  => 2005,
		   "bookAuthor"=> "oke"
        );

  return $arr;
}

$server->AddFunction("doMyBookSearch");
$server->handle();
