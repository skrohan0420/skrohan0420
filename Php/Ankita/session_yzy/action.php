<?php
include 'connection.php';

$name=$_POST['name'];
$email=$_POST['email'];
$fav=$_POST['fav_place'];
$pass=$_POST['password'];
$submit=$_POST['submit'];

if(isset($submit)){

	$insert=mysqli_query($conn,"INSERT into hello values('','$name','$email','$fav','$password')");

	if($insert){
		header('location:index.php');
	}


}

?>