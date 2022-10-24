<?php

	$str = "Hello world. It's a beautiful day.";

	echo '<pre>';
	print_r (explode(" ",$str));

	echo "<br>";

	// The explode() function breaks a string into an array.

	// Note: The "separator" parameter cannot be an empty string.

	// Note: This function is binary-safe.




	// Using the limit parameter to return a number of array elements
	$str = 'one,two,three,four';
	
	// zero limit
	print_r(explode(',',$str,0));
	print "<br>";

	// positive limit
	print_r(explode(',',$str,2));
	print "<br>";

	// negative limit 
	print_r(explode(',',$str,-1));
	echo '</pre>';

?> 