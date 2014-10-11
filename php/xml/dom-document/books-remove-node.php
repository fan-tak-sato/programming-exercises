<?php
$file = "books.xml";
$fp = fopen($file, "rb") or die("cannot open file");
$str = fread($fp, filesize($file));


	   
$xml = new DOMDocument();
$xml->formatOutput = true;
$xml->preserveWhiteSpace = false;
$xml->loadXML($str) or die("Error");

// original
echo "<xmp>OLD:\n". $xml->saveXML() ."</xmp>";

// get document element
$root   = $xml->documentElement;
$fnode  = $root->firstChild;

//get a node
$ori    = $fnode->childNodes->item(1);

// remove
$fnode->removeChild($ori);

echo "<xmp>NEW:\n". $xml->saveXML() ."</xmp>";
