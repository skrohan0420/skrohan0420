<?php 

$a = "i love This php, i Also love php!";

// str_replace(search, replace, subject)
// case sensitive
// also works with arrays

$find = ["love","php"];
$rep = ["hate","Python"];

echo str_replace("php", "Python", $a);
echo "<br>";
echo str_replace($find, $rep, $a);


 ?>