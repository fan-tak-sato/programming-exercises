<?php

$inventory = array(
	array("type"=>"fruit", "price"=>3.50),
	array("type"=>"milk", "price"=>2.90),
	array("type"=>"pork", "price"=>5.43),
);

function pricesort($a, $b) {
	$a = $a['price'];
	$b = $b['price'];
  
	if ($a == $b) {
		return 0;
	}

	return ($a > $b) ? -1 : 1;
}

usort($inventory, "pricesort");
// uksort($inventory, "pricesort");

print("first: ".$inventory[0]['type']."<br><br>");

foreach($inventory as $i){
	print($i['type'].": ".$i['price']."<br>");
}