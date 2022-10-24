<?php 

$arr1 = array("a"=>array("red"),"b"=>array("green","pink"));
$arr2 = array("a"=>array("yellow"),"b"=>array("black"));


$newrr = array_replace_recursive($arr1, $arr2);

echo '<pre>';
print_r($newrr) ;
echo '</pre>';


 ?>