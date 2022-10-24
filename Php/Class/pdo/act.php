<?php

include 'conn.php';

$name = $_POST['name'];	
$email = $_POST['email'];	
	


if ($conn) {
	$sql = "INSERT INTO MyGuests (firstname, email) VALUES ('$name', '$email')";
	$conn->exec($sql);
	echo "New record created successfully<br>";
	echo "<button><a href='index.php'>Home</a></button>";


}
else{
	echo "ERROR";
	
}


$conn = null;
?>