<?php

// @since 30 June 2014

require_once("iBinaryOperator.interface.php");
require_once("Addition.class.php");
require_once("Subtraction.class.php");
require_once("Multiplication.class.php");
require_once("Division.class.php");

require_once("accumulate.php");

/*** TESTS: no unit tests for this task ***/

echo "<h3>Test Addition</h3>";

// array
echo accumulate(new Addition(), array(3) )."<br>"; // 1 parameter: error

echo accumulate(new Addition(), array(3,6) )."<br>"; // 2 parameters

echo accumulate(new Addition(), array(3,6,9,1,3) )."<br>";

// associative array
echo accumulate(new Addition(), array(1 => 1, 2 => 2, 3 => 3) )."<br>";

// array with invalid argument
echo accumulate(new Addition(), array(1 => 1, 2 => 2, 3 => "aa") );

echo "<h3>Test Subtraction</h3>";

echo accumulate(new Subtraction(), array(3) )."<br>"; // 1 parameter: error

echo accumulate(new Subtraction(), array(3,2) )."<br>"; // 2 parameters

echo accumulate(new Subtraction(), array(33, 3, 1) )."<br>";

// associative array
echo accumulate(new Subtraction(), array(0 => 11, 1 => 2, 2 => 3) )."<br>";

// array with invalid argument
echo accumulate(new Subtraction(), array(1 => 1, 2 => 2, 3 => "aa") );

echo "<h3>Test Multiplication</h3>";

echo accumulate(new Multiplication(), array(3) )."<br>"; // 1 parameter: error

echo accumulate(new Multiplication(), array(3,2) )."<br>"; // 2 parameters

echo accumulate(new Multiplication(), array(3, 3, 1) )."<br>";

// associative array
echo accumulate(new Multiplication(), array(0 => 11, 1 => 2, 2 => 3) )."<br>";

// array with invalid argument
echo accumulate(new Multiplication(), array(1 => 1, 2 => 2, 3 => "aa") );

echo "<h3>Test Division</h3>";

echo accumulate(new Division(), array(3) )."<br>"; // 1 parameter: error

echo accumulate(new Division(), array(33, 11, 0) )."<br>"; // division by zero

echo accumulate(new Division(), array(3,2) )."<br>"; // 2 parameters

echo accumulate(new Division(), array(3, 3, 1) )."<br>";

// associative array
echo accumulate(new Division(), array(0 => 11, 1 => 2, 2 => 3) )."<br>";

// array with invalid argument
echo accumulate(new Division(), array(1 => 1, 2 => 2, 3 => "aa") );
