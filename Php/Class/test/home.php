<?php 

include 'conn.php';

$sql = mysqli_query($conn, "SELECT * FROM hotel")

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		
		th,td{
			text-align: center;
			padding: 8px;
		}


	</style>
</head>
<body>


	

	<center>
		

		<table border="1">
			
			<tr>	
				<th>SL No.</th>
				<th>Hotel Id</th>
				<th>Hotel Name</th>
				<th colspan="">available rooms</th>
			</tr>

<?php 

	$sl = 0;

	while($sql_fetch = mysqli_fetch_assoc($sql)){


 ?>
			<tr>
				<td><?php echo $sl+1; $sl++?></td>
				<td><?php echo $sql_fetch['id'] ?></td>
				<td><?php echo $sql_fetch['hotel'] ?></td>
				<td><?php echo $sql_fetch['rooms'] ?></td>
				<td>
					<a href="book.php?book=<?php echo $sql_fetch['id'] ?>">Book Rooms</a>
				</td>
				<td>
					<a href="AddRooms.php?bookadd=<?php echo $sql_fetch['id'] ?>">Add Rooms</a>
				</td>
			</tr>
<?php 
}

 ?>

		</table>


	</center>




</body>
</html>