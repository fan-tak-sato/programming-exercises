function findDuplicates(array) {
	var dup = [];
	var obj = {};
	
	for(var i = 0; i < array.length; i++) {
		if (!obj[array[i]]) {
			obj[array[i]] = 1;
		} else {
			dup.push(array[i]);
		}
	}
	
	return dup;
}

console.log( findDuplicates([1, 2, 2, 3, 5, 5, 4]) );