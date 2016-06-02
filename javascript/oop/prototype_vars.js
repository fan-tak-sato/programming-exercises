function Employee() {};

Employee.prototype.firstName = "Abhijit";
Employee.prototype.lastName = "Patel";
Employee.prototype.startDate = new Date();
Employee.prototype.signedNDA = true;
Employee.prototype.fullName = function() {
	return this.firstName + " " + this.lastName;
};

var abhijit = new Employee();

console.log(abhijit.fullName()); // Abhijit Patel​
console.log(abhijit.signedNDA); // true
