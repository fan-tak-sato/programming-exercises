// splice: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/splice

var array = [2, 5, 9];
var index = array.indexOf(5);

if (index > -1) {
	array.splice(index, 1);
}

console.log(array);

// Example 2
var someArray = [{name:"Kristian", lines:"2,5,10"}, {name:"John", lines:"1,19,26,96"}];

console.log( someArray.splice(0,1) ); // [{name:"Kristian", lines:"2,5,10"}, {name:"John", lines:"1,19,26,96"}];

// Delete using filter is cleaner
var filtered = someArray.filter(function(el) { return el.Name != "Kristian"; });
console.log( filtered );

// Or you can create a for cycle to see each element if you need it
for (var i =0; i < someArray.length; i++) {
	if (someArray[i].name === "Kristian") {
		someArray.splice(i, 1);
		break;
	}
}
console.log( someArray ); // [ { name: 'John', lines: '1,19,26,96' }

// Other functions
// someArray.shift(); // first element removed
// someArray = someArray.slice(1); // first element removed
// someArray.splice(0,1); // first element removed
// someArray.pop(); // last element removed

// underscore.js
// someArray = _.reject(someArray, function(el) { return el.Name === "Kristian"; });

// sugar.js
// someArray.remove(function(el) { return el.Name === "Kristian"; });