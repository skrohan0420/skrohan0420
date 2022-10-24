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
			text-align: center;
			color: green;
		}
		th{
			color: black;
		}
		button{
			font-size: 3ch;
			padding: 5px;
			margin: 20px
		}
	</style>	
</head>
<body>


<?php 

include 'connection.php';

$sql = mysqli_query($conn, "SELECT * FROM new_table");

?>

<a href="form.php"><h4 align="left"><- New User -></h4></a>
<a href="login.php"><h4 align="right"><- Login -></h4></a>
<center>
	
	<h1 style="color: blue; text-decoration: underline;">Table</h1>
	<table border="1">
		<tr>
			<th>SL No.</th>
			<th>User Id</th>
			<th>Name</th>
			<th>Mail</th>
			<th>Phone Number</th>
			<th>Password</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Date Of Birth</th>
			<th>Course</th>
			<th>Language</th>
			<th>Profile Image</th>
			<th>Action</th>
		</tr>

<?php 
	$sl = 0;
	while ($sql_fetch = mysqli_fetch_assoc($sql)){
?>

		<tr>
			<td><?php echo $sl+1; $sl++; ?></td>
			<td><?php echo $sql_fetch['id']; ?></td>	
			<td><?php echo $sql_fetch['Name']; ?></td>	
			<td><?php echo $sql_fetch['Email']; ?></td>	
			<td><?php echo $sql_fetch['PhoneNumber']; ?></td>
			<td><?php echo $sql_fetch['Password']; ?></td>		
			<td><?php echo $sql_fetch['Address']; ?></td>	
			<td><?php echo $sql_fetch['Gender']; ?></td>	
			<td><?php echo $sql_fetch['Dob']; ?></td>	
			<td><?php echo $sql_fetch['Course']; ?></td>	
			<td><?php echo $sql_fetch['Language']; ?></td>
			<td>
				<center><?php echo "<img src='" . $sql_fetch['Image'] . "' height='100' width='100'>"; ?></center>
			</td>	
		
			<td>
				<a href="edit.php?ep=<?php echo $sql_fetch['id'] ?>">Edit</a>
				<a href="delet.php?del=<?php echo $sql_fetch['id'] ?>">Delete</a>
			</td>
		</tr>
	<?php } ?>
	</table>



	<a href="login.php">
		<button>
			Log Out
		</button>
	</a>
</center>


</body>
</html>
