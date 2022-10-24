<?php
session_start();
if (isset($_SESSION['name'])) {
    echo "you are already in";
    header('location:home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>


    <form method="post" action="">
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" class="form-control" type="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" class="form-control" type="password" name="password">
        </div>
        <button type="submit" name='submit'>login</button>
    </form>
</body>
<?php

include '_connection.php';
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $searchquery = "select * from userdata where email='$email' and password='$password' ";
    $res = mysqli_query($con, $searchquery);
    $data = mysqli_fetch_array($res);
    $_SESSION['name'] = $data['name'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['fav_place'] = $data['fav_place'];
    $row = mysqli_num_rows($res);
    if ($row > 0) {
        echo "login successful";
        header('location:home.php');
    } else {
        echo 'invalid email or password';
    }
}
?>

</html>