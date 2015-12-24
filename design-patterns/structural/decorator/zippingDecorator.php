<?php

class Stream {
	public function getInfo() {

	}
}
 
abstract class StreamDecorator
{
	protected $stream;

	/**
	 * @param Stream $stream
	 */
	public function __construct(Stream $stream) {
		$this->stream = $stream;
	}

	abstract public function getInfo();
}

class ZippingDecorator extends StreamDecorator
{
	public function getInfo() {
		// whatever stream parse...
		$this->stream->getInfo(); // and call parent
	}
}

$stream = new ZippingDecorator( 
	new EncryptingDecorator( 
		new LineBreakFixingDecorator (new Stream())
	)
);

