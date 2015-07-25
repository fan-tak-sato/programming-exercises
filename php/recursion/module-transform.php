<?php

$argumentA = 1084;
$argumentB = 1029;

function doit($a, $b) {
    if ($b > 0) echo "b: $b , mod: ".$a % $b." <br>";
    return ($b == 0) ? $a : doit($b, $a % $b);
}
echo "Final: ".doit($argumentA, $argumentB)."<br><br><br>";


function doit_notrecursive($a, $b)
{
    while ($b > 0) {
        $modul = $a % $b;
        $b = $modul;
        if ($modul == 0) {
            return $b;
        }
        echo "b: $b , mod: ".$modul." <br>";
        
    }

    return $b;
}

echo doit_notrecursive($argumentA, $argumentB);