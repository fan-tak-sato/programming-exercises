<?php

/**
 * Parsing RESTful Request
 * 
 * Examples via shell using CURL: 
		curl -X PUT -d arg=val -d arg2=val2 http://localhost/mywebapp/rest/request/
 * 		
 * 		send a file: curl -i -F name=test -F filedata=@hello_world.txt http://localhost/mywebapp/rest/request/
 */

if ($_SERVER['REQUEST_METHOD']=='PUT'
	or $_SERVER['REQUEST_METHOD']=='DELETE'
	or $_SERVER['REQUEST_METHOD']=='PATCH') {
	
	parse_str(file_get_contents("php://input"), $post_vars);
	echo json_encode($post_vars);
	
	
	$putdata = fopen("php://input", "r");
	var_dump($putdata);
	while ($data = fread($putdata, 1024)) {
		  echo $data . "\n";
	}
	
} else {
	echo json_encode( array(0 => "We are sorry, we cannot parse this request :( ") );
}
