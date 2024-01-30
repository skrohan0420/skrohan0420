<?php 


$str = "The world is beautiful.";
echo $str;
echo "<br>";
echo "<br>";
echo "<br>";

echo wordwrap($str, 4, "<br>",false);
echo "<br>";
echo "<br>";
echo "<br>";

echo wordwrap($str, 4, "<br>",true); //deafult




?>