function *square() {
  var k = 0;
  while (true) {
    yield (++k)*k;
  }
}

var squares = square();

console.log(squares.next().value);
console.log(squares.next().value);
console.log(squares.next().value);