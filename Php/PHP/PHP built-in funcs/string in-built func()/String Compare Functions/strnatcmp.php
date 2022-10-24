<?php 
// s1 - s2
// 
// 0 -> Equal
// - -> s1 is less than s2
// + -> s1 is greater than s2

// case sensitive


echo strnatcmp("2hello world!","10hello world!");
echo "<br>";
echo strnatcmp("2hello world!","2hello WORLD!");
echo "<br>";
echo strnatcmp("hello world!","hello world!");






 ?>