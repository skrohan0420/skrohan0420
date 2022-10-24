<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<?php
	foreach ($data as $result) {

	?>

<form method="post"  enctype="multipart/form-data">
		Name:<input type="text" name="myname" value="<?php echo $result['name']?>"><br>
		Email:<input type="text" name="myemail" value="<?php echo $result['email']?>"><br>
		Mobile:<input type="text" name="mymobile" value="<?php echo $result['mobile']?>"><br>
		Address:<input type="text" name="myaddress" value="<?php echo $result['address']?>"><br>
		Gender:<input type="radio" name="gender" value="Male">Male 
			<input type="radio" name="gender" value="Female">Female
			<br>
		Language:<input type="checkbox" name="language[]" value="Bengali">Bengali
			<input type="checkbox" name="language[]" value="Hindi">Hindi
			<input type="checkbox" name="language[]" value="English">English
			<br>
		Upload_Image:<input type="file" name="myimage"><br><br>

		<input type="submit" name="update" value="Update">
</form>

	<?php
	}
	?>

</body>
</html>