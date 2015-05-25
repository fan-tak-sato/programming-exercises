<?php

class Usorter {
	
	private $inventory;
	
	public function __construct()
	{
		$this->inventory = array(
			array("type" => "fruit", "price" => 1.50),
			array("type" => "milk",  "price" => 2.90),
			array("type" => "pork",  "price" => 5.43),
		);
	}
	
	public function sortByPrice()
	{
		usort($this->inventory, array($this, "sortByPriceCallBack"));
	}
	
	public function getInventory()
	{
		return $this->inventory;
	}
	
	private function sortByPriceCallBack($a, $b)
	{
		return (float) $a['price'] < (float)$b['price'];
	}
}

$usorter = new Usorter();
$usorter->sortByPrice();

echo "<pre>".print_r($usorter->getInventory(), 1)."</pre>";
