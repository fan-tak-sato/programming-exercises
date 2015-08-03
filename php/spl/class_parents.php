<?php

class foo { }
class bar extends foo {}

var_dump(class_parents(new bar));

// since PHP 5.1.0 you may also specify the parameter as a string
var_dump(class_parents('bar'));
