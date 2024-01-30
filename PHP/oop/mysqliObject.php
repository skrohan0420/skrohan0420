<?php 

$serverNmae = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'testing';

$conn = new mysqli($serverNmae, $userName, $password, $dbName);


if ($conn->connect_error) {
	die('connect_error : ' . $conn->connect_error);
}


$sql = 'SELECT * FROM students';
$result = $conn->query($sql);





// print_r($result);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo '<pre>';
		echo "Id : {$row["id"]} || Name : {$row["student_name"]} || Age : {$row["age"]} || City : {$row["city"]}||<br>";
		echo '</pre>';
	}
}else{
	echo 'No Result Found';
}



$conn->close();

?>
