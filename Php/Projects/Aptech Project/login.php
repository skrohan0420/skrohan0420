<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			font-family: sans-serif;
		}
		td{
			padding: 8px;
			text-align: center;
		}
		h1{
			color: green;
			text-decoration: underline;
		}
	</style>
</head>
<body>
	
<a href="form.php"><h4 align="left"><- Form -></h4></a>
<a href="user.php"><h4 align="right"><- Table -></h4></a>
	 <center>
	 		<h1>Login</h1>
		 	<form method="post" action="LoginAction.php">
		 		<table border="1">
			 		<tr>
			 			<td>Name</td>
			 			<td>
			 				<input type="text" name="logName">
			 			</td>
			 		</tr>
			 		<tr>
			 			<td>Password</td>
			 			<td>
			 				<input type="Password" name="logPass">
			 			</td>
			 		</tr>
			 		<tr>
			 			<td colspan="2">
			 				<input type="submit" name="" value="Log-In">
			 			</td>
			 		</tr>
		 		</table>
		 	</form>

	 </center>


</body>
</html>