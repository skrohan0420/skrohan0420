<?php 

$num = $_POST['n'];  
$fact = 1;  
	for ($x=1; $x<=$num; $x++)   
	{  
	  $fact = $fact * $x;  
	}  
	echo "Factorial of $num is $fact"; 

 ?>