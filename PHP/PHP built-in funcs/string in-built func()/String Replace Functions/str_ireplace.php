<?php 

$a = "i love This php, i Also love php!";

// str_ireplace(search, replace, subject)
// not case sensitive
// also works with arrays
$find = ["love","php"];
$rep = ["hate","Python"];

echo str_ireplace("php", "Python", $a);
echo "<br>";
echo str_ireplace($find, $rep, $a);


 ?>