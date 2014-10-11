<?php

$xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");

function processXML($node) {
    foreach($node->children() as $books => $data) {
        if(trim($data) != "") {
            echo $books.": ".$data;
            echo "<br />";
        }
	processXML($data);
    }
}
processXML($xml);