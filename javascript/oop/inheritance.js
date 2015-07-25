var ClassA = function() {
	this.name = "class A";
}

/* Create a method */
ClassA.prototype.print = function() {
    console.log(this.name);
}

/* Call method */
// var a = new ClassA();
// a.print();

var ClassB = function() {
    this.name = "class B";
    this.surname = "I'm the child";
}

var inheritsFrom = function (child, parent) {
    child.prototype = Object.create(parent.prototype);
};

ClassB.prototype.print = function() {
    ClassA.prototype.print.call(this);
    console.log(this.surname);
}

var ClassC = function () {
    this.name = "class C";
    this.surname = "I'm the grandchild";
}

inheritsFrom(ClassC, ClassB);

ClassC.prototype.foo = function() {
    // Do some funky stuff here...
}

ClassC.prototype.print = function () {
    ClassB.prototype.print.call(this);
    console.log("Sounds like this is working!");
}

var c = new ClassC();
c.print();