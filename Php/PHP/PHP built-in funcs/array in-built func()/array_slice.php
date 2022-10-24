<?php 

	$a = array('a','b','c','d','e');

	$b = array_slice($a, 1,2, true);
	$d = array_slice($a, 1,4, false);


	echo '<pre>';
	print_r($b);
	print_r($d);
	echo '</pre>';


 ?>