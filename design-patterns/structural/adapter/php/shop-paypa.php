<?php

class Shop {
	public function __construct() {
		
	}
}

interface shopAdapter {
	public function pay($amount);
}

class PaypalAdapter implements shopAdapter {
	
	private $shop;
	
	public function __construct(Shop $shop) {
		$this->shop = $shop;
	}
	
	public function pay($amount) {
		// paypal process...
		$this->shop->sendPayment($amount);
	}
}

$paypal = new PaypalAdapter(new Shop());
$paypal->pay('2629');
