<?php

// Sorting a multidimensional array with sub arrays using usort

$arrayToSort = array(
	array(
		'id' => 1,
		'prices' => array(
			'amount' => 210
		)
	),
	array(
		'id' => 2,
		'prices' => array(
			'amount' => 220
		)
	),
	array(
		'id' => 3,
		'prices' => array(
			'amount' => 110
		)
	),
);

usort($arrayToSort, function($a, $b) {
	if ($a['prices']['amount'] == $b['prices']['amount']) {
        	return 0;
    	}

	return ($a['prices']['amount'] < $b['prices']['amount']) ? -1 : 1;
});

echo "<pre>".print_r($arrayToSort, 1)."</pre>";

