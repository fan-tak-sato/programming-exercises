<?php

$objDOM = new DOMDocument();
$objDOM->load("tasks.xml"); 
$note = $objDOM->getElementsByTagName("note");

foreach( $note as $value ) {
	$tasks = $value->getElementsByTagName("tasks");
	$task  = $tasks->item(0)->nodeValue;
	$details = $value->getElementsByTagName("details");
	$detail  = $details->item(0)->nodeValue;
	echo "$task :: $detail <br>";
}
