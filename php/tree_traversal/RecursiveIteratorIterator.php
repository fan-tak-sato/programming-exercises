<?php

$array = array(
    array(
        'category_id' => 1,
        'children' => array(
            'category_id' => 2,
            'children' => array(
                'category_id' => 3,
            )
        )
    ),
    array(
        'category_id' => 4,
        'children' => array(
            'category_id' => 5,
            'children' => array(
                'category_id' => 6,
            )
        )
    )
);

$iterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator($array)
);

for($iterator; $iterator->valid(); $iterator->next())
{
	$iteratorDepth = $iterator->getDepth();
	$current = $iterator->current();
    printf(
        "Key: %s Value: %s Depth: %s <br>",
        $iterator->key(),
		is_array($current) ? print_r($current,1) : $current,
        $iteratorDepth
    );
}
