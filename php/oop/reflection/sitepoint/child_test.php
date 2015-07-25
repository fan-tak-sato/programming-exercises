<?php

include("introspection.php");
include("child.php");

if (class_exists("Introspection")) {
    $introspection = new Introspection();

    echo "The class name is: " . get_class($introspection) . "n";

    $introspection->description();
}
 
if (class_exists("Child")) {
    $child = new Child();
    $child->description();
 
    if (is_subclass_of($child, "Introspection")) {
        echo "Yes, " . get_class($child) . " is a subclass of Introspection.n";
    } else {
        echo "No, " . get_class($child) . " is not a subclass of Introspection.n";
    }
}
