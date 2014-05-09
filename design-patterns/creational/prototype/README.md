In the Prototype Pattern we create one standard object for each class, and clone that object to create new instances. 

In this example we have an abstract BookPrototype class, with two specific or concrete subclasses, PHPBookPrototype and SQLBookPrototype. To create a object using either PHPBookPrototype or SQLBookPrototype we call the clone method.