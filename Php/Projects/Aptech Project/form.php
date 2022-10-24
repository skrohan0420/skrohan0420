<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="action.php" autocomplete="off" enctype="multipart/form-data" method="post">
		<h1>
			Repo Form
		</h1>
		<div class="inputs">
			<h3>
				User Name
			</h3>
			<input type="text" name="userName" id="userName">
		</div>
		<div class="inputs">
			<h3>
				Reputation of the repo
			</h3>
			<input type="text" name="userRepo" id="userRepo">
		</div>
		<div class="inputs">
			<h3>
			 	Repo name
			</h3>
			<select name="repoName" id="repoName">
				<option> Repo name</option>
				<option value="Ios"> IOS</option>
				<option value="Android"> Android</option>
				<option value="Python"> Python</option>
				<option value="Php"> Php</option>
			</select>
		</div>
		<div class="inputs">
			<h3>
				User/repo image 
			</h3>
			<input type="file" name="img" id="img">
		</div>
		<button type="submit">submit</button>
	</form>


	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: sans-serif;
		}
		body{
			height: 100vh;
			width: 100vw;
			display: grid;
			place-items: center;
			background-color: black;
		}
		form{

			width: 400px;
			height: 500px;
			padding: 20px;
			background-color: white;
		}
		h1{
			margin: auto;
			width: 200px;
			text-align: center;
			font-size: 1.8em;
			font-weight: 200;
			border-bottom: 1px solid black;
		}
		h3{
			font-weight: 100;
			font-size: 1.3em;
			margin: 0px 0px 10px 0px;
		}
		option,select{
			border-radius: 5px;
			outline: 1px solid black;
			border: none;
			width: 100%;
			height: 30px;
			text-align: center;
			font-size: 1em;
			letter-spacing: 2px;
		}
		input{
			border-radius: 5px;
			border: none;
			outline: 1px solid black;
			width: 100%;
			height: 30px;
			font-size: 1em;

		}
		input[type="file"]{
			outline: none;
		}
		input[type="file"]:focus{
			outline: none;
			color: black;
		}
		input:focus,select:focus,option:focus{
			outline: 2px solid green;
			color: green;
		}
		input[type=file]::file-selector-button{
			border: 1px solid black;
			outline: none;
			height: 30px;	
			width: 100%;
			border-radius: 5px;
			/*outline: 1px solid black;*/
		}
		input[type=file]::file-selector-button:hover{
			cursor: pointer;
		}
		.inputs{
			width: 100%;
			/*outline: 1px solid blue;*/
			margin: 20px 0px 20px 0px;
		}
		button{
			position: absolute;
			left: 50%;
			transform: translate(-50%);
			height: 30px;
			width: 150px;
			margin-top: 20px;
			font-size: 1em;
			border: none;
			outline: 1px solid black;
			border-radius: 5px;
			background-color: rgba(0, 0, 0, 0.5);
			color: white;

		}
		button:hover{
			cursor: pointer;
		}
	</style>

</body>
</html>