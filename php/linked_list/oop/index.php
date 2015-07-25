<?php
require_once("linklist.class.php");

$key = 'MyListKey';
$value = 'MyListValue';

$obj = new LinkList();
$obj->insertFirst($value);
	var_dump( $obj->readList() );
$obj->deleteNode($value);
