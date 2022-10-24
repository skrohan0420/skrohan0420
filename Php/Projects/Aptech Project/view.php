<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 

	include 'conn.php';

	$sql = mysqli_query($conn, "SELECT * FROM Repo");

	?>

	<section>
		<table>
			<thead>
				<th>SL No.</th>
				<th>unique Id</th>
				<th>User Name</th>
				<th>Reputation of the repo</th>
				<th>Repo name</th>
				<th>User/repo image </th>
			</thead>
			
			<?php 
			$sl = 0;
			while ($sql_fetch = mysqli_fetch_assoc($sql)){
			?>

			<tr>
				<td><?php echo $sl+1; $sl++; ?></td>
				<td><?php echo $sql_fetch['id'] ?></td>
				<td><?php echo $sql_fetch['Name'] ?></td>
				<td><?php echo $sql_fetch['Repo'] ?></td>
				<td><?php echo $sql_fetch['Repo_Name'] ?></td>
				<td>
					<center>
						<?php echo  "<img src='" . $sql_fetch['Repo_Img'] . "' height='100' width='100'>";?>
					</center>	
				</td>
			</tr>
		<?php } ?>
		</table>
	</section>


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
	table{
		background-color: white;
		padding: 30px;
	}

	th,td{
		text-align: center;
		width: 150px;
		padding: 0px 20px 0px 20px;
		border: 1px solid black;
	}
	th{
		text-transform: uppercase;
		padding: 0px 0px 20px 0px;
	}

</style>
</body>
</html>