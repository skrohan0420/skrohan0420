<?php

	$str = "Hello world. It's a beautiful day.";

	$arr = str_split($str);
	$arr2 = str_split($str,3);

	echo '<pre>';
	print_r($arr);
	print_r($arr2);
	echo '</pre>';

?> 