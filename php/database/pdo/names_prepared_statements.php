<?php

try {
	$db = new PDO('mysql:host=localhost;dbname=zendtest;charset=utf8', 'root', '');
} catch (PDOException $e) {
	echo "Error on database connection: ".$e->getMessage(); // TODO: log error. Do not show it on production!
	exit;
}

$query = $db->prepare('SELECT id, username FROM users WHERE username = :username AND password = :password');
 
$array = array(
	'username' => 'Carrot',
	'password' => 'sup homie'
);

$query->execute($array);

$fetch = $query->fetch();

if ($fetch) {
	echo $fetch['id']." ".$fetch['username'];
} else {
	echo "No user were found :(";
}

