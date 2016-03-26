<?php

// http://php.net/manual/en/class.intlchar.php The new IntlChar class seeks to expose additional ICU functionality. The class itself defines a number of static methods and constants that can be used to manipulate unicode characters. In order to use this class, the Intl extension must be installed.

printf('%x', IntlChar::CODEPOINT_MAX);

echo IntlChar::charName('@');

var_dump(IntlChar::ispunct('!'));

