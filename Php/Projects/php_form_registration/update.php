<?php
session_start();
if (!isset($_SESSION['name'])) {
    echo "you are log out";
    header('location:index.php');
} else {
    echo  "<p>or u can logout by</p><a href='logout.php'>logout</a>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <?php
    include '_connection.php';
    $id = $_GET['id'];
    $selectquery = "select * from userdata where id=$id";
    $showdata = mysqli_query($con, $selectquery);
    $data = mysqli_fetch_array($showdata);
    ?>
    <div class="container">
        <form method="post" action="updatedata.php">
            <input type="text" name="id" value="<?php echo $data['id']; ?>" hidden>
            <div class="form-group ">
                <label for="name">Name:</label>
                <input id="name" class="form-control" type="text" name="name" value="<?php echo $data['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" class="form-control" type="email" name="email" value="<?php echo $data['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="fav_place">Favourite Place:</label>
                <input id="fav_place " class="form-control" type="text" name="fav_place" value="<?php echo $data['fav_place']; ?>" required>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</body>

</html>