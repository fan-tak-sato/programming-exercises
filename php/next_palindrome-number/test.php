<?php

require_once("function.php");

/**
 * @author Andrea Fiori
 * @since  09 October 2014
 */
class NextPalindromeTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }
	
	public function testNextPalindrome()
	{
		$this->assertEquals(nextPalindrome(111), 121);
	}
	
	/**
	 * @expectedException Exception
	 */
	public function testNextPalindromeThrowsExceptionNotNumer()
	{
		nextPalindrome('thisIsNotANumber');
	}
	
	/**
	 * @expectedException Exception
	 */
	public function testNextPalindromeThrowsExceptionNumerTooBig()
	{
		nextPalindrome(1000000003);
	}
}