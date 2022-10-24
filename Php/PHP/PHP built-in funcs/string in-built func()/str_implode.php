<?php


// 	The implode() function returns a string from the elements of an array.

// Note: The implode() function accept its parameters in either order. However, for consistency with explode(), you should use the documented order of arguments.

// Note: The separator parameter of implode() is optional. However, it is recommended to always use two parameters for backwards compatibility.

// Note: This function is binary-safe.


	$arr = array('Hello','World!','Beautiful','Day!');
		echo implode(" ",$arr)."<br>";
		echo implode("+",$arr)."<br>";
		echo implode("-",$arr)."<br>"; 
		echo implode("X",$arr);

?>