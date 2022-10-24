<!DOCTYPE html>
<html>
<head>
	<title>Records</title>
</head>
<body>
<table border="2">
	
	<tr>
		<th>Sl_No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Password</th>
		<th colspan="3">Action</th>
	</tr>
	<?php
	$i=1;
	foreach ($data as $result) {
		echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$result->name."</td>";
			echo "<td>".$result->email."</td>";
			echo "<td>".$result->mobile."</td>";
			echo "<td>".$result->address."</td>";
			echo "<td>".$result->password."</td>";

			echo "<td><a href='updatedata?updateid=".$result->user_id."'>Update</a></td>";
			echo "<td><a href='deletedata?id=".$result->user_id."'>Delete</a></td>";
			echo "<td><a href='changepassword?uid=".$result->user_id."'>Change_Password</a></td>";

		echo "</tr>";
		$i++;
	}
		
	?>
</table>
<a href="<?php echo base_url().'index.php/Session_Controller/logout'?>">Logout</a>
</body>
</html>