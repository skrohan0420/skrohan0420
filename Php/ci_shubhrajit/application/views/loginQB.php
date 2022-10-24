<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body bgcolor="orange">
<center>
	<h1>Login Page</h1>
	<form method="post">
		Email:<input type="text" name="myemail"><br>
		Password:<input type="password" name="mypassword">
		<center><input type="submit" name="submit" value="login"></center>
		<a href="<?php echo base_url().'index.php/HelloQB/savedata'?>">New registration</a>
	</form>
</center>
</body>
</html>