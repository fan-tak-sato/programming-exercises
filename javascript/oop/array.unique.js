var myArray = ['001', '002', '002'];

var filtered = myArray.filter(function() {
	var seen = {};

	return function(element, index, array) {
		return !(element in seen) && (seen[element] = 1);
	};
}());

console.log(filtered);
