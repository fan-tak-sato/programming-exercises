<?php

require_once("multiplyDivide.class.php");

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
