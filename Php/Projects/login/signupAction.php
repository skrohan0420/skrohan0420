<?php 

include "conn.php";

$regname = $_POST['regname'];
$regnum = $_POST['regnum'];
$regpass = $_POST['regpass'];
	
	$user_insert = mysqli_query($conn,"INSERT INTO login VALUES('','$regname','$regnum','$regpass')") or die(mysqli_error($conn));


	if ($user_insert) {
		header('location:user.php');;
	}
	else{
		echo "Error";
	}
 ?>