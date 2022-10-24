<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body bgcolor="orange">
<form method="post" enctype="multipart/form-data">
	Name:<input type="text" name="myname"><br>
	Email:<input type="text" name="myemail"><br>
	Mobile:<input type="text" name="mymobile"><br>
	Address:<input type="text" name="myaddress"><br>
	Password:<input type="password" name="mypassword"><br>
	Gender:<input type="radio" name="gender" value="Male">Male 
		<input type="radio" name="gender" value="Female">Female
		<br>
	Language:<input type="checkbox" name="language[]" value="Bengali">Bengali
		<input type="checkbox" name="language[]" value="Hindi">Hindi
		<input type="checkbox" name="language[]" value="English">English
		<br>
	Upload_Image:<input type="file" name="myimage"><br><br>

	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>