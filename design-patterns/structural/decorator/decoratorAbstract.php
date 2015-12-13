<?php

// Component
abstract class Math
{
    abstract function execute();
}

// ConcreteComponent
class StandardMath extends Math
{
    /**
     * @return int
     */
    public function execute()
    {
        return 0;
    }
}

// Decorator
abstract class MathDecorator extends Math
{
    protected $_math;

    /**
     * @param Math $math
     */
    public function __construct(Math $math)
    {
        $this->_math = $math;
    }
}

// ConcreteDecoratorA
class AddTwoDecorator extends MathDecorator
{
    /**
     * @return mixed
     */
    public function execute()
    {
        return $this->_math->execute() + 2;
    }
}

// ConcreteDecoratorB
class MultiplyTreeDecorator extends MathDecorator
{
    /**
     * @return mixed
     */
    public function execute()
    {
        return $this->_math->execute() * 3;
    }
}

// Usage
$m = new AddTwoDecorator( new MultiplyTreeDecorator( new AddTwoDecorator( new StandardMath() ) ) );

echo $m->execute(); // 8
