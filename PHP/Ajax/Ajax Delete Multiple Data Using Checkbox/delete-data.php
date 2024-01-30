<?php 
$conn = mysqli_connect("localhost","root","","test2");

$student_id = $_POST['id'];

$str = implode($student_id,",");

$sql = "DELETE FROM students WHERE id IN ({$str})";

if (mysqli_query($conn,$sql)) {
	echo 1;
}else{
	echo 0;
}
?>