<?php
include 'conn.php';

$user_id = $_POST['user_id'];

$sql_select = "SELECT `status` FROM `user_data` WHERE id = {$user_id}";

$res = mysqli_fetch_assoc(mysqli_query($conn,$sql_select));

// echo $res['status'];

if($res['status']=='Y'){
    $sql_update = "UPDATE `user_data` SET status = 'N' WHERE id = '$user_id'";
    echo 'N';
}else{
    $sql_update = "UPDATE `user_data` SET status = 'Y' WHERE id = '$user_id'";
    echo 'Y';
}


// echo $sql_update;
mysqli_query($conn, $sql_update);
    



?>