// https://developer.mozilla.org/it/docs/Web/JavaScript/Reference/Global_Objects/Array/Reduce

var sum = [0, 1, 2, 3].reduce(function(a, b) {
  return a + b;
}, 0); // 6

// console.log(sum);

var list1 = [[0, 1], [2, 3], [4, 5]];
var list2 = [0, [1, [2, [3, [4, [5]]]]]];

const flatten = arr => arr.reduce((a, b) => a.concat(Array.isArray(b) ? flatten(b) : b), []);

console.log( flatten(list1) ); // returns [0, 1, 2, 3, 4, 5]
console.log( flatten(list2) ); // returns [0, 1, 2, 3, 4, 5]