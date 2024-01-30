<?php 



$str = "hello world";

echo str_pad($str, 20,".");
echo "<br>";
echo str_pad($str, 20,"+=");
echo "<br>";
echo str_pad($str, 20,".", STR_PAD_LEFT);
echo "<br>";
echo str_pad($str, 20,".", STR_PAD_BOTH);


?>