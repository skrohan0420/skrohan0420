<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Home</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
			font-family: sans-serif;
		}
	
		body{
			width: 100vw;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		section{
			outline: 2px solid gray;
			padding: 30px;
			height: fit-content;
			width: fit-content;
		}
		h1{
			font-size: 30px;
			margin: 20px 0px 0px 0px;
		}
		h2{
			font-size: 20px;
			color: green;
			height: 20px;
			width: 100%;
			margin: 10px 0px 0px 0px;

		}
		div{
			margin: 20px;
		}
		button{
			width: 150px;
			height: 30px;
			margin: 20px 0px 0px 0px;
			font-size: 20px;
			outline: 1px solid gray;
			border: none;
			cursor: pointer;
			font-size: 15px;
		}
	</style>
</head>
<body>
	<?php 
	include 'conn.php';

	$pass = $_REQUEST['pass'];

	$sql = mysqli_query($conn,"SELECT * FROM users WHERE password ='$pass'");

	$sql_fetch = mysqli_fetch_assoc($sql);


	?>

	<section>
		
		<h1>Your Name: </h1>
		<h2><?php echo $sql_fetch['name']; ?></h2>
		<h1>Your Phone Number:</h1>
		<h2> <?php echo $sql_fetch['number']; ?></h2>
		<h1>Your email: </h1>
		<h2><?php echo $sql_fetch['email']; ?></h2>
		<h1>Your Password: </h1>
		<h2><?php echo $sql_fetch['password']; ?></h2>

		<div>
			<a href="delete.php?ep=<?php echo $sql_fetch['id'] ?>"><button>Delete Your Account</button></a>
			<a href="edit.php?ep=<?php echo $sql_fetch['id'] ?>"><button>Edit Your Account</button></a>
		</div>
	</section>

	<a href="index.php"><button>LogOut</button></a>

</body>
</html>