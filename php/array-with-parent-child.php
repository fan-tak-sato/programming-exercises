<?php

function buildRecursiveArrayTree(array $arrayInput)
{
	if ( !isset($toReturn) ) {
		$toReturn = array();
	}
	
	foreach($arrayInput as $key => $value) {
		if (isset($value['parent'])) {
			if ($value['parent'] != 0) {
				$arrayInput[$key]['childs'][] = $arrayInput[$value['parent']];

				buildRecursiveArrayTree($value);
			} else 
				$toReturn[] = $value;
		}
	}
	return $arrayInput;
}

function printNodeRecursively(array $arrayInput)
{
	if (!$options) {
		$options = '';
	}
	
	foreach($arrayInput as $node) {
		
	}
}

$arrayInput = array(
	array(
			'id' 	 => 1,
			'name' 	 => 'Food',
			'parent' => 0
		),
	array(
			'id' 	 => 2,
			'name' 	 => 'Pizza',
			'parent' => 1,
	),
	array(
			'id' 	 => 3,
			'name' 	 => 'Margherita',
			'parent' => 2,
	),
	array(
			'id'	 => 4,
			'name' 	 => 'Pasta',
			'parent' => 1,
	),
	array(
			'id'	 => 4,
			'name' 	 => 'Chocolate',
			'parent' => 1,
	),
	array(
			'id'	 => 5,
			'name' 	 => 'Dark',
			'parent' => 4,
	),
	array(
			'id'	 => 6,
			'name' 	 => 'Novi',
			'parent' => 5,
	),
);

// Assign ID key with element ID
$arraySorted = array();
foreach($arrayInput as $arr) {
	$arraySorted[$arr['id']] = $arr;
}

$treeRecursivery = buildRecursiveArrayTree($arraySorted);

echo "<pre>".print_R($treeRecursivery, 1)."</pre>";