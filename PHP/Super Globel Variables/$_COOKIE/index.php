<?php 


// 1) Create Cookie
// setcookie(name,value,expire,path,domain,secure,httponly)

// 2) View Cookie Value
// $_COOKIE[name]


$cookie_name = "user";
$cookie_val = "Rohan";


setcookie($cookie_name, $cookie_val, time()+(3600 * 24), "/");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>COOKIE</title>
</head>
<body>


	<?php 

	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";



	if (!isset($_COOKIE[$cookie_name])) {
		echo "cookie_name NOT Set";
	}else{
		echo $_COOKIE[$cookie_name];

	}
	 ?>
	

</body>
</html>