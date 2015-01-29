<?php

/**
 * Class FizzBuzz
 */
class FizzBuzz
{
    private $words;

    public function __construct()
    {
        $this->words = array(
            3 => Words::single('fizz'),
            5 => Words::single('buzz'),
            7 => Words::single('bang'),
        );
        $this->divisors = array_keys($this->words);
    }

    /**
     * @param int $number
     *
     * @return mixed
     */
    public function say($number)
    {
        $words = array_map(function($divisor) use ($number) {
            return $this->wordFor($number, $divisor);
        }, $this->divisors);

        return reduce_objects($words, 'append')->getOr($number);
    }

    /**
     * @param int $number
     * @param int $divisor
     *
     * @return Maybe
     */
    private function wordFor($number, $divisor)
    {
        if ($number % $divisor == 0) {
            return Maybe::just($this->words[$divisor]);
        }

        return Maybe::nothing();
    }
}

/**
 * Interface Monoid
 */
interface Monoid
{
    /**
     * @return Monoid
     */
    public function append($another);
}

/**
 * @param array $array
 * @param string $methodName
 *
 * @return mixed
 */
function reduce_objects($array, $methodName)
{
    return array_reduce($array, function($one, $two) use ($methodName) {
        return $one->$methodName($two);
    }, Maybe::nothing());
}

/**
 * Class Maybe
 */
class Maybe implements Monoid
{
    private $value;

    /**
     * @param $value
     */
    private function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param $value
     *
     * @return Maybe
     */
    public static function just($value)
    {
        return new self($value);
    }

    /**
     * @return Maybe
     */
    public static function nothing()
    {
        return new self(null);
    }

    /**
     * @param $default
     *
     * @return mixed
     */
    public function getOr($default)
    {
        if ($this->value !== null) {
            return $this->value;
        }
        return $default;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value;
    }

    /**
     * @param $another
     *
     * @return $this|Maybe
     */
    public function append(/*Maybe*/ $another)
    {
        if ($this->value === null) {
            return $another;
        }
        if ($another->value === null) {
            return $this;
        }
        return Maybe::just($this->value->append($another->value));
    }
}

/**
 * A Monoid over ('', .)
 */
class Words implements Monoid
{
    private $words = array();

    /**
     * @param $singleWord
     */
    public function __construct($singleWord)
    {
        $this->words = $singleWord;
    }

    public static function identity()
    {
        return new self(array());
    }

    public function single($word)
    {
        return new self(array($word));
    }

    /**
     * @param $words
     *
     * @return Words
     */
    public function append(/*Words*/ $words)
    {
        return new self(array_merge($this->words, $words->words));
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return implode('', $this->words);
    }
}

/**
 * Class FizzBuzzTest
 */
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public static function numberToResult()
    {
        return array(
            array(1, '1'),
            array(3, 'fizz'),
            array(5, 'buzz'),
            array(6, 'fizz'),
            array(10, 'buzz'),
            array(15, 'fizzbuzz'),
            array(3*5*7, 'fizzbuzzbang'),
        );
    }

    /**
     * @dataProvider numberToResult
     */
    public function testNumberIsMappedToResult($number, $result)
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals($result, $fizzBuzz->say($number));
    }
}
