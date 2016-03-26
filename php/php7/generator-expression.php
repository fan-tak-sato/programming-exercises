<?php

// This feature builds upon the generator functionality introduced into PHP 5.5. It enables for a return statement to be used within a generator to enable for a final expression to be returned (return by reference is not allowed). This value can be fetched using the new Generator::getReturn() method, which may only be used once the generator has finishing yielding values

// Being able to explicitly return a final value from a generator is a handy ability to have. This is because it enables for a final value to be returned by a generator (from perhaps some form of coroutine computation) that can be specifically handled by the client code executing the generator. This is far simpler than forcing the client code to firstly check whether the final value has been yielded, and then if so, to handle that value specifically.

$gen = (function() {
    yield 1;
    yield 2;

    return 3;
})();

foreach ($gen as $val) {
    echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;
