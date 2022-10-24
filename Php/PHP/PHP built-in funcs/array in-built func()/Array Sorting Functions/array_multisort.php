<?php 
$a = array('orange', 'banana');
$b = array('lemon', 'carrot');

array_multisort($a,$b);

echo '<pre>';
print_r($a);
echo '</pre>';

echo '<pre>';
print_r($b);
echo '</pre>';
?>