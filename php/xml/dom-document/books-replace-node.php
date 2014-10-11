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

$id     = $xml->createElement("id");
$idText = $xml->createTextNode("3");
$id->appendChild($idText);

$title     = $xml->createElement("title");
$titleText = $xml->createTextNode("PHP Framework");
$title->appendChild($titleText);

$author     = $xml->createElement("author");
$authorText = $xml->createTextNode("Reza Christian");
$author->appendChild($authorText);

$book   = $xml->createElement("book");
$book->appendChild($id);
$book->appendChild($title);
$book->appendChild($author);

$fnode->replaceChild($book,$ori);

echo "<xmp>NEW:\n". $xml->saveXML() ."</xmp>";
?>