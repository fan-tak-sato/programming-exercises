person = new Object();
person.name = "Tim Scarfe";
person.height = "6Ft";
 
person.run = function() {
    this.state = "running";
    this.speed = "4ms^-1";
	
	console.log(this.state);
}

person.run(); // execute the method