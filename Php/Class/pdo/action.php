<?php 

include 'connection.php';


	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$add = $_POST['add'];




$query = "INSERT INTO `pdo` (`name`,`mail`,`add`) VALUES(:name,:mail,:add)";

	$data = $conn->prepare($query);

	$data->bindParam(':name',$name);
	$data->bindParam(':mail',$mail);
	$data->bindParam(':add',$add);


if ($data->execute()) {
	header('location:display.php');
}
else{
	echo 'Error';
}	
?>