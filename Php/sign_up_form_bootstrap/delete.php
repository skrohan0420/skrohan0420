<?php
include "conn.php";


$id = $_POST['eid'];

$q = "DELETE FROM `user_data` WHERE id = '$id'";


if(mysqli_query($conn, $q)){
    echo 1;
}else{
    echo -1;
}



?>