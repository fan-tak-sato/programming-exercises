<?php

/**
 * Detect if it's leap year
 *
 * @param int $year
 *
 * @return bool
 */
function isLeap($year)
{
	return isAtypicalLeapYear($year) and !isAtypicalCommonYear($year);
}

/**
 * Detect if it's atypical common year
 *
 * @param int $year
 *
 * @return bool
 */
function isAtypicalCommonYear($year)
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
function isAtypicalLeapYear($year)
{
	return $year % 4 == 0;
}


/**
 * Class LeapYearsTest
 *
 * @author Andrea Fiori
 * @since  29 January 2015
 */
class LeapYearsTest extends PHPUnit_Framework_TestCase
{
	public function testNormalLeapYear()
	{
		$this->assertTrue( isLeap(1996) );
	}
	
	public function testNormalCommonYear()
	{
		$this->assertFalse( isLeap(2001) );
	}
	
	public function testAtypicalCommonYear()
	{
		$this->assertFalse( isLeap(1900) );
	}
	
	public function testAtypicalLeapYear()
	{
		$this->assertTrue( isLeap(2000) );
	}
}
