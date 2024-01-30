<?php 

	
	$conn = mysqli_connect('localhost','root','','ajax') or die('connect_error');

	$limit_per_page = 4;
	$page = "";


	if (isset($_POST['page_no'])) {
		$page = $_POST['page_no'];
	}else{
		$page = 1;
	}

	$offset = ($page - 1) * $limit_per_page;



	$sql = "SELECT * FROM students LIMIT {$offset},{$limit_per_page}";

	$res = mysqli_query($conn, $sql) or die('connect_error');

	$output = "";

	if(mysqli_num_rows($res) > 0){

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


		$sql_total = "SELECT * FROM students";
		$records = mysqli_query($conn , $sql_total) or die('Query error');
		$total_records = mysqli_num_rows($records);
		$total_pages = ceil($total_records/$limit_per_page);


		$output .= '<div id="pagination">';

		for($i = 1; $i <= $total_pages; $i++){
			if ($i == $page) {
				$class_name = "active";
			}else{
				$class_name = "";

			}
			$output .= "<a class='{$class_name}' id='{$i}' href=''>{$i}</a>";
		}
		$output .= '</div>';

		

		echo $output;

	}else{
		echo 'Nothing Found';
	}


 ?>