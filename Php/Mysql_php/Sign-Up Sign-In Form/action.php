<?php 
include 'connection.php';


$user_name = $_POST['name'];
$user_email = $_POST['email'];
$user_number = $_POST['number'];
$user_password = md5($_POST['password']);



	$user_insert = mysqli_query($conn,"INSERT INTO user VALUES('','$user_name', '$user_email','$user_number','$user_password')") or die(mysqli_error($conn));

	if ($user_insert) {
		header('location:user.php');
	}
	else{
		echo "Records Not Found";
	}




			

?>