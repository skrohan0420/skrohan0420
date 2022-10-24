<?php 
	include 'conn.php';
	
	$name = $_POST['userName'];
	$repo = $_POST['userRepo'];
	$repoName = $_POST['repoName'];

	$img = $_FILES['img']['name'];

	$newimg = rand(1000,9999).'_'.$img;
	$up_path = 'uplode/'.$newimg;
	$src_path = $_FILES['img']['tmp_name'];

	if (move_uploaded_file($src_path, $up_path)){

	$user_insert = mysqli_query($conn,"INSERT INTO Repo VALUES('','$name','$repo','repoName','$up_path')") or die(mysqli_error($conn));

		if ($user_insert) {
			header('location:view.php');
		}
		else{
			echo "Error";
		}
	}
 ?>