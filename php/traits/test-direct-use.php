<?php

trait ValidationTrait
{
    /**
     * @param  string                 $value
     * @param  int                    $maxLength
     * @throws \Exception
     */
    private function checkMaxLength($value, $maxLength)
    {
        if (strlen($value) > $maxLength) {
            throw new Exception('The string is too long');
        }
    }
}


class ValidationTraitTest extends \PHPUnit_Framework_TestCase
{
    use ValidationTrait;
 
    /**
     * @test
     * @dataProvider validStringsLengthLimitsDataProvider
     */
    public function validStringsLengthLimits($string, $maxlength)
    {
        $result = $this->checkMaxLength($string, $maxlength);
		
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
    public function invalidStringsLengthLimits($string, $maxlength)
    {
        $this->checkMaxLength($string, $maxlength);
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