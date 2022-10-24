<?php
include 'conn.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pword = $_POST['hidden_pass'];
$dob = $_POST['date_of_birth:day']. '-' .
       $_POST['date_of_birth:mon']. '-' .
       $_POST['date_of_birth:year'];
$gender = $_POST['gender'];
$address = $_POST['newAdd'];
$course = implode(',',$_POST['course']);
$image = $_POST['delImg'];




echo "<pre>";
print_r($_FILES);
print_r($_POST);
echo "</pre>";
$uploadfile = $image;

if(isset($_FILES['fileUpdate']) && $_FILES['fileUpdate']['name']!=''){

    $uploadfile = $_FILES['fileUpdate']['name'];
    $file = 'uploads/' . basename($uploadfile);
    unlink($image);
    move_uploaded_file($_FILES['fileUpdate']['tmp_name'], './uploads/'.$uploadfile);


    
}

if(isset($_POST['pword']) && $_POST['pword']!=''){
    $pword = md5($_POST['pword']);
   
}
echo $uploadfile.'<br>';
echo $pword;



$q = "UPDATE `user_data` SET `name`='$name',`email`='$email',`phone`='$phone',`password`='$pword',`dob`='$dob',`gender`='$gender',`address`='$address',`course`='$course',`image`='$file' WHERE `id` = '$_POST[id]'";

if(mysqli_query($conn,$q)){
    header('Location: view.php');
}else{
    echo "not Updated";
}


?>