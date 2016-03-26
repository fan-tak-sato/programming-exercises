PHP 7
======================

New features
----------------------

- We can specify what kind of data type the function will return
- Type hinting on functions will be possible for int, string and float
- Removed PHP4 deprecated features
- New reserved words:
    - bool
    - int
    - float
    - string
    - null
    - false
    - true
    - resource
    - object
    - mixed
    - numeric
- 64-bit integer support on Windows
- Cleanup edge-case integer overflow/underflow
- Support for strings with length >= 2^31 bytes in 64 bit builds.
- Parse error on invalid numeric literals: $mask = 0855;  // Parse error: Invalid numeric literal
- Unicode Codepoint Escape Syntax
- ICU IntlChar class added to intl extension

Resources
----------------------

- [PHP 7 new features](http://php.net/manual/en/migration70.new-features.php)
- [Slide](http://talks.php.net/fluent15#/php7sth)
