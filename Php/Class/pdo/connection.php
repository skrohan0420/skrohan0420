<?php 

$serverName = "localhost";
$username ="root";
$password = "";

try{
	$conn= new PDO("mysql:host=$serverName;dbname=test",$username,$password);

}
catch(PDOException $a){
	echo "Error" . $a->getMessage();
}

 ?>