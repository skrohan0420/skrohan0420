<?php 

$a = "rohan";
$b = "admin";

session_start();
	if (isset($_SESSION['nme'])) {
		echo "Welcome Home " . $_SESSION['nme'];
		echo "<ul>
				<li><a href='Profile.php'>Profile</a></li>
				<li><a href='edit.php'>Edit</a></li>
			</ul>";
		echo "<br> <a href='logout.php'><button>logout</button></a>";
	}
	else{
		if ($_POST['nme'] == $a && $_POST['pass'] == $b) {
			$_SESSION['nme'] = $a;
			echo "<script>location.href='hello.php'</script>";
		}
		else{
			echo "<script>alert('Wrong username or Password')</script>";
		}
	}


?>