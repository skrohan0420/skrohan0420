<?php 


$str = "Hello <b>World</b>, Hello <i>Earth</i>";
echo $str;
echo "<br>";

echo strip_tags($str);
echo "<br>";
echo strip_tags($str,"<i>");



?>