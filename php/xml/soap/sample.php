<?php
$client = new SoapClient('http://footballpool.dataaccess.eu/data/info.wso?WSDL');
print_r($client->AllGoalKeepers(array('sCountryName' => 'Portugal')));
