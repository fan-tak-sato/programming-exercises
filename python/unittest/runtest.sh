#!/bin/sh
echo '========= Python 2 tests =========='
for file in Test*.py
do
    /usr/bin/python2  $file
done

echo '========= Python 3 tests =========='
for file in Test*.py
do
    /usr/bin/python3 $file
done
