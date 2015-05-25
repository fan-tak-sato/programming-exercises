
var divideSync = function(x,y) {
    if ( y === 0 ) {
        return new Error("Can't divide by zero");
    } else {
        return x/y;
    }
}

/* First example: no errors */
var result = divideSync(4,2);

if ( result instanceof Error ) {
    console.log('4/2=err', result);
} else {
    console.log('4/2='+result);
}

/* Second example: divide by zero */
result = divideSync(4,0);

if ( result instanceof Error ) {
    console.log('4/0=err', result);
} else {
    console.log('4/0='+result);
}
