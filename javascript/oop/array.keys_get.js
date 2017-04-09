function getKeys(obj) {
    var r = [];
    for (var k in obj) {
        if (!obj.hasOwnProperty(k)) {
			continue;
		}
        r.push(k);
    }
    return r;
}

var keys = getKeys({'eggs': null, 'spam': true}); // [ 'eggs', 'spam' ]

var length = keys.length; // 2

console.log(keys);
console.log(length);