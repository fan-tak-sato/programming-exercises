<?php

/**
 * Let's multiply or divide 2 numbers without using * or /
 * 
 * @author Andrea Fiori
 * @since  21 November 2012
 */
class multiplyDivide
{
	public function multiply($first, $second)
	{
		if (!is_numeric($first) or !is_numeric($second)) return false;
		
		$result = 0;
		for($i=0; $i < $second; $i++) {
			$result = $result + $first;
		}
		return $result;
	}
	
	public function divide($first, $second)
	{
		if (!is_numeric($first) or !is_numeric($second) 
			or $second > $first or $second <= 0) return false;
		
		$counter = 0;
		while($first > 0)
		{
			$first = $first - $second;
			$counter++;
		}
		return $counter;
	}
}

/**
 * @author Andrea Fiori
 * @since  21 November 2012
 */
class multiplyDivideTest extends PHPUnit_Framework_TestCase 
{	
	private $multiplyDivide;
	
	public function setUp()
	{
		$this->multiplyDivide = new multiplyDivide();
	}
	
	public function testMultiply()
	{
		$this->assertEquals(12, $this->multiplyDivide->multiply(3, 4));
		$this->assertEquals(0, $this->multiplyDivide->multiply(3, 0));
	}
	
	public function testDivide()
	{
		$this->assertFalse( $this->multiplyDivide->divide(16, 0) );
		$this->assertFalse( $this->multiplyDivide->divide("string", 0) );
		$this->assertFalse( $this->multiplyDivide->divide(0, 4) );
		$this->assertEquals(5, $this->multiplyDivide->divide(15, 3));
	}	
}
