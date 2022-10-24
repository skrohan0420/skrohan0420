<?php 

	
	$student_id = $_POST['id'];
	$student_fName = $_POST['fName'];
	$student_lName = $_POST['lName'];

	$conn = mysqli_connect('localhost','root','','ajax') or die('connect_error');

	$sql = "UPDATE students SET firstName='{$student_fName}', lastName ='{$student_lName}' WHERE id = {$student_id}";


	if (mysqli_query($conn, $sql)){
		echo 1;	
	}else{
		echo 0;
	}


 ?>