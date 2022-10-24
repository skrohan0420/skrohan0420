<?php 

include 'conn.php';


$id = $_POST['id'];

$name = $_POST['name'];
$email = $_POST['email'];
$ph = $_POST['ph'];
$PassM = $_POST['Pass'];

$pass = md5($Pass);


if($setPAss != $conPass){

	echo '<p>Passwords didn not Match </p>
		  <button>
		  	<a href="signUp.php"> Try Again</a>
		  </button>';

}
else{

	$q = mysqli_query($conn,"UPDATE users SET
											name = '$name',
											email ='$email',
											number = '$ph',
											password = '$pass'
											
										WHERE
											id = '$id';
												 ")or die(mysqli_error($conn));
	if ($q) {
		header("location:userHome.php?pass=".$pass);
	}
	else{
		echo "Records Not Found";
	}
}


 ?>