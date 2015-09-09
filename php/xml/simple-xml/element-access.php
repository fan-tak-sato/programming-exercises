<?php

// Access a single element of an XML document. NOTE: the document root will not appear on the node tree

$xmlstring = <<<XML
<?xml version='1.0'?>
<document>
<bar>
<foo>Value</foo>
</bar>
</document>
XML;

$xml = simplexml_load_string($xmlstring);

echo $xml->bar->foo;

echo "<br><br>";

$xmlstring = <<<XML
<?xml version='1.0'?>
<foo>
<bar>
<baz id="1">One</baz>
<baz id="2">Two</baz>
</bar>
</foo>
XML;

$xml = simplexml_load_string($xmlstring);

echo $xml->bar->baz[1]['id'];

