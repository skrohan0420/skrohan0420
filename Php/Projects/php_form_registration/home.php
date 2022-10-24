<?php
    session_start();
    if (!isset($_SESSION['name'])) {
        echo "you are log out";
        header('location:index.php');
    }
    else {
        echo  "<p>or u can logout by</p><a href='logout.php'>logout</a>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>welcome <?php echo $_SESSION['name'] ?> </h3>
    <h1>your email is <?php echo $_SESSION['email'] ?></h1>
    <h1>my favourite place is  <?php echo $_SESSION['fav_place'] ?></h1>
    <p>click here to display all user data</p><a href="display.php">click here </a> <span>click here to display all user data</span>
</body>

</html>