 <?php
 include 'connection.php';
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	i{
		color: red;
	}
</style>
<body>
<?php



?>




<h1><i><?php echo $_SESSION['name']?></i></h1>
<h1><i><?php echo $_SESSION['email']?></i></h1>
<h1><i><?php echo $_SESSION['fav']?></i></h1>
<h1><i><?php echo $_SESSION['password']?></i></h1>
<h1><a href="logout.php">LOG_OUT</a></h1>
</body>
</html>
