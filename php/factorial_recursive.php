<?php
// Formula: n! = n*(n-1)*(n-2)*(n-3)...3.2.1 and zero factorial is defined as one i.e. 0! = 1.
function factorial($n)
{
    if ($n == 0)
        return 1;
    else
        return($n * factorial($n - 1));
}

echo factorial(5);