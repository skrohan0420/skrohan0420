<?php 

$a = array('a','b','c','d','e');
$b = array(1,2);


$c = array_splice($a, 2,1);
$d = array_splice($a, 2,1,$b);
	



echo '<pre>';
print_r($a);
print_r($c);
print_r($d);
echo '</pre>';
 ?>