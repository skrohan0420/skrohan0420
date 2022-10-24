<?php
include 'connection.php';
session_start();

$email = $_POST['email'];
$password = $_POST['pass'];

$searchquery="select * from hello where email='$email' && password='$password'";


$res=mysqli_query( $conn,$searchquery);
$data=mysqli_fetch_array($res);
$num=mysqli_num_rows($res);

       
       
$_SESSION['name']=$data['name'];
$_SESSION['email']=$data['email'];
$_SESSION['fav']=$data['fav_place'];
$_SESSION['password']=$data['password'];

if($num>0){
    echo"login successful";
    header("location:home.php");
}
else{
    echo"invalid email or password";

}



?>