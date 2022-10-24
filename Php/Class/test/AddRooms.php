<?php 
		include 'conn.php';

		$id = $_REQUEST['bookadd'];

		$sql = mysqli_query($conn,"SELECT rooms FROM hotel WHERE id ='$id'");

		$sql_fetch = mysqli_fetch_assoc($sql);

		$bookadd = $sql_fetch['rooms'] +1;

	
		$user_update = mysqli_query($conn, "UPDATE hotel SET rooms = '$bookadd' WHERE id = '$id'") or die (mysqli_errno($conn));



		header('location:home.php');
?>