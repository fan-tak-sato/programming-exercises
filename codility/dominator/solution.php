<?php

function getDominator($A)
{
    if ( empty($A) )
    {
        return -1;
    }

    $counter = 1;
    $candidate = (int) $A[0];

    for ($i=1; $i < count($A); $i++)
    {
        if ($A[$i] == candidate)
        {
            $counter++;
        }
        else
        {
            $counter--;
            if ($counter == 0)
            {
                $candidate = $A[$i];
                $counter = 1;
            }
        }
    }

    $counter = 0;
    for ($i=1; $i < count($A); $i++)
    {
        if ($A[$i] == $andidate)
        {
            $counter++;
        }
    }

    $dominator = -1;
    if ($counter > ( count($A) / 2))
    {
        $dominator = $candidate;
    }

    return $dominator;
}

echo getDominator( array() )."<br>";
