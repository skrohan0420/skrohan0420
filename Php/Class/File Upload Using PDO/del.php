<?php 
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$ep = $_REQUEST['ep']; 
	try {
	    $conn = new PDO(
	        "mysql:host=$server;dbname=$dbname",
	        "$username","$password"
	    );
		      
	    $conn->setAttribute(
	        PDO::ATTR_ERRMODE,
	        PDO::ERRMODE_EXCEPTION
	    );

	    // sql to delete a record
	    $sql = "DELETE FROM images WHERE id='$ep'";

	    // use exec() because no results are returned
	    $conn->exec($sql);
		header('location:uploads.php');


	}
	catch(PDOException $e) {
	    die('Unable to connect with the database');
	}




	


	








	






















		


	
?>

	

