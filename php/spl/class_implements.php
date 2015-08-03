<?php

interface foo { }

class bar implements foo {}

var_dump( class_implements(new bar) );

// since PHP 5.1.0 you may also specify the parameter as a string
var_dump( class_implements('bar') );

