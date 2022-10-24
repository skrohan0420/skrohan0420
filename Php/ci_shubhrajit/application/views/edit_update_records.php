<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<?php
	foreach ($data as $result) {

	?>

<form method="post">
		Name:<input type="text" name="myname" value="<?php echo $result->name?>"><br>
		Email:<input type="text" name="myemail" value="<?php echo $result->email?>"><br>
		Mobile:<input type="text" name="mymobile" value="<?php echo $result->mobile?>"><br>
		Address:<input type="text" name="myaddress" value="<?php echo $result->address?>"><br>
		<input type="submit" name="update" value="Update">
</form>

	<?php
	}
	?>

</body>
</html>