<?php
include "conn.php";

$logName = $_POST['logName'];
$logPass = $_POST['logPass'];

$sql = "SELECT * FROM login WHERE Name ='$logName' AND Password = '$logPass'";

$quary = mysqli_query($conn,$sql);

$num_row = mysqli_num_rows($quary);



if ($num_row) {
	session_start();
	if (!isset($_SESSION['logName'])){
			echo '<center>Welcome ' .$logName.'</center><br>';
			echo $_SESSION['logName'];
			// echo '<center><button>Logout</button></center><br>';
	}
	else{
		echo 'Error';
	}
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