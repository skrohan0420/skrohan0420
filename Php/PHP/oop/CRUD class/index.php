<?php 


include 'database.php';

$obj = new Database();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<form action="saveData.php" method="post">
		
		<label>Name :</label>
		<input type="text" name="sname"><br><br>
		<label>Age :</label>
		<input type="number" name="sage"><br><br>
		<label>City :</label>

		<select name="scity">
				<?php 

				$obj->select('citytb');
				$result = $obj->getResult();

				foreach($result as list("cid"=>$cid,"cname"=>$cname))
					echo "<option value='$cid'>$cname</option>";
				?>
		</select>

	<input type="submit" value="SAVE" name="">

	</form>


</body>
</html>