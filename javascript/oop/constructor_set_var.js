function message(msg) {
	this.txt = msg;
};

MsgObject = new message("My message");

console.log(MsgObject.txt);
