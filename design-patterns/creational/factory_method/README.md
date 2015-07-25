Factory Method Pattern
========================

In the Factory Method Pattern, a factory method defines what functions must be available in the non-abstract or concrete factory. These functions must be able to create objects that are extensions of a specific class. Which exact subclass is created will depend on the value of a parameter passed to the function. 

In this example we have a factory method, AbstractFactoryMethod, that specifies the function, makePHPBook($param). 

http://en.wikipedia.org/wiki/Factory_method_pattern

UML
-----------------

![Alt text](/design-patterns/uml/factory_method.jpg)