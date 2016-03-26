<?php

// http://php.net/manual/en/function.assert.php#function.assert.expectations Expectations are a backwards compatible enhancement to the older assert() function. They allow for zero-cost assertions in production code, and provide the ability to throw custom exceptions when the assertion fails.

// http://php.net/manual/en/function.assert.phpWhile the old API continues to be maintained for compatibility, assert(http://php.net/manual/en/function.assert.php) is now a language construct, allowing the first parameter to be an expression rather than just a string to be evaluated or a boolean value to be tested.

ini_set('assert.exception', 1);

class CustomError extends AssertionError {

}

assert(false, new CustomError('Some error message')); // Fatal error: Uncaught CustomError ...
