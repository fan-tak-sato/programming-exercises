<?php

// Config  
$dbhost = 'localhost';  
$dbname = 'test';  
  
// Connect to test database  
$m = new Mongo("mongodb://$dbhost");  
$db = $m->$dbname;  
  
// Select the collection  
$collection = $db->shows;  
  
// Pull a cursor query  
$cursor = $collection->find();

foreach($cursor as $document)
{
	var_dump($document);
}
