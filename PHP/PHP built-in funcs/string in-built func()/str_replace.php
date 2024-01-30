<?php 


// find				Required. Specifies the value to find
// replace			Required. Specifies the value to replace the value in find
// string			Required. Specifies the string to be searched
// count			Optional. A variable that counts the number of replacements
	



	echo str_replace("world","Peter","Hello world!").'<br>';


	$arr = array("blue","red","green","yellow");
		print_r(str_replace("red","pink",$arr,$i));
		echo "Replacements: $i" . '<br>';


	$find = array("Hello","world");
	$replace = array("B");
	$arr = array("Hello","world","!");
		print_r(str_replace($find,$replace,$arr));
	
 ?>