<?php 


$conn = mysqli_connect('localhost','root','','ajax') or die('connect_error');

$firstName = $_POST['fName'];
$lastName = $_POST['lName'];

$sql = "INSERT INTO students(firstName, lastName) VALUES ('{$firstName}','${lastName}')";

if (mysqli_query($conn,$sql)) {
	echo 1;
}else{
	echo 0;
}

?>