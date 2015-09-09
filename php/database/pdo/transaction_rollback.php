<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=zendtest;charset=utf8', 'root', '');
} catch (PDOException $e) {
	echo "Error on database connection: ".$e->getMessage(); // TODO: log error. Do not show it on production!
	exit;
}

$pdo->beginTransaction();
$pdo->query("INSERT INTO NAMES (username, password) VALUES ('Paul', 'paul_password124') ");
$stmt = $pdo->query('SELECT COUNT(*) FROM names');
$count1 = $stmt->fetchColumn();
$pdo->rollBack();
$stmt = $pdo->query('SELECT COUNT(*) FROM names');
$count2 = $stmt->fetchColumn();

echo $count1;

echo $count2;

// var_dump($pdo->errorInfo());

