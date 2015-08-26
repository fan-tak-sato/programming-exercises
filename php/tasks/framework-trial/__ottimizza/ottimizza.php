<?php

$a = floor(rand(1,10));

echo '"$A" INIZIALE: '.$a."\n";

($a>0 and $a<=4) ? $a = $a * 10 : $a = $a * 20;

echo '"$A" DOPO CORREZIONE: '.$a."\n";
echo "\n";

$a = 'A1B2C3D4';

echo '"$A\" PRIMA DELLA CORREZIONE: '.$a."\n";

$a = preg_replace('/[0-9]+/', '', $a);

echo '"$A\" DOPO CORREZIONE: '.$a."\n";
echo "\n";

echo "CTEST: ";

$arr = array(1,2,3,4,5);
for ($i=0, $c = count($arr); $i<=$c; $i++) {
	echo "-";
}
echo 'abc';