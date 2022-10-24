<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			font-family: sans-serif;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			
		}
		style{
			display: none;
		}
		body{
			height: 100vh;
			width: 100vw;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
		}
		legend{
			font-size: 40px;
			color: lightcoral;

		}
		fieldset{
			height: fit-content;
			width: 500px;
			padding: 20px;
			border: 1px solid lightcoral;
		}
		.info{
			display: flex;
			width: 100%;
		}
		h3{
			width: 40%;
			margin: 10px;
			color: lightcoral;
		}
		p{
			width: 60%;
			margin: 10px;
			color: gray;
			border-bottom: 1px solid gray;
		}
		a{
			margin: 10px;
			background-color: olivedrab;
			color: white;
			outline: 1px solid lightcoral;
			text-decoration: none;
			padding: 10px;
		}
	</style>
</head>
<body>


	<?php 
		$user = $this->session->userdata('userdata');
	?> 

	<fieldset>
		<legend>Your Data</legend>

		<div>
			<div class="info">
				<h3>Your Name</h3>
				<p>
					<?= $user['Name'] ?>
				</p>
			</div>
			<div class="info">
				<h3>Your Address</h3>
				<p>
					<?= $user['Address'] ?>
				</p>
			</div>
			<div class="info">
				<h3>Your Email</h3>
				<p>
					<?= $user['Email'] ?>
				</p>
			</div>
			<div class="info">
				<h3>Your Password</h3>
				<p>
					<?= $user['Password'] ?>
				</p>
			</div>
		</div>

		
	</fieldset>
	<?php echo anchor('user/logout','LOGOUT',['class'=>'someclass']) ; ?>

</body>
</html>