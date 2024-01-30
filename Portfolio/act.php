<?php 

$conn = mysqli_connect('localhost','root','','portfolioDb');

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$query = mysqli_query($conn,"INSERT INTO msg VALUES('','$name','$email','$msg')");

if ($query) {
	header('location:index.html');
}
else{
	echo "Records Not Found";
}

 ?>