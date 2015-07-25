testObj = {
    prop1: "hello",
    prop2: "hello2",
    prop3: new Array("helloa",1,2)
}

/* Loop through object properties */
for(x in testObj) {
	console.log( x + "-" + testObj[ x ] );
}