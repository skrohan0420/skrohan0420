<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign-in</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
			font-family: sans-serif;
		}
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
		  	-webkit-appearance: none;
		  	margin: 0;
		}

		body{
			width: 100vw;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		form{
			outline: 2px solid gray;
			padding: 20px 40px 20px 40px;
			height: fit-content;
			width: fit-content;
		}
		.form{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			margin: 20px 0px 0px 0px;
		}
		.form p{
			text-align: left;
			width: 100%;
			margin: 20px 0px 5px 0px;
			font-size: 20px;
		}
		form h1{
			width: fit-content;
			margin: 0px auto 0px auto;
			font-size: 50px;
			border-bottom: 4px solid gray;
			color: gray;
		}
		form input{
			width: 300px;
			height: 30px;
			font-size: 20px;
		}
		form input[type="submit"]{
			width: 150px;
			height: 30px;
			margin: 40px 0px 0px 0px;
			font-size: 20px;
			outline: 1px solid gray;
			border: none;
			cursor: pointer;
		}
		form input[type="submit"]:hover{
			background: #333;
			color: white;
		}
	</style>
</head>
<body>

	<form action="signInAction.php" method="POST">
		
		<h1>Log-in</h1>

		<div class="form">
			
			

			<p>Your Email</p>
			<input type="email" name="email" >

			<p>Password</p>
			<input type="Password" name="pass" >

			<input type="submit" value="Sign-Up">
		</div>

	</form>

</body>
</html>