<?php 
// array_map(callback, arr1)

$a = array(1,2,3,4,5);
$fruit = ["apple","banana","watermelon","coconut","carrot"];


// function square($n,$m){
// 	return "$n for $m";
// }
function square($n,$m){
	return [$n => $m];
}


$b = array_map('square', $a, $fruit);
$d = array_map(null, $a, $fruit);


echo '<pre>';

print_r($b);
print_r($d);

echo '</pre>';
?>