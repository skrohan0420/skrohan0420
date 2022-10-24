<?php 

include 'connection.php';

$query = 'SELECT * FROM pdo';
$data = $conn->query($query);

?>
<center>
	<table border="1">
		

		<th>user id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Age</th>
		<th colspan="2">Action</th>
		<tr>
			
			<?php 

			while ($result=$data->fetch(PDO::FETCH_ASSOC)){
				
				echo '<tr>';
				echo '<td>' .$result['id'].'</td>';
				echo '<td>' .$result['name'].'</td>';
				echo '<td>' .$result['mail'].'</td>';
				echo '<td>' .$result['add'].'</td>';
				echo "<td><a href='edit.php?ep=$result[id]'>edit</a></td>";
				echo "<td><a href='delet.php?ep=$result[id]'>delete</a></td>";
				echo '</tr>';
				

			}


			 ?>



		</tr>



	</table>
</center>