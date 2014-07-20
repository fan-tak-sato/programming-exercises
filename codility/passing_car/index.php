<?php

function getPass($A, $N)
{
    $count = 0;
    $incrementVal = 0;
    
    for($i = 0; i < $N; $i++)
    {
        if($A[$i] == 0)
        {
            $incrementVal++;
        }
        else if ($A[$i] == 1)
        {
            $count = $count + $incrementVal;
        }
        if($count > 1000000000)
        {
            return -1;
        }
    }
    return $count;
}

$A[]= array(0,1,0,1,1);

$numPasses = getPass(A,5);

echo "Number of Passes: ".$numPasses;
