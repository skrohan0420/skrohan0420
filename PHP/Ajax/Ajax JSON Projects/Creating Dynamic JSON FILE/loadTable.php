<?php 


if (file_exists('JSON/students_data.json')) {
	$current_data = file_get_contents('JSON/students_data.json');
	$arr_data = json_decode($current_data, true);

	$output =  "<thead>
				<tr>
					<td>Id</td>
					<td>First Name</td>
					<td>Last Name</td>
				</tr>
			</thead>";

	for ($i = 0; $i < sizeof($arr_data); $i++) { 
		$output .=	"<tr>
						<td align='center'>".$i."</td>
						<td>".$arr_data[$i]['firstName']."</td>
						<td>".$arr_data[$i]['lastName']."</td>
					</tr>";
	}	
		
	echo $output;

	

}else{
	echo "<h3>Json file not exist</h3>";
}	




?>