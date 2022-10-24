<?php 

$a = ["orange","banana","apple"];

function myFunc($n,$m){

	return $n . "-" . $m;

}
 



$b = array_reduce($a, 'myFunc','lemon');
$c = array_reduce($a, 'myFunc');



echo '<pre>';
print_r($b);
echo '<br>';
print_r($c);
echo '</pre>';
 ?>