function isPalindrome(value) {
	return value == value.split('').reverse().join('');
}

// Usage
console.log( isPalindrome('esse') ); // true
console.log( isPalindrome('seven') ); // false
