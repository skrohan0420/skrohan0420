<?php 



$a = "i love This php, i Also love php!";



// strstr(string,search,before_search)

echo stristr($a, "php");
echo "<br>";
echo stristr($a, "php",true);
echo "<br>";
echo stristr($a, "Php",true); //Not Case Sensitive

 ?>