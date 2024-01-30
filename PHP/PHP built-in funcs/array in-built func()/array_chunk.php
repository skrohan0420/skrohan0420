<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

	$a = array('a','b','c','d','f','g','h','i');

	$b = array_chunk($a, 4,false);
	$c = array_chunk($a, 4,true);

		echo '<pre>';
		print_r($b);
		print_r($c);
		echo '</pre>';
	 ?>

</body>
</html>