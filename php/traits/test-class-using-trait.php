<?php

trait ValidationTrait
{
    /**
     * @param  string                 $value
     * @param  int                    $maxLength
     * @throws \Exception
     */
    public function checkMaxLength($value, $maxLength)
    {
        if (strlen($value) > $maxLength) {
            throw new Exception('The string is too long');
        }
    }
}

class ValidationTraitDummyClass
{
    use ValidationTrait;
}
 
class ValidationTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ValidationTraitDummyClass
     */
    private $dummy;
 
    protected function setUp()
    {
        $this->dummy = new ValidationTraitDummyClass();
    }
 
    /**
     * @test
     * @dataProvider validStringsLengthLimitsDataProvider
     */
    public function testValidStringsLengthLimits($string, $maxlength)
    {
        $result = $this->dummy->checkMaxLength($string, $maxlength);
        $this->assertNull($result);
    }
 
    public function validStringsLengthLimitsDataProvider()
    {
        return [
            [null, 0],
            ['', 0],
            ['#', 1],
            ['#', 2],
        ];
    }
 
    /**
     * @test
     * @dataProvider invalidStringsLengthLimitsDataProvider
     * @expectedException \Exception
     */
    public function testInvalidStringsLengthLimits($string, $maxlength)
    {
        $this->dummy->checkMaxLength($string, $maxlength);
    }
 
    public function invalidStringsLengthLimitsDataProvider()
    {
        return [
            [null, -1],
            ['', -1],
            ['#', 0],
            ['##', 1],
        ];
    }
}