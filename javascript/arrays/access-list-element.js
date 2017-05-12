var arr = [{
	myfn: function() {
		return 'Log this';
	},
	
	logger: function() {
		return this.myfn();
	}
}];

console.log( arr[0].logger() ); // Log this