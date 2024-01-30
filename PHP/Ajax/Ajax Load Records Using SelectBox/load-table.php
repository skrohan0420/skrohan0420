<?php

$conn = mysqli_connect("localhost","root","","testing") or die("Connection Failed");

$sql = "SELECT * FROM students2 WHERE city = '{$_POST['city']}'";

$result = mysqli_query($conn, $sql) or die("SQl Failed");

$output = "";

if (mysqli_num_rows($result) > 0) {
	$output .= '<table border="0" width="100%" cellpadding="10px">
					<tr>
						<td width="60px">Id</td>
						<td>Name</td>
						<td width="90px">Age</td>
						<td width="90px">City</td>
					</tr>';


	while($row = mysqli_fetch_assoc($result)){
		$output .= "<tr>
						<td align='center'>{$row["id"]}</td>
						<td>{$row["student_name"]}</td>
						<td>{$row["age"]}</td>
						<td>{$row["city"]}</td>
					</tr>";
	}
	$output .= "</table>";
	echo $output;
}else{
	echo "NO RECORD FOUND";

}

?>
