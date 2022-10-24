<?php 

include 'connection.php';

$name = $_POST['name'];
$mail = $_POST['mail'];
$number = $_POST['phno'];
$pass = $_POST['pass'];
$add = $_POST['add'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$course = $_POST['course'];
$lang = implode(',',$_POST['lang']);
    
$image = $_FILES['img']['name'];

$newimg = rand(1000,9999).'_'.$image;
$uplode_path = 'uplode/'.$newimg;
$source_path = $_FILES['img']['tmp_name'];


if (move_uploaded_file($source_path, $uplode_path)){
	$user_insert = mysqli_query($conn,"INSERT INTO new_Table VALUES('','$name','$mail','$number','$pass','$add','$gender','$dob','$course','$lang','$uplode_path')") or die(mysqli_error($conn));

	if ($user_insert) {
		header('location:user.php');
	}
	else{
		echo "Records Not Found";
	}
}

?>