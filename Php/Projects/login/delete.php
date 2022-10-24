<?php 

	include 'conn.php';
	
	$udel = $_REQUEST['del'];

	if (mysqli_query($conn,"DELETE FROM login WHERE id = '$udel'")) {
		header('location:user.php');
	}
	else{
		echo "Error";
	}
 ?>