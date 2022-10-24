<?php 

	$a = $_POST['i1'];  
	$b = $_POST['i2']; 

	$c = $a;  
	$a = $b;  
	$b = $c; 
	 
	echo "After swapping:<br><br>";  
	echo "a =".$a."  b=".$b;  

 ?>