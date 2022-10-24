<?php 


include 'database.php';

$obj = new Database();

$colName = "students.id,students.student_name,students.age,citytb.cname";
$join = "citytb ON students.city = citytb.cid";
$limit = 2;

$obj->select('students','*',$join,null,null,$limit);

$result = $obj->getresult();

// echo '<pre>';
// print_r($result);
// echo '</pre>';

echo '<table border="1" width="500px">
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Age</th>
			<th>City</th>
		</tr>';

foreach($result as list("id"=>$id,"student_name"=>$name,"age"=>$age,"cname"=>$city)){
	echo "<tr>
			<td>$id</td>
			<td>$name</td>
			<td>$age</td>
			<td>$city</td>
		</tr>" ;
}

echo '</table>';




$obj->pagination('students',$join,null,$limit);



?>
<a href="index.php">Insert More Data</a>