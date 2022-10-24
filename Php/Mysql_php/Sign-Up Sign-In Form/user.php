<?php 

include 'connection.php';

$sql = mysqli_query($conn, "SELECT * FROM user");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: sans-serif;
		}
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: #03a9f4;
		}
		#box{
			position: absolute;
			top: 10%;
			width: 60%;
			height: 420px;
			display: flex;
			justify-content: center;
			align-items: center;
			background: rgba(255, 255, 255, 0.2);
			box-shadow: 0 5px 45px rgba(0, 0, 0, 0.2);
		}

		#box h1{
			color: #fff;
		}

		button{
			cursor: pointer;
			padding: 10px;
			background: #fff;
			color: #03a9f4;
			font-size: 16px;
			font-weight: 500;
			border: none;
			outline: 4px solid #03a9f4;
			position: relative;
			top: 100px;
		}
		button:hover{
			background: transparent;
			color: #fff;
			outline: 4px solid #fff;
		}
		a{
			text-decoration: none;
			color: #03a9f4;
		}

	</style>
</head>
<body>

	<div id="box">
		<div id="loggd-in">


			<h1>
				<?php
					$sql_fetch = mysqli_fetch_assoc($sql);
					echo 'Hi <span style="text-decoration: underline;">'.$sql_fetch['Name']. '</span> You Are Loggd In';
				?>

			
			</h1>
			<a href="form.php">
				<button>			
					Login Page
				</button>
			</a>
		</div>
	</div>

</body>
</html>