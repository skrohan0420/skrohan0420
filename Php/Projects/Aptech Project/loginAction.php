<?php
include 'conn.php';

$logName = $_POST['logName'];
$logPass = $_POST['logPass'];

$sql = "SELECT * FROM new_table WHERE Name ='$logName' AND Password = '$logPass'";

$quary = mysqli_query($conn,$sql);

$num_row = mysqli_num_rows($quary);


// echo $num_row;
// echo "<br>";

if ($num_row) {
	header('location:user.php');
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