<?php 

	include 'conn.php';
	
	$udel = $_REQUEST['ep'];

	if (mysqli_query($conn,"DELETE FROM users WHERE id = '$udel'")) {
		header('location:index.php');
	}
	else{
		echo "Error";
	}
 ?>