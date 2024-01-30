<?php 

	
$conn = mysqli_connect('localhost','root','','ajax') or die('connect_error');

$name = $_POST['fullname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$country = $_POST['country'];


$sql = "INSERT INTO students2(name, age, gender, country) VALUES ('{$name}',$age,'{$gender}','{$country}')";


if (mysqli_query($conn,$sql)){
	echo 'Hello '. $name . ' Your Record is Saved';
}else{
	echo "can't Save Your Record";
}

 ?>