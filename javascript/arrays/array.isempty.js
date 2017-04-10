var array = [];

if (typeof array != "undefined" && array != null && array.length == 0) {
	console.log('The array is empty!');
}

function isEmptyArray(array) {
	if(typeof array != "undefined" && array != null && array.length == 0)
		return true;
		
	return false;
}

var myArray = [];

var notAnArray = 'my string';

console.log( isEmptyArray(myArray) );
console.log( isEmptyArray(notAnArray) );