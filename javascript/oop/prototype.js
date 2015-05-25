function cat(name) {
    this.name = name;
    this.talk = function() {
        console.log( this.name + " say meeow!" );
    }
}

cat1 = new cat("felix")
cat1.talk();
 
cat2 = new cat("ginger")
cat2.talk();

/* Add a method using prototype */
cat.prototype.changeName = function(name) {
    this.name = name;
}
 
firstCat = new cat("pursur");
firstCat.changeName("Bill");
firstCat.talk();
