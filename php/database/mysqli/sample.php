<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "zendtest";

// Create connection
$conn = new mysqli($server, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $firstname, $lastname);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$stmt->execute();

// echo mysqli_error($conn); Error

$stmt->close();
$conn->close();

