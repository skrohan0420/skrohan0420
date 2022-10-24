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
		<center><input type="submit" name="submit" value="Submit"></center>
		<a href="<?php echo base_url().'index.php/Session_Controller/savedata'?>">New registration</a>
	</form>
</center>
</body>
</html>