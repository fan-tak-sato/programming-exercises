for (var i = 1; i <= 100; i++)
{
    var string = '';
 
    if (i % 3 == 0) {
        string += 'Fizz';
    }
 
    if (i % 5 == 0) {
        string += 'Buzz';
    }

    // If `string` is empty, `i` is not divisible
    // by 3 or 5, so use the number instead.
    if (string == '') {
        string += i;
    }

    console.log(string);
}