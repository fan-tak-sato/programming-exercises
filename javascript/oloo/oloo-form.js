function Foo() {}

Foo.prototype.y = 11;

function Bar() {}

Bar.prototype = Object.create(Foo.prototype);
Bar.prototype.z = 31;

var x = new Bar();
x.y + x.z;  // 42

/* ---------------------------------------------- */
/* ---------------------------------------------- */
/* ---------------------------------------------- */

var FooObj = { y: 11 };

var BarObj = Object.create(FooObj);
BarObj.z = 31;

var x = Object.create(BarObj);
x.y + x.z;  // 42