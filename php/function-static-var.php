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
