<?php 

$p = $_POST['p'];

	if($p == strrev($p)) {
		echo "$p is palindrome";
	}
	else{
		echo "$p is not a palindrome";
	}
	
 ?>