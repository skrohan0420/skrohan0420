<?php
include '_connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$fav_place = $_POST['fav_place'];
$password = $_POST['password'];


$insertquery = "insert into userdata(name,email,fav_place,password) values ('$name', '$email', '$fav_place', '$password')";

$res = mysqli_query($con, $insertquery);

if ($res) {
    echo "Data insert Successfully";
    header('location:index.php');
} else {
    echo "Data not Inserted";
}
