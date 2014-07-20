<?php

interface PropertyInterface
{
    public function setValue($value);
    public function getValue();
}


class Property implements PropertyInterface 
{
    private
        $_value;

    public function __construct() {}

    public function setValue($value)
    {
        $this->_value = $value;
        return true;
    }

    public function getValue()
    {
        return $this->_value;
    }
}


abstract class PropertyDecorator implements PropertyInterface
{
    protected
        $_property;

    public function __construct(PropertyInterface $product)
    {
        $this->_property = $product;
    }

    public function setValue($value)
    {
        return $this->_property->setValue($value);
    }

    public function getValue()
    {
        return $this->_property->getValue();
    }
}

class UppercasePropertyDecorator extends PropertyDecorator
{
    public function getValue()
    {
        return strtoupper($this->_property->getValue());
    }
}

class PaddedPropertyDecorator extends PropertyDecorator
{
    private
        $_length = 0,
        $_string = ' ';

    public function __construct(PropertyInterface $product, $length, $string=false)
    {
        if (is_numeric($length)) {
            $this->_length = $length;
        }

        if (is_string($string)) {
            $this->_string = $string;
        }

        return parent::__construct($product);
    }

    public function getValue()
    {
        return str_pad($this->_property->getValue(), $this->_length, $this->_string);
    }
}

$property = new Property();
$property->setValue('property value');

echo $property->getValue(); //Outputs: property value

$decoratedProperty = new UppercasePropertyDecorator($property);

echo $decoratedProperty->getValue(); //Outputs: PROPERTY VALUE

$paddedUpperProperty = new PaddedPropertyDecorator($decoratedProperty, 20, '*');

echo $paddedUpperProperty>getValue(); //Outputs: PROPERTY VALUE******

echo $property->getValue(); //Outputs: property value