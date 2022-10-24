<?php 

$mark = $_POST['marks'];

if ($mark >= 60) {
    echo '<h4>Your Grade<h4>';
    echo '<h1 style="color:green;">First Division.</h4>';
}
if ($mark <= 55 && $mark >= 45) {
    echo '<h4>Your Grade<h4>';
    echo '<h1 style="color:lightgreen;">Second Division.</h4>';
}
if ($mark <= 44 && $mark >= 33) {
    echo '<h4>Your Grade<h4>';
    echo '<h1 style="color:brown;">Third Division.</h4>';
}
if ($mark <= 33) {
    echo '<h4>Your Grade<h4>';
    echo '<h1 style="color:red;">You Faild</h4>';
}

 ?>