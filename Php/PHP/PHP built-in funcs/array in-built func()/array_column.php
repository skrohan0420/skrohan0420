<?php 
$arr = array(
	array(
		'id' => 2001,
		'name' => 'Rohan',
		'work' => 'Manegar'		
	),
	array(
		'id' => 2002,
		'name' => 'Akash',
		'work' => 'Pilot'				
	),
	array(
		'id' => 2003,
		'name' => 'Rittik',
		'work' => 'Worker'				
	)

);


$narr = array_column($arr, 'name');
$assosarr = array_column($arr, 'name', 'id');


echo '<pre>';
print_r($narr);
print_r($assosarr);
echo '</pre>';

 ?>