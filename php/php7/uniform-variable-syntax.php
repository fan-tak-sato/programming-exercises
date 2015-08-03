<?php

// left-to-right
$this->$belongs_to['column']
// vs.
$this->{$belongs_to['column']}

// support missing combinations of operations
$foo()['bar']()
[$obj1, $obj2][0]->prop
getStr(){0}
 
// support nested ::
$foo['bar']::$baz
$foo::$bar::$baz
$foo->bar()::baz()
 
// support nested ()
foo()()
$foo->bar()()
Foo::bar()()
$foo()()
 
// support operations on arbitrary (...) expressions
(...)['foo']
(...)->foo
(...)->foo()
(...)::$foo
(...)::foo()
(...)()
 
// two more practical examples for the last point
(function() { ... })()
($obj->closure)()
 
// support all operations on dereferencable scalars
// (not very useful)
"string"->toLower()
[$obj, 'method']()
'Foo'::$bar

