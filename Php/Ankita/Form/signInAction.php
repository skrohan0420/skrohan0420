<?php 
include 'conn.php';

$email = $_POST['email'];
$pass = md5($_POST['pass']);


$sql = "SELECT * FROM users WHERE email ='$email' AND password = '$pass'";

$quary = mysqli_query($conn,$sql);

$num_row = mysqli_num_rows($quary);
	


	if ($num_row) {
		header('location:userHome.php?pass='.$pass);
	}
	else{
		echo "<p>Wrong User Name Or Wrong User Password.</p>";
	}
	
	
 ?>

 <style type="text/css">
		
	p{
		color: red;
		text-align: center;
		font-size: 3ch;
	}

</style>