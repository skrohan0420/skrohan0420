<?php

$server = "localhost";
$username = "root";
$password = "";
$db = 'registration';

$con = mysqli_connect($server, $username, $password, $db);

if ($con) {
    echo "Database Connected Successful";
} else {
    die("Connection Unsuccessful" . mysqli_connect_error());
}
