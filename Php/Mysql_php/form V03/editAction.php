<?php  

include 'connection.php';


$uid = $_POST['uid'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$number = $_POST['phno'];
$pass = $_POST['pass'];
$add = $_POST['add'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$course = $_POST['course'];
$lang = implode(",",$_POST['lang']);
    
$image = $_FILES['img']['name'];

$newimg = rand(1000,9999).'_'.$image;
$uplode_path = 'uplode/'.$newimg;
$source_path = $_FILES['img']['tmp_name'];



if (move_uploaded_file($source_path, $uplode_path)){
	$user_update = mysqli_query($conn, 
		"UPDATE new_table 
				SET 
					Name ='$name',
					Email ='$mail',
					PhoneNumber = '$number',
					Password = '$pass',
					Address ='$add',
					Gender ='$gender',
					Dob  ='$dob',
					Course ='$course',
					Language ='$lang',
					Image ='$uplode_path'
				WHERE 
					id = '$uid'") or die (mysqli_errno($conn));
	if ($user_update) {
		header('location:user.php');
	}
	else{
		echo 'Records Not Updated';
	}
}

?>