<?php 
$arr1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$arr2 = array("a"=>"red","f"=>"green","d"=>"purple");
$arr3 = array("a"=>"red","b"=>"black","h"=>"yellow");

	// Finds common value betwin arrays  
	

$newArr = array_diff_assoc($arr1, $arr2, $arr3);


echo '<pre>';
print_r($newArr);
echo '</pre>';

 ?>
