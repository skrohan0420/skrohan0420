<?php
session_start();
if (!isset($_SESSION['name'])) {
    echo "you are log out";
    header('location:index.php');
} else {
    echo  "<p>or u can logout by</p><a href='logout.php'>logout</a>";
}
?>
<?php
include '_connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$fav_place = $_POST['fav_place'];


$updatequery = "update userdata set name='$name', email='$email', fav_place='$fav_place' where id=$id ";

$res = mysqli_query($con, $updatequery);

if ($res) {
    echo "Data updated successfully";
    header('location:display.php');
} else {
    echo "Data not updated";
}
