<?php

include("introspection.php");
include("child.php");
include("GBPCurrencyConverter.php");


$child = new ReflectionClass("Child");

$parent = $child->getParentClass();

echo $child->getName() . " is a subclass of " . $parent->getName() . ".n";
 
$reflection = new ReflectionClass("GBPCurrencyConverter");

$interfaceNames = $reflection->getInterfaceNames();

if (in_array("ICurrencyConverter", $interfaceNames)) {
    echo "GBPCurrencyConverter implements ICurrencyConverter.n";
}
 
$methods = $reflection->getMethods();

echo "The following methods are available:n";

print_r($methods);
 
if ($reflection->hasMethod("convert")) {
    echo "The method convert() exists for GBPCurrencyConverter.n";
}
