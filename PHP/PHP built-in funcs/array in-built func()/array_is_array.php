<?php 

// The is_array() function checks whether a variable is an array or not.

// This function returns true (1) if the variable is an array, otherwise it returns false/nothing.


$a = "Hello";
echo "a is " . is_array($a) . "<br>";

$b = array("red", "green", "blue");
echo "b is " . is_array($b) . "<br>";

$c = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "c is " . is_array($c) . "<br>";

$d = "red, green, blue";
echo "d is " . is_array($d) . "<br>";

 ?>