<?php 

$str = "Hello I am 'Sk Rohan'";

$newstr = addcslashes($str, 'a..z');


echo $newstr. '<br>';
echo stripcslashes($str) . '<br>';


 ?>