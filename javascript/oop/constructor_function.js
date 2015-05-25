function message(msg) {
	this.txt = decode(msg);
}

function decode(msg) {
	return JSON.parse(msg);
}

/* Error... */
try {
	MsgObject = new message("My message");
} catch(err) {
	console.log("Error: the message object is returning an error! ");
}

/* No errors... */
try {
	MsgObject = new message('{"name": "John"}');
	
	console.log("OK!");
} catch(err) {
	console.log("Error...");
}



function messageValidator() {
	this.decodeMessage = function(message) {
		
		this.decodedMessage = JSON.parse(message);
		
		return this.decodedMessage;
	}
	
	this.getDecodedMessage = function() {
		return this.decodedMessage;
	}
}

msgVaidator = new messageValidator();
try {
	msgVaidator.decodeMessage('{"name": "John"}');
	
	console.log( msgVaidator.getDecodedMessage() ); // using a sort of getter instead of msgVaidator.decodedMessage
} catch(err) {
	console.log("Error...");
}
