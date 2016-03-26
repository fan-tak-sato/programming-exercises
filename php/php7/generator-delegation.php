<?php

// Generators can now delegate to another generator, Traversable object or array automatically, without needing to write boilerplate in the outermost generator by using the yield from construct.

// http://php.net/manual/en/class.traversable.php
// http://php.net/manual/en/language.generators.syntax.php#control-structures.yield.from


function gen()
{
    yield 1;
    yield 2;
    yield from gen2();
}

function gen2()
{
    yield 3;
    yield 4;
}

foreach (gen() as $val)
{
    echo $val, PHP_EOL;
}

