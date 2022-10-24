<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Upload Using PDO[PHP]</title>
	

	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
			/*outline: 1px solid gray;*/
			font-family: sans-serif;
		}
		body{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			width: 100vw;
			background: #111;
			
		}
		form{
			display: flex;
			flex-direction: column;
			align-items: center;
			height: 350px;
			width: 350px;
			background: #333;
		}
		h1{
			text-align: center;
			margin-top: 40px;
			font-size: 30px;
			width: 100%;
			color: white;
		}
		input[type="file"]{
			width: 80%;
			text-align: center;
			margin-top: 30px;
			color: white;
			font-size: 20px;
		}
		input[type="submit"]{
			width: 100px;
			height: 40px;
			margin-top: 50px;
			font-size: 20px;
			border: none;
			outline: none;
			color: wheat;
			background: #007fff;
			cursor: pointer;
		}
		a{
			display: flex;
			justify-content: center;
			align-items: center;
			text-decoration: none;
			width: 150px;
			height: 40px;
			margin-top: 50px;
			font-size: 20px;
			border: none;
			outline: none;
			color: wheat;
			background: #007fff;
			cursor: pointer;
		}
		a:hover{
			color: #007fff;
			background: transparent;
			outline: 1px solid #007fff;
		}
		a:active{
			transform: scale(0.9);
		}
		input[type="submit"]:hover{
			color: #007fff;
			background: transparent;
			outline: 1px solid #007fff;
		}
		input[type="submit"]:active{
			transform: scale(0.9);
		}
	</style>

</head>
<body class="container">
	<?php
		$server = "localhost";
		$username = "root";
		$password = "";
		$dbname = "test";

		try {
		    $conn = new PDO(
		        "mysql:host=$server;dbname=$dbname",
		        "$username","$password"
		    );
		      
		    $conn->setAttribute(
		        PDO::ATTR_ERRMODE,
		        PDO::ERRMODE_EXCEPTION
		    );
		}
		catch(PDOException $e) {
		    die('Unable to connect with the database');
		}
	?>


	<form method="post" enctype='multipart/form-data' action="">
		<h1>Upload a File</h1>
	    <input type="file" class="form-control-file" name="files[]" required>
	    <input type="submit" name="submit" value="Upload" class="btn-success rounded">
	    <a href="uploads.php">View Uploads</a>
	</form>

	<?php 
		    
		if(isset($_POST['submit'])) {
		   
		    // Count total files
		    $countfiles = count($_FILES['files']['name']);
		    
		    // Prepared statement
		    $query = "INSERT INTO images (name,image) VALUES(?,?)";
		   
		    $statement = $conn->prepare($query);
		   
		    // Loop all files
		    for($i = 0; $i < $countfiles; $i++) {
		   
		        // File name
		        $filename = $_FILES['files']['name'][$i];
		       
		        // Location
		        $target_file = 'upload/'.$filename;
		       
		        // file extension
		        $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);		              
		        $file_extension = strtolower($file_extension);
		       
		        // Valid image extension
		        $valid_extension = array("png","jpeg","jpg");
		       
		        if(in_array($file_extension, $valid_extension)) {
		   
		            // Upload file
		            if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$target_file)){
		  
		                // Execute query
		                $statement->execute(array($filename,$target_file));

		                echo "<script>alert('File uploaded successfully')</script>";
		            }
		        }
		        else{
		        	echo "<script>alert('Not a Valid Format')</script>";
		        }
		    } 
		   
		}
	?>



</body>
</html>