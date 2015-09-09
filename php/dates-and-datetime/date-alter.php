<?php

$date = new DateTime('2014-03-15');

var_dump( $date->sub( new DateInterval('P1M')) );
var_dump( $date->setDate(2014, 2, 15) );
var_dump( $date->modify('-1 month') );
//$date->diff(new DateInterval('-P1M'));
