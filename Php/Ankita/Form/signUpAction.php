<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
		font-family: sans-serif;
	}
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}

	body{
		width: 100vw;
		height: 100vh;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}
	p{
		color: rgba(255, 0, 0, 1.0);
		font-size: 30px;
	}
	a{
		color: white;
	}
	button{
		font-size: 20px;
		color: white;
		background: rgba(255, 0, 0, .7);
		outline: none;
		border: none;
		margin: 20px;
		height: 30px;
		width: 150px;
	}
	button:hover{
		background: gray;
		outline: 2px solid rgba(255, 0, 0, .7);
	}
</style>

<?php 

include 'conn.php';



$name = $_POST['name'];
$email = $_POST['email'];
$ph = $_POST['ph'];
$setPAss = $_POST['setPass'];
$conPass = $_POST['conPass'];

$pass = md5($conPass);


if($setPAss != $conPass){

	echo '<p>Passwords didn not Match </p>
		  <button>
		  	<a href="signUp.php"> Try Again</a>
		  </button>';

}
else{

	$q = mysqli_query($conn,"INSERT INTO users VALUES('','$name','$email','$ph','$pass')") or die(mysqli_error($conn));
	if ($q) {
		header("location:userHome.php?pass=".$pass);
	}
	else{
		echo "Records Not Found";
	}
}

?>

