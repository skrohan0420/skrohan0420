<?php 
		include 'conn.php';

		$id = $_REQUEST['book'];

		$sql = mysqli_query($conn,"SELECT rooms FROM hotel WHERE id ='$id'");

		$sql_fetch = mysqli_fetch_assoc($sql);

		$book = $sql_fetch['rooms'] -1;

	
		$user_update = mysqli_query($conn, "UPDATE hotel SET rooms ='$book'WHERE id = '$id'") or die (mysqli_errno($conn));



		header('location:home.php');
?>