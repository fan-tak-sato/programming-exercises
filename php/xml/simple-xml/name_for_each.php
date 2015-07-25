<?php

$xmlstring = <<<XML
<?xml version="1.0" encoding="ISO-8859-1"?> 
<email> 
<to>jenny@ucertify.com</to> 
<from>john@ucertify.com</from>
<heading>Technical issue in Linux OS</heading>
<body>There is a technical issue in my Linux system. Please Fix it. </body>
</email>
XML;

$xml = new SimpleXMLElement($xmlstring);
foreach($xml->children() as $child) {
	echo $child->getName() . ": " . $child . "<br />";
}
