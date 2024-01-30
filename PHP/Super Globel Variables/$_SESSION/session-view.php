<?php 
session_start();


echo "<pre>";
print_r($_SESSION);
echo "</pre>";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

	if (isset($_SESSION['color'])) {
		echo "fav color : " . $_SESSION['color'] . "<br>";
	}

	 ?>
	 <a href="session-destroy.php">session destroy</a>
</body>
</html>