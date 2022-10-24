<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<center>
		<form action="signupAction.php" method="post" autocomplete="on"> 	
			<table border="1">
				<tr>
					<td colspan="2" align="center">
						<span>Sign Up Form</span>
					</td>
				</tr>
				<tr>
					<td>NAME</td>
					<td><input type="text" name="regname"></td>
				</tr>
				<tr>
					<td>NUMBER</td>
					<td><input type="number" name="regnum"></td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td><input type="password" name="regpass"></td>
				</tr>
				<tr>
					<td colspan="2">
						<center>
							<input type="submit" name="" value="Sign Up">
						</center>
					</td>
				</tr>
			</table>
		</form>
	</center>



<style type="text/css">
	
	td{
		padding: 10px;
	}
	span{
		font-size: 2em;
		color: blue;
	}
	input[type="submit"]{
		transform: scale(1.3);
	}

</style>
</body>
</html>