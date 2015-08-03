Print functions in PHP
=============================

Print and Echo
-----------------------------

- [echo](http://php.net/manual/en/function.echo.php)
- [print](http://php.net/manual/en/function.print.php)

Differences:
- You can use print() as part of an expression while you cannot use echo: print returns always 1.
- Echo can take multiple parameters where as print cannot

Printf and Sprintf
----------------------------

- [printf](http://php.net/manual/en/function.printf.php)
- [sprintf](http://php.net/manual/en/function.sprintf.php)

Differences:
- Sprintf Return a formatted string
- Printf output a formatted string and return the length of the outputted string

Scanf and sscanf
----------------------------

- [scanf](http://php.net/manual/en/function.scanf.php)
- [sscanf](http://php.net/manual/en/function.sscanf.php)


Vfprintf, vprintf, vsprintf
----------------------------

- [vfprintf](http://php.net/manual/en/function.vfprintf.php) - write a formatted string to a stream. Returns the length of the outputted string.
- [vprintf](http://php.net/manual/en/function.vprintf.php) - Output a formatted string. Returns the length of the outputted string.
- [vsprintf](http://php.net/manual/en/function.vsprintf.php) - Format a string. Return array values as a formatted string according to format.

