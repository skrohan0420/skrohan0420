<?php 


if (isset($_FILES['img'])) {
	echo "img Uploaded Successfully <br>";

	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";


	$file_name =  $_FILES['img']['name'];
	$file_size =  $_FILES['img']['size'];
	$file_tmp  =  $_FILES['img']['tmp_name'];
	$file_type =  $_FILES['img']['type'];




	move_uploaded_file($file_tmp, 'uploads/'. $file_name);
}


?>
<html>
<body>


	<form method="POST"  enctype="multipart/form-data">
		
		<input type="file" name="img"><br><br>

		<input type="submit" >

	</form>

</body>
</html>