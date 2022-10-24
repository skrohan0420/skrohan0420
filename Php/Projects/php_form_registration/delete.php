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
include  "_connection.php";

$id =  $_GET['id'];

$deletequery = "delete from userdata where id=$id";
$res = mysqli_query($con, $deletequery);

if ($res) {
    echo 'Delete Successfully';
    header('location: display.php');
} else {
    echo 'Data not Deleted';
}
