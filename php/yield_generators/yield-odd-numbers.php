<?php

/**
 * A generator permits you to iterate over a set of data by using a foreach loop without building an array in memory. 
 * It reduces memory usage and processing time, if it does not create an array.
 * 
 * Let us take an example of the range() function that generates a sequence between one and one million by calling the method range(0,1000000) within a foreach loop will create an array of more than 100MB in size. Instead of this, if you create a sequence by using the generator function, then it will not consume space of more than 1KB.
 */

function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "$value\n";
}
