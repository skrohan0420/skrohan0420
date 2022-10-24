<?php 
$conn = mysqli_connect("localhost","root","","ajax");



if ($_POST['type'] == "") {



	$sql = "SELECT * FROM country_tb";
	$query = mysqli_query($conn,$sql);
	$str = "";

	while ($row = mysqli_fetch_assoc($query)){
		$str .=  "<option value='{$row["cid"]}'>{$row['cname']}</option>";
	}
	echo $str;



}else if($_POST['type'] == "state"){



	$sql = "SELECT * FROM state_tb WHERE country = {$_POST['id']} ";
	$query = mysqli_query($conn,$sql);
	$str = "";

	while ($row = mysqli_fetch_assoc($query)){
		$str .=  "<option value='{$row["sid"]}'>{$row['sname']}</option>";
	}
	echo $str;



}




 ?>