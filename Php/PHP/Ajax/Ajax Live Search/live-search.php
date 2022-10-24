<?php 


	$search_val = $_POST['search'];


	$conn = mysqli_connect('localhost','root','','ajax') or die('connect_error');

	$sql = "SELECT * FROM students WHERE firstName LIKE '%{$search_val}%' OR lastName LIKE '%{$search_val}%'";

	$res = mysqli_query($conn, $sql) or die('connect_error');

	$output = '';

	if (mysqli_num_rows($res) > 0){
		
		$output .= '<table>
					<thead>
						<tr>
							<td>Id</td>
							<td>Name</td>
						</tr>
					</thead>
					<tbody>';

		while($row = mysqli_fetch_assoc($res)){
			$output .= "<tr class='tr'>
							<td>{$row['id']}</td>
							<td>{$row['firstName']} {$row['lastName']}</td>
							
						</tr>";
							
		}
		$output .= 	"</tbody></table>";

		mysqli_close($conn);

		echo $output;


	}else{

		echo '<h1>Nothing Found</h1>';

	}



 ?>