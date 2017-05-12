var things = [];

things.push({place: "here", name: "stuff"});
things.push({place: "there", name: "morestuff"});
things.push({place: "there", name: "caz"});
things.push({place: "new", name: "stuff"});

// console.log(JSON.stringify(things)); // Original Array

function removeDuplicates(originalArray, properties)
{
	var newArray = [];
	var index = 0;
	var lookupObject = {};
	var totalProperties = properties.length;

	for (var i = 0; i < originalArray.length; i++) {
		var exists = false;

		for (var a = 0; a < newArray.length; a++) {
			var propsFound = 0;
			for (var b = 0; b < totalProperties; b++) {
				if (originalArray[i][properties[b]] == newArray[a][properties[b]]) {
					propsFound++;
				}
			}

			// If there is a match then break the for loop
			if (propsFound == totalProperties) {
				exists = true;
				break;
			}
		} // End of New Array

		if (!exists) {
			newArray[index] = originalArray[i];
			index++;
		}
	} // End of originalArray

	return newArray;
}

things = removeDuplicates(things, ['place', 'name']);

console.log(JSON.stringify(things));
