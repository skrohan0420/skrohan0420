<?php 
$server="localhost";
$username="root";
$password="";
$db="test";


$conn = mysqli_connect($server,$username,$password,$db);
 
if($conn){
    // echo " database connected successful";
}
else{
    echo"<script>alert('DATABASE NOT CONNECTED')</script>";
}


 ?>