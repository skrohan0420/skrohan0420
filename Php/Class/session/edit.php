<?php 

session_start();
	if (isset($_SESSION['nme'])) {
		echo "Edit Your Profile " . $_SESSION['nme'];
		echo "<br><a href='logout.php'><button>logout</button></a>";
		echo "<a href='hello.php'><button>home</button></a>";
	}


 ?>