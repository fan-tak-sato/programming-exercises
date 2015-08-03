<?php

$x = 1;

function print_conditional() {
   static $x;

   if($x++ == 1)
      echo "many";
   echo "good";
   echo "things";
   return $x;
}

print_conditional();
$x++;
print_conditional();

// Output: goodthingsmanygoodthings

// NOTE: The $x outside the function has no link with $x inside the function. $x inside the function is a static variable so it retains its value between function calls. The first time we call print_conditional(), $x is static but undefined. The $x++ post increment operator returns the old value, then increments the variable, so on the first pass, the if() returns false and then $x is 1.

