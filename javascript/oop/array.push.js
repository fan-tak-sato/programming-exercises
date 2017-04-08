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
