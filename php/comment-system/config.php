<?php

$server 	= 'localhost';
$dbName 	= 'comment_system';
$dbUser 	= 'root';
$dbPassword = '';

$commentLoadFile 	= 'commentLoad.php';
$commentInsertFile 	= 'commentInsert.php';

include_once("libraries/redbean/rb.php");

try {
	R::setup('mysql:host='.$server.';dbname='.$dbName.'', $dbUser, $dbPassword);
} catch(Exception $e) {
	?>
	<h3>Error connecting database</h3>
	<p>The system was unable to connect database.</p>
	<?php
	exit;
}
