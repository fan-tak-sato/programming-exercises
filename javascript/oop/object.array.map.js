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
// console.log( _.map(objArray, _.property('someProperty.aNumber')) );
// console.log( _.map(objArray, _.property(['someProperty', 'aNumber'])) );
