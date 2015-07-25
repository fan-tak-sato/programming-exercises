<?php

$xmlString = <<< END
<?xml version="1.0"?>
<data xmlns:home="http://www.mysite.com/xmlns/home" xmlns:pdf="http://www.mysite.com/xmlns/work">
    <home:file>content1.doc</home:file>
    <pdf:file>content2.pdf</pdf:file>
    <pdf:file>content3.pdf</pdf:file>  
    <home:file>content4.txt</home:file>
    <home:file>content5.rtf</home:file>
    <pdf:file>content6.pdf</pdf:file>        
</data>
END;

$xml  = simplexml_load_string($xmlString);

foreach($xml->children("http://www.mysite.com/xmlns/work") as $file) {
    echo $file ." <br />";
}
