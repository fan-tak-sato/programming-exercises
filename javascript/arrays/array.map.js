// Example 1
var objArray = [
	{ foo: 1, bar: 2},
	{ foo: 3, bar: 4},
	{ foo: 5, bar: 6}
];

var allFoos = objArray.map(function(a) {return a.foo;});

console.log(allFoos);

// Example with a key for each element
var objArray = [
	{
		someProperty: { aNumber: 5 }
	},
	{
		someProperty: { aNumber: 2 }
	},
	{
		someProperty: { aNumber: 9 }
	}
];

function getFields(input, field) {
    return input.map(function(o) {
        return o[field];
    });
}

console.log( getFields(objArray, 'someProperty') ); // [ { aNumber: 5 }, { aNumber: 2 }, { aNumber: 9 } ]

// Example 3
console.log( objArray.map((v) => v.someProperty) ); // [ { aNumber: 5 }, { aNumber: 2 }, { aNumber: 9 } ]
console.log( objArray.map((v) => v.someProperty.aNumber) ); // [ 5, 2, 9 ]

// Apply Math.sqrt(value) to each element in an array.  
var numbers = [9, 16];  
console.log( numbers.map(Math.sqrt) );

// Define the callback function.
function AreaOfCircle(radius) {
    var area = Math.PI * (radius * radius);
    return area.toFixed(0);
}

var radii = [10, 20, 30];

var areas = radii.map(AreaOfCircle);

console.log(areas);