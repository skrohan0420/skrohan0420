<?php 

$str = "Hello I am 'Sk Rohan'";

$newstr = addslashes($str);

echo $newstr . '<br>';
echo stripslashes($newstr);

 ?>