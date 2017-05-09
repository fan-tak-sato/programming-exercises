// How to create \ declare a class in Javascript

// Class using function as a constructor:
var person = new function() {  
	this.setName = function(name) {
		this.name = name;
	}
	this.sayHi = function() {
		return "Hi, my name is " + this.name;
	}
}
person.setName("Rafael");
console.log(person.sayHi()); // Hi, my name is Rafael

// Class Literal notation:
var person = {
	name: "",
	setName: function(name) {
		this.name = name;
	}
}
person.setName("Rafael"); 
console.log(person.name); // "Rafael"

// Singleton through a function:
var person = new function() {  
    this.setName = function(name) {
        this.name = name;
    }
    this.sayHi = function() {
        return "Hi, my name is " + this.name;
    }
}
person.setName("Rafael");  
console.log( person.sayHi() ); // Hi, my name is Rafael

// Organizing JS code
// Declaring my main namespace
var myapplication = myapplication || {};

// Declaring modules usermodule
myapplication.usermodule = (function() {  
    // createMessage: only accessible inside this module
    var createMessage = function(message) {
        return "Hello! " + message;
    }

    return {
        // sayHello is a public method
        sayHello: function(message) {
            return createMessage(message);
        }
    }
})();

// Declaring another module
myapplication.adminmodule = (function(){  
    // your code here
})()
// This is how we call sayHello
myapplication.usermodule.sayHello("This is my module");

