<?php 
	
	session_start();
	if (isset($_SESSION['nme'])){
		session_destroy();
		echo "<script>location.href='session.php'</script>";
	}
	else{
		echo "<script>location.href='session.php'</script>";
	}


 ?>