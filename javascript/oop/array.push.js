var obj = {
	key1: 'value1',
	key2: 'value2',
	key3: 'value3',
	key4: 'value4'
}

var keys = [];

for (var k in obj) {
	keys.push(k);
}

console.log(keys);

// Example 2
var multiList = [
	[
		'001',
		'002',
		'003'
	]
];
multiList.push.apply(multiList, [['004', '005']]);

console.log(multiList);

// Example 3: push if element is not in the array
