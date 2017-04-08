// Example 1
var arr = ["a", "b", "c"];

console.log( Object.keys(arr) ); // [ '0', '1', '2' ] it's like array_keys in php

// Example 2
var my_obj = Object.create({}, { getFoo : { value : function () { return this.foo } } });

my_obj.foo = 1;

console.log(Object.keys(my_obj)); // ['foo']
