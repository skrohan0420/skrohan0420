<?php 

	
	$conn = mysqli_connect('localhost','root','','ajax') or die('connect_error');

	$sql = "SELECT * FROM students";
	$res = mysqli_query($conn, $sql) or die('connect_error');
	$output = '';

	if (mysqli_num_rows($res) > 0){
		
		$output .= '<table>
					<thead>
						<tr>
							<td>Id</td>
							<td>Name</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>';

		while($row = mysqli_fetch_assoc($res)){
			$output .= "<tr class='tr'>
							<td>{$row['id']}</td>
							<td>{$row['firstName']} {$row['lastName']}</td>
							
							<td>
								<button class='edtBtn' data-eid='{$row["id"]}'>
									EDIT
								</button>
							</td>
							<td>
								<button class='dltBtn' data-id='{$row["id"]}'>
									DELETE
								</button>
							</td>
						</tr>";
							
		}
		$output .= 	"</tbody></table>";

		mysqli_close($conn);

		echo $output;


	}else{

		echo '<h1>Nothing Found</h1>';

	}

?>