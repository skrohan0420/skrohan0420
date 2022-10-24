<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

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
		}
		section{
			outline: 2px solid gray;
			padding: 30px;
			height: 400px;
			width: fit-content;
		}

		section h1{
			width: fit-content;
			margin: 0px auto 0px auto;
			font-size: 50px;
			border-bottom: 4px solid gray;
			color: gray;
		}
		section div{
			/*outline: 1px solid gray;*/
			margin: 20px 0px 20px 0px;
			display: grid;
		}
		section div h2{
			color: gray;
		}
		section div a{
			display: grid;
			text-align: center;
			outline: 1px solid gray;
			padding: 20px;
			margin: 10px 0px 0px 0px;
		}
	</style>

</head>
<body>


	<section>
		
		<h1>Welcome</h1>

		<div class="signUp">
			<h2>New User ?<a href="signUp.php">Sign-Up</a></h2>
		</div>
		<div class="logIn">
			<h2>All Ready Have An Account <a href="signIn.php">log-In</a></h2>
		</div>

	</section>


</body>
</html>