<?php 
	
	$studentId = $_POST['id'];


	
	$conn = mysqli_connect('localhost','root','','ajax') or die('connect_error');

	$sql = "SELECT * FROM students WHERE id ={$studentId}";
	$res = mysqli_query($conn, $sql) or die('connect_error');
	$output = '';

	if (mysqli_num_rows($res) > 0){
		
		
		while($row = mysqli_fetch_assoc($res)){
			$output .= '<tr>
							<td class="label">First Name</td>
							<td>
								<input type="text" id="edit-fname" value="'. $row['firstName'] .'">
								<input type="text" id="edit-id" hidden value="'. $row['id'] .'">
							</td>
						</tr>
						<tr>
							<td class="label">Last Name</td>
							<td>
								<input type="text" id="edit-lname" value="'. $row['lastName'] .'">
							</td>
						</tr>
						<tr>
							<td id="btnBx">
								<input type="submit" id="edit-submit" value="save">
							</td>
						</tr>';
							
		}

		mysqli_close($conn);

		echo $output;


	}else{

		echo '<h1>Nothing Found</h1>';

	}

?>
