<?php
include 'conn.php';
// echo "<pre>" ;
// print_r($_POST);
// echo '</pre>';



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pword = md5($_POST['pword']);
$dob = $_POST['date_of_birth:day']. '-' .
        $_POST['date_of_birth:mon']. '-' .
        $_POST['date_of_birth:year'];
$gender = $_POST['gender'];
$address = $_POST['newAdd'];
$course = implode(',',$_POST['course']);











$uploadfile = $_FILES['file']['name'];

if (move_uploaded_file($_FILES['file']['tmp_name'], './uploads/'.$uploadfile)){
    echo "File successfully uploaded.\n";
}
else {
    echo "file not Uploaded\n";
}

$file = 'uploads/' . basename($_FILES['file']['name']);







print "<pre>";
print_r($_FILES);
print "</pre>";






$sql = "INSERT INTO `user_data` (`id`, `name`, `email`, `phone`, `password`, `dob`, `gender`, `address`, `course`, `image`) VALUES (NULL,'$name','$email','$phone','$pword','$dob','$gender','$address','$course','$file')";




if(mysqli_query($conn, $sql)){

    header('Location: view.php');


  
}else{

    echo "data not inserted";

}














?>