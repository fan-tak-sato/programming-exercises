// Removing one element from an array of arrays
var myArray = [
	'001',
	'002',
	'003',
	'004'
];

var valuesToRemove = ['002','003'];

console.log( myArray.filter((i) => !valuesToRemove.includes(i)) );

// Example 2
var valuesArr = ["v1","v2","v3","v4","v5"];
var removeValFromIndex = [0,2,4];

for (var i = removeValFromIndex.length -1; i >= 0; i--) {
	valuesArr.splice(removeValFromIndex[i], 1);
}

console.log( valuesArr );
