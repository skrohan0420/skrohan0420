<!DOCTYPE html>
<html>
<head>
	<title>
		LogIn
	</title>
</head>
<body bgcolor="orange">
<center>
	<form method="post">
		Email:<input type="email" name="myemail"><br>
		Password:<input type="password" name="mypassword"><br><br>

		<input type="submit" name="submit" value="Login"><br>
		<a href="<?php echo base_url().'index.php/MultiLog/savedata'?>">New Registration</a>
	</form>
</center>
</body>
</html>