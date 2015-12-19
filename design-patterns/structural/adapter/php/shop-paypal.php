<?php

interface shopAdapter {
	/**
	 * @param int $amount
	 * @return mixed
	 */
	public function pay($amount);
}

class PaypalAdapter implements shopAdapter {
	
    private $shop;

	/**
	 * @param Shop $shop
	 */
	public function __construct(Shop $shop) {
		$this->shop = $shop;
	}

	/**
	 * @param $amount
	 */
	public function pay($amount) {
		$this->shop->sendPayment($amount);
	}
}

class Shop {

	/**
	 * @param $amount
	 */
	public function sendPayment($amount) {
        echo "Sending payment...";
	}
}

$paypal = new PaypalAdapter(new Shop());
$paypal->pay('2629');