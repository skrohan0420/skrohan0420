<?php 

$a = array('a','b','c','e','f','g');
	
$b = array_rand($a);
$c = array_rand($a,3);


echo '<pre>';

print_r($b);
echo '<br>';

print_r($c);
echo '<br>';

echo $a[$b];
echo '<br>';

echo $a[$c[0]];
echo $a[$c[1]];
echo $a[$c[2]];
echo '<br>';

echo '</pre>';


?>