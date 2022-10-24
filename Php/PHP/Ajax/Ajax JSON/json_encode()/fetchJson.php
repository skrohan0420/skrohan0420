<?php 

$conn = mysqli_connect('localhost','root','','ajax') or die('connect_error');
$sql = "SELECT * FROM students2 WHERE id = {$_POST['id']}";


$res = mysqli_query($conn,$sql) or die('SQL query Failde..');

$output = mysqli_fetch_all($res, MYSQLI_ASSOC);



echo json_encode($output);




// echo '<pre>';
// print_r($output);
// echo '</pre>';

?>