<!-- TO FECTCH ALL DATA FORM DATABASE AND INSERT INTO NEW JSON FILE-->

<?php 

$conn = mysqli_connect('localhost','root','','ajax') or die('connect_error');

$sql = "SELECT * FROM students";

$res = mysqli_query($conn, $sql) or die('SQL ERROR');

$output = mysqli_fetch_all($res, MYSQLI_ASSOC);

$json_data = json_encode($output, JSON_PRETTY_PRINT);


// To Create New File Every Time 
// $rand_num = rand(0,9999);

$file_name = "MY_".  date("d-m-y") . ".json";

if (file_put_contents("JSON/{$file_name}",$json_data)) {
	echo $file_name . ' File Created';
}else{
	echo "can't Insert date into json file.";
}


?>