if(!Array.prototype.shift) { // if this method does not exist..

    Array.prototype.shift = function(){
        firstElement = this[0];
        this.reverse();
        this.length = Math.max(this.length-1,0);
        this.reverse();
        return firstElement;
    }

}
 
if(!Array.prototype.unshift) { // if this method does not exist..
     
    Array.prototype.unshift = function(){
        this.reverse();
	 
		for(var i=arguments.length-1;i>=0;i--){
			this[this.length]=arguments[i];
		}

        this.reverse();
        return this.length;
    }
}
