<?php

class PDOMock extends \PDO {

	public function __construct() {

	}

}

class PDOTest extends \PHPUnit_Framework_TestCase {
	private $pdo;

	public function setup() {
		$this->pdo = $this->getMockBuilder('PDOMock')->getMock();
	}

	public function testTry()
	{
		$this->assertEquals(1,1);
	}
}

