<!DOCTYPE html>
<html>
<head>
	<title>abc</title>
</head>
<body bgcolor="orange">
	<h1>This is my 2nd Page</h1>
This is codeigniter
<br>
<br>
Enter Name:<input type="text" name="name">
Enter Email:<input type="text" name="email">
Enter Mobile:<input type="text" name="mobile">
<input type="submit" name="submit" value="Submit"><br><br>

<a href="<?php echo base_url().'index.php/Mycontroller/first'?>">Click 1</a>
<br>
<a href="<?php echo base_url().'index.php/Mycontroller/third'?>">Click 3</a>
</body>
</html>