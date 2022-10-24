<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<?php 

		$cars = array (
				  array("cat",true,0),
				  array("dog",true,0),
				  array("wolf",true,0),
				  array("lion",true,0)
				);


		for ($row = 0; $row < 4; $row++) {
			echo "<p>Row number $row</p>";
			echo "<ol>";

				for ($col = 0; $col < 3; $col++) {
				   echo "<li>".$cars[$row][$col]."</li>";
				}
			  	echo "</ol>";
		}
	 ?>


</body>	
</html>