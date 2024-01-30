<?php 
	$conn = mysqli_connect('localhost','root','','ajax') or die('DB connect error');


	$limit = 5;

	if (isset($_POST['page_no'])) {
		$page = $_POST['page_no'];
	}else{
		$page = 0;
	}

	$sql = "SELECT * FROM students LIMIT $page,$limit";
	$query = mysqli_query($conn,$sql) or die ('Query Error');


	if (mysqli_num_rows($query) > 0){
		
		$output = "";
		$output .= "<tbody>";


		while($row = mysqli_fetch_assoc($query)){
			$last_id = $row["id"];

			$output .= "<tr>
							<td>{$row['id']}</td>
							<td>{$row['firstName']} {$row['lastName']}</td>
						</tr>";
		}

		$output .= "</tbody>
					<tfoot id='btnBx'>
						<tr>
							<td colspan='2'>
								<button id='loadBtn' data-id='{$last_id}'>LOAD MORE</button>
							</td>
						</tr>
					</tfoot>
				</table>";
		echo $output;
	}else{
		echo "Data Not Found";
	}

	mysqli_close($conn);
 ?>