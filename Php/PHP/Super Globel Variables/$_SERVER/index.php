<?php 

// 		using $_SERVER u can get info about

// 		. HTTP Connection
// 		. server Connection
// 		. HOST Connection
// 		. URL Connection

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		
		NAME : <input type="text" name="name"><br><br>
		AGE : <input type="text" name="age"><br><br>

		<input type="submit" name="submit" value="Save">

	</form>

	<?php 

	if (isset($_POST['submit'])) {
		echo $_POST['name']."<br>";
		echo $_POST['age']."<br>";
	}

	 ?>


</body>
</html>
