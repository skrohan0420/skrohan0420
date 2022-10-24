<?php 

$a = array('a','b','c','d','e');

$b = array_fill_keys($a, "test");

echo '<pre>';

print_r($b);

echo '</pre>';




?>