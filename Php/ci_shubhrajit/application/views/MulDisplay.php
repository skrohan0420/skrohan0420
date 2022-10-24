<!DOCTYPE html>
<html>
<head>
	<title>Records</title>
</head>
<body bgcolor="orange">
<table border="2">
	
	<tr>
		<th>Sl_No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>U_Type</th>
	</tr>
	<?php
	$i=1;
	foreach ($data as $result) {
		echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$result['name']."</td>";
			echo "<td>".$result['email']."</td>";
			echo "<td>".$result['utype']."</td>";
		echo "</tr>";
		$i++;
	}
		
	?>
</table>
<a href="<?php echo base_url().'index.php/Session_Controller/logout'?>">Logout</a>
</body>
</html>