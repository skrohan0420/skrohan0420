<?php 

if (file_exists('JSON/students_data.json')) {
	$current_data = file_get_contents('JSON/students_data.json');
	$arr_data = json_decode($current_data, true);
	$new_data = array(
					"firstName" => $_POST['fName'],
					"lastName" => $_POST['lName']
				);
	$arr_data[] = $new_data;
	$json_data = json_encode($arr_data, JSON_PRETTY_PRINT);

	if (file_put_contents('JSON/students_data.json', $json_data)) {
		
		echo true;

	}else{
		echo false;
	}
}else{
	echo false;
}



 ?>