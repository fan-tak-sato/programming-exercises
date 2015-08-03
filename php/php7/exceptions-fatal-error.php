<?php
function call_method($obj) {
    $obj->method();
}

try {
    call_method(null);
} catch (EngineException $e) {
    echo "Exception: {$e->getMessage()}\n";
}

// Exception: Call to a member function method() on a non-object
