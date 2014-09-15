What's new in PHP 5.5?
=========================

Generators
-------------------------
New keywords: yield (see code sample on yield-odd-numbers.php)
yield can be used in a function for both inputting and outputting data
A generator provides a simple mechanism to iterate through data without any need of writing a class implementing the Iterator interface.

Finally keyword
-------------------------

Finally keyword added to try... catch block for exception handling
Allow to run a block of code regardless whether an exception is thrown or not

Password hashing API
-------------------------
password_hash()
password_verify()
password_needs_rehash
password_get_info()

Other news
-------------------------

Array and string literal dereferencing
Easier class name resolution
empty() supports arbitrary expressions
OPcache extension
Support for the list() construct by a foreach loop
Support for non-scalar keys by a foreach loop
Improved GD extension

Deprecated features in PHP 5.5
----------------------------------
ext/mysql: In this version, the original MySQL extension got deprecated, and will generate E_DEPRECATED errors while you try to connect to a database. Instead of that, you should use MySQLi or PDO_MySQL extensions.
preg_replace()/e modifier: In this version, the preg_replace() /e modifier is deprecated and instead of this, preg_replace_callback() function can be used.

intl: Now, IntlDateFormatter::setTimeZoneID() and datefmt_set_timezone_id() got deprecated and you can use IntlDateFormatter::setTimeZone() and datefmt_set_timezone() functions.
mcrypt: There is also a mcrypt deprecations. The following functions got deprecated in this version of PHP:

    mcrypt_cbc()
    mcrypt_cfb()
    mcrypt_ecb()
    mcrypt_ofb()

curlwrappers: In this version, this feature has been removed.

Advanced changes and migration
--------------------------------

http://us1.php.net/migration55.new-features

Running code samples
--------------------------

To run the code samples on this directory, you need PHP 5.5 on your host.