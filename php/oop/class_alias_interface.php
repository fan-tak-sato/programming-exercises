<?php

interface foo {}

class_alias('foo', 'bar');

trait myTrait {}

class_alias('myTrait', 'myTraitClone');

echo interface_exists('bar') ? 'yes!' : 'no';
echo "<br>";
echo trait_exists('myTraitClone') ? 'yes!' : 'no';
