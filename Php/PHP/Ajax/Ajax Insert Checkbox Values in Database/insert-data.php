<?php

  
 $conn = mysqli_connect("localhost","root","","testing") or die("Connection Failed");

$name = $_POST["name"];
$languages = $_POST["lang"];

$sql = "INSERT INTO cityTb (name, languages) VALUES ('{$name}','{$languages}')"; 

if(mysqli_query($conn, $sql)){
	echo "Successfully Saved.";
}else{
	echo "Can't Saved Form Data."; 
}


?>
