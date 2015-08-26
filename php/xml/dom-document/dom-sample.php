<?php
$doc = new DOMDocument();
$doc->loadXML('<root />');
$el = $doc->createElement('test', 'some value');
// $doc->appendChild($el); 
echo $doc->saveXML();

/*
 * Output: 

<?xml version="1.0"?>
<root/>

 */
