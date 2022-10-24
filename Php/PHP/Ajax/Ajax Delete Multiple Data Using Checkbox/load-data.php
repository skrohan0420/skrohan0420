<?php 
$conn = mysqli_connect("localhost","root","","test2");

$sql = "SELECT * FROM students";
$query = mysqli_query($conn , $sql);

$output = "";

if (mysqli_num_rows($query) > 0) {
	$output .= "<table>" .
					"<tr>".
						"<th></th>".
						"<th>ID</th>".
						"<th>Name</th>".
						"<th>Age</th>".
						"<th>City</th>".
					"</tr>";
	while($row = mysqli_fetch_assoc($query)){
		$output .= "<tr>".
						"<td align='center'>".
							"<input type='checkbox' value='{$row["id"]}'>".
						"</td>".
						"<td>{$row['id']}</td>".
						"<td>{$row['student_name']}</td>".
						"<td>{$row['age']}</td>".
						"<td>{$row['city']}</td>".
					"</tr>";
	}
	$output .= "</table>";
	echo $output;
}else{
	echo "<h2>No Record Found</h2>";
}	


?>