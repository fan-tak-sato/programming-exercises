<?php

try {
	$db = new PDO('mysql:host=localhost;dbname=zendtest;charset=utf8', 'root', '');
} catch (PDOException $e) {
	echo "Error on database connection: ".$e->getMessage(); // TODO: log error. Do not show it on production!
	exit;
}

$query = $db->query('SELECT name,email FROM names');
$fetch = $query->fetch(); // One result\row
// echo $fetch['name'];

$query = $db->query('SELECT name, email FROM names');
// All results
while ($fetch = $query->fetch()) {
	echo $fetch['name']." ".$fetch['email']."<br>";
}
