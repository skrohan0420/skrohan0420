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
    <title>Display data</title>
</head>

<body>

    <div class="main-div">
        <h1>List of all user</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>fav_place</th>
                    </thead>
                    <tbody>
                        <?php
                        include "_connection.php";
                        $selectquery = "select * from userdata";
                        $res = mysqli_query($con, $selectquery);
                        $num = 0;
                        while ($data = mysqli_fetch_array($res)) {
                            $num++;
                        ?>

                            <tr>
                                <td><?php echo $num ?></td>
                                <td><?php echo $data['name'] ?></td>
                                <td><?php echo $data['email'] ?></td>
                                <td><?php echo $data['fav_place'] ?></td>
                                <td><a href="update.php?id=<?php echo $data['id'] ?>">update</a></td>
                                <td><a href="delete.php?id=<?php echo $data['id'] ?>">delete</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

</body>

</html>