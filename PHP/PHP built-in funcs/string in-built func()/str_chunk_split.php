<?php

	$str = "Hello world. It's a beautiful day.";

	$arr = chunk_split($str,3,")(");
	$arr2 = chunk_split($str,1,"-");

	echo '<pre>';
	print_r($arr);
	echo '<br>';
	print_r($arr2);
	echo '</pre>';

?> 