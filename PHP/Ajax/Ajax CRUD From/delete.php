<?php 
	
	$student_id = $_POST['id'];

	$conn = mysqli_connect('localhost','root','','ajax') or die('connect_error');

	$sql = "DELETE FROM students WHERE id = {$student_id}";


	if (mysqli_query($conn, $sql)){
		echo 1;	
	}else{
		echo 0;
	}

 ?>