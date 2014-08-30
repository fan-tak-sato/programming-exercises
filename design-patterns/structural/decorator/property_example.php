<?php
// http://www.labelmedia.co.uk/blog/posts/design-patterns-decorator-pattern.html

interface PropertyInterface
{
    public function setValue($value);
    public function getValue();
}

/*
The above class would be fine for the most basic of properties, but what if we wanted something a little more complicated - perhaps code to validate the property on set or to transform it on get.

In each of these situations we could use a decorator to change the behaviour of the base property object. The following two classes (not including the abstract base class) could be used to transform a string property to uppercase or pad it to a particular length:

PropertyDecorator.inc.php
*/

abstract class PropertyDecorator implements PropertyInterface
{
    protected $_property;

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

// property.inc.php
class Property implements PropertyInterface 
{
    private $_value;

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

// UppercasePropertyDecorator.inc.php
class UppercasePropertyDecorator extends PropertyDecorator
{
    public function getValue()
    {
        return strtoupper($this->_property->getValue());
    }
}

// PaddedPropertyDecorator.inc.php
class PaddedPropertyDecorator extends PropertyDecorator
{
    private $_length = 0, $_string = ' ';

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

/*
Because the decorators and the concrete Property objects all implement the same PropertyInterface and the decorators will accept any objects which also implement this interface, the decorators can be combined to make more complex decorations.

So here's some examples of how we can use these decorators:

example.php
*/

$property = new Property();
$property->setValue('property value');

echo $property->getValue(); // Outputs: property value

$decoratedProperty = new UppercasePropertyDecorator($property);

echo $decoratedProperty->getValue(); // Outputs: PROPERTY VALUE

$paddedUpperProperty = new PaddedPropertyDecorator($decoratedProperty, 20, '*');

// echo $paddedUpperProperty>getValue(); // Outputs: PROPERTY VALUE ******

echo $property->getValue(); // Outputs: property value