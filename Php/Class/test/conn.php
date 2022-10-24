<?php 

$conn = mysqli_connect('localhost','root','','test') OR die(mysqli_error());
if ($conn) {
	echo '<h3 style="color:green; text-align:center;">Database Connected</h3>';
}
else{
	echo 'Error Something Bad Happend.........';
}

 ?>