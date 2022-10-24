<?php 



$a = "i love This php, i Also love php!";



// strstr(string,search,before_search)

echo strstr($a, "php");
echo "<br>";
echo strstr($a, "php",true);
echo strstr($a, "Php",true); //returns Nothing

 ?>