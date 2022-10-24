<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

	include 'conn.php';

	$sql = mysqli_query($conn, "SELECT * FROM login");

	?>

	<center>
		
		<table border="1">
			
			<tr>
				<th>Sl No.</th>
				<th>User Id</th>
				<th>Name</th>
				<th>Number</th>
				<th>Password</th>
				<th>Delete</th>
			</tr>




<?php 
	$sl = 0;
	while ($sql_fetch = mysqli_fetch_assoc($sql)){
?>
	<tr>
		<td><?php echo $sl+1; $sl++; ?></td>
		<td><?php echo $sql_fetch['id']; ?></td>
		<td><?php echo $sql_fetch['Name'];?></td>
		<td><?php echo $sql_fetch['Number']; ?></td>
		<td><?php echo $sql_fetch['Password']; ?></td>
		<td>
			<a href="delete.php?del=<?php echo $sql_fetch['id'] ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>

		</table>
	</center>









	<style type="text/css">
		*{
			font-family: sans-serif;
		}
		td{
			text-align: center;
			color: green;
			padding: 10px;
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
</body>
</html>