<?php 

	include 'connection.php';
	
	$udel = $_REQUEST['del'];

	if (mysqli_query($conn,"DELETE FROM new_table WHERE id = '$udel'")) {
		header('location:user.php');
	}
	else{
		echo "Error";
	}
 ?>