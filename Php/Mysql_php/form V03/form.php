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
		table{
			position: relative;
			top: 50%;
			left: 50%;
			transform: translate(-50%);
		}
	</style>
</head>
<body>

	

	<a href="user.php"><h4 align="left"><- Table -></h4></a>
	<a href="login.php"><h4 align="right"><- Login -></h4></a>
	<main>

		
		<h2 align="center">Welcome To The Registration Form</h2>


		<form method="post" enctype="multipart/form-data" action="action.php">
			<table border="1">
				<tr>
					<td colspan="2" align="center">
						User Registration
					</td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="Email" name="mail"></td>
				</tr>
				<tr>
					<td>Mobile No.</td>
					<td><input type="number" name="phno"></td>
				</tr>
				<tr>
					<td>PassWord</td>
					<td><input type="Password" name="pass"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="add"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender" value="Male" checked>Male
						<input type="radio" name="gender" value="feMale">Female
					</td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td><input type="date" name="dob"></td>
				</tr>
				<tr>
					<td>Course</td>
					<td>
						<select name="course">
							<option>--select--</option>
							<option value="html">HTML</option>
							<option value="css">CSS</option>
							<option value="js">JAVASCRIPT</option>
							<option value="jq">Jquary</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Language</td>
					<td>
						<input type="checkbox" name="lang[]" value="Bengali">Bengali
						<input type="checkbox" name="lang[]" value="Hindi">Hindi
						<input type="checkbox" name="lang[]" value="English">English
					</td>
				</tr>
				<tr>
					<td>Uplode Image</td>
					<td><input type="file" name="img"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="submit">
						<input type="reset" name="submit" value="reset">
					</td>	
				</tr>
			</table>
		</form>

	</main>
</body>
</html>