<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hello";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql and bind parameters
	$stmt = $conn->prepare("INSERT INTO students (name, age, email) VALUES (name, age, email)");
	$stmt->bindParam('name', $name);
	$stmt->bindParam('age', $age);
	$stmt->bindParam('email', $email);



	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$stmt->execute();

	echo "New records created successfully";
}catch(PDOException $e) {
  	echo "Error: " . $e->getMessage();
}



$conn = null;

 ?>