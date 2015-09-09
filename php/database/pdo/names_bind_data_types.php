<?php

try {
	$db = new PDO('mysql:host=localhost;dbname=zendtest;charset=utf8', 'root', '');
} catch (PDOException $e) {
	echo "Error on database connection: ".$e->getMessage(); // TODO: log error. Do not show it on production!
	exit;
}

$id = 2;
$query = $db->prepare('SELECT id, username FROM users WHERE id = :id');
 
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->execute();

$fetch = $query->fetch();

if ($fetch) {
	echo $fetch['id']." ".$fetch['username'];
} else {
	echo "No user were found :(";
}
