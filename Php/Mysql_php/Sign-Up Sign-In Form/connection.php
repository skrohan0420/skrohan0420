<?php 

$conn = mysqli_connect('localhost','root','','registration') OR die(mysqli_error());
	
if ($conn) {
	// echo '<h4 style="color:green; text-align:center;">Database Connected</h4>';
}
else{
	echo 'Error Something Bad Happend.........';
}

?>