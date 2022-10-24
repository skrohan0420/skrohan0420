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
	</style>
</head>
<body>
	<?php 
		include 'connection.php';

		$uid = $_REQUEST['ep'];

		$sql = mysqli_query($conn,"SELECT * FROM new_table WHERE id ='$uid'");

		$sql_fetch = mysqli_fetch_assoc($sql);
	?>

	<center>
		
		<div align="left">
			<a href="user.php"><b><- All User -></b></a>
		<center>
			<form method="post" enctype="multipart/form-data" action="editAction.php">
				<table border="1">
					
					<tr>
						<td colspan="2" align="center">
							User Registration
						</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>
							<input type="text" name="name" value="<?php echo $sql_fetch['Name'] ?>">
							<input type="text" name="uid" value="<?php echo $uid ?>" hidden>
						</td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="Email" name="mail" value="<?php echo $sql_fetch['Email'] ?>"></td>
					</tr>
					<tr>
						<td>Mobile No.</td>
						<td><input type="number" name="phno" value="<?php echo $sql_fetch['PhoneNumber'] ?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pass" value="<?php echo $sql_fetch['Password'] ?>"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" name="add" value="<?php echo $sql_fetch['Address'] ?>"></td>
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
		</center>
		</div>
</body>
</html>



				