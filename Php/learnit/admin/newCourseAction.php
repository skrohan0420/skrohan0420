<?php 


include 'dataBase.php';

$crsName = $_POST['name'];
$crsDtls = $_POST['details'];

$image = $_FILES['img']['name'];

$newimg = rand(1000,9999).'_'.$image;
$uplode_path = 'upload/'.$newimg;
$source_path = $_FILES['img']['tmp_name'];



if (move_uploaded_file($source_path, $uplode_path)){
	$user_insert = mysqli_query($learnitdb,
			"INSERT INTO 
				coursedata 
					VALUES(
						'',
						'$crsName',
						'$crsDtls',
						'$uplode_path')")
		or die(mysqli_error($learnitdb));

}

if ($user_insert){
	echo "<script>alert('Course Added');document.location='adminHome.php'</script>";
	}
else{
	echo "<p>Error </p>";
	// echo '<a href="signUp.php"><h4>Try Again</h4></a>';
}

 ?>