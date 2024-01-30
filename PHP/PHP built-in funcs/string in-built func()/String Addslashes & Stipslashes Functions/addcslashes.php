<?php 

$str = "Hello I am 'Sk Rohan'";



echo addcslashes($str, "SR") . '<br>';
echo addcslashes($str, "A..Z") . '<br>';
echo addcslashes($str, "a..z") . '<br>';
echo addcslashes($str, "a..f") . '<br>';

 ?>