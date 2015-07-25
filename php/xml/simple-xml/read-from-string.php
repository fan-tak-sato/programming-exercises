<?php
$xmlData =<<< END
<?xml version="1.0"?>
<datas>
  <books> 
    <book>
      <id>1</id>
      <title>PHP Undercover</title>     
      <author>Wiwit Siswoutomo</author>
    </book>
  </books>
</datas>
END;

$xml = simplexml_load_string($xmlData) or die("Error: Can not create XML object");
