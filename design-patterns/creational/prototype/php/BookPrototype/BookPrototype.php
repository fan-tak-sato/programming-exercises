<?php

abstract class BookPrototype {

	protected $title;
	protected $topic;

	abstract function __clone();

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($titleIn) {
		$this->title = $titleIn;
	}

	public function getTopic() {
		return $this->topic;
	}
}
