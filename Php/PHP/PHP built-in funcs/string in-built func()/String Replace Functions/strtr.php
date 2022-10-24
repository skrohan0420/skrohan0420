<?php 

$a = "i love This php, i Also love php!";

$rep = ["php" => "Python", "love" => "hate"];


echo strtr($a,"ph","hp" );
echo "<br>";
echo strtr($a, $rep);



 ?>