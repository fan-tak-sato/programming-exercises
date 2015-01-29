<?php

/**
 * Detect a leap year
 * 
 * @author Andrea Fiori
 * @since  29 January 2015
 */
class LeapYears
{
	/**
	 * Detect if it's leap year
	 *
	 * @param int $year
	 *
	 * @return bool
	 */
	public function isLeap($year)
	{
		if (!is_int($year)) {
			throw new InvalidArgumentException($year.' is not an integer number');
		}

		return $this->isAtypicalLeapYear($year) and !$this->isAtypicalCommonYear($year);
	}

	/**
	 * Detect if it's atypical common year
	 *
	 * @param int $year
	 *
	 * @return bool
	 */
	private function isAtypicalCommonYear($year)
	{
		return $year % 100 == 0 and !($year % 400 == 0);
	}

	/**
	 * Detect if it's an atypical leap year
	 *
	 * @param $year
	 *
	 * @return bool
	 */
	private function isAtypicalLeapYear($year)
	{
		return $year % 4 == 0;
	}
}

/**
 * Class LeapYearsTest
 *
 * @author Andrea Fiori
 * @since  29 January 2015
 */
class LeapYearsTest extends PHPUnit_Framework_TestCase
{
	private $leapYears;

	public function setUp()
	{
		$this->leapYears = new LeapYears();
	}

	public function testNormalLeapYear()
	{
		$this->assertTrue( $this->leapYears->isLeap(1996) );
	}
	
	public function testNormalCommonYear()
	{
		$this->assertFalse( $this->leapYears->isLeap(2001) );
	}
	
	public function testAtypicalCommonYear()
	{
		$this->assertFalse( $this->leapYears->isLeap(1900) );
	}
	
	public function testAtypicalLeapYear()
	{
		$this->assertTrue( $this->leapYears->isLeap(2000) );
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testInvalidYear()
	{
		$this->leapYears->isLeap('A string');
	}
}
