<?php

$xml = '<root>
        <parent name="Peter">
            <child age="20">James</child>
            <child age="5">Leila</child>
        </parent>
        <parent>
            <child age="10">Dido</child>
            <child age="11">George</child>
        </parent>
        </root>';

$xmlElement = new SimpleXMLElement($xml);
$teens = $xmlElement->xpath('*/child[@age>9]');
echo $teens[1];