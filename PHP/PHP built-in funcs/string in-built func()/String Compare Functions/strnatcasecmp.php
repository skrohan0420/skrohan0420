<?php 
// s1 - s2
// 
// 0 -> Equal
// - -> s1 is less than s2
// + -> s1 is greater than s2

// case sensitive


echo strnatcasecmp("2hello world!","10hello world!");
echo "<br>";
echo strnatcasecmp("2hello world!","2hello WORLD!");
echo "<br>";
echo strnatcasecmp("hello world!","hello world!");






 ?>