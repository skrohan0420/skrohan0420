<?php 

include 'connection.php';

$uid = $_REQUEST['ep'];
$query = "SELECT *FROM pdo where id=:pid";
$data = $conn->prepare($query);
$data->execute(array(":pid"=>$uid));


while ($result = $data->fetch(PDO::FETCH_ASSOC)) {
 	$name=$result['name'];
 	$email=$result['mail'];
	$add=$result['add'];
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>



	<form method="post" action="editAction.php">
		
		ID:<input type="text" name="uid" value="<?php echo $uid ?>" readonly><br>
		name:<input type="text" name="myname" value="<?php echo $name ?>" ><br>
		email:<input type="text" name="myemail" value="<?php echo $email ?>" ><br>
		address:<input type="text" name="myadd" value="<?php echo $add ?>"><br>

		<input type="submit" name=" " value="submit">

	</form>

</body>
</html>
