<?php 

$fName = "SK";
$lName = "ROHAN";
$age = "22";
$gender = "male";
$city = "kolkata";
$arr = ["gender","city"];


$newArr = compact("fName","lName","age", $arr);


echo "<pre>";
print_r($newArr);
echo "</pre>";
 ?>