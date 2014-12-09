Type casting in PHP
==========================

http://php.net/manual/en/language.types.type-juggling.php

Types list
--------------------------

http://php.net/manual/en/language.types.intro.php

PHP supports eight primitive types.

Four scalar types:

- boolean http://php.net/manual/en/language.types.boolean.php
- integer http://php.net/manual/en/language.types.integer.php
- float (floating-point number, aka double http://php.net/manual/en/language.types.float.php)
- string 

Two compound types:

- array http://php.net/manual/en/language.types.array.php
- object http://php.net/manual/en/language.types.object.php

And finally two special types:

- resource http://php.net/manual/en/language.types.resource.php 
- NULL http://php.net/manual/en/language.types.null.php

This manual also introduces some pseudo-types (http://php.net/manual/en/language.pseudo-types.php) for readability reasons:

mixed http://php.net/manual/en/language.pseudo-types.php#language.types.mixed
number http://php.net/manual/en/language.pseudo-types.php#language.types.number
callback http://php.net/manual/en/language.pseudo-types.php#language.types.callback

Allowed types cast
--------------------------

The casts allowed are:
- (int), (integer) - cast to integer
- (bool), (boolean) - cast to boolean
- (float), (double), (real) - cast to float
- (string) - cast to string
- (array) - cast to array
- (object) - cast to object
- (unset) - cast to NULL (PHP 5)

Comparison: http://php.net/manual/en/types.comparisons.php
