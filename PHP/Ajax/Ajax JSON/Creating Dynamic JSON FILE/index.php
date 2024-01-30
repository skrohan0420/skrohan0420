<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			box-sizing: border-box;
			margin: 0px;
			padding: 0px;
		}

		input:focus{
			outline: 1px solid blue;
		}

		 h1{
			text-transform: uppercase;
			text-align: center;
			color: white;
			background: lightcoral;
			padding: 30px;
		}

		form{
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 20px;
			background: yellowgreen;
		}
		form input{
			margin: 10px;
			width: 200px;
			font-size: 20px;
			height: 50px;
			padding: 5px;
		}
		form label{
			font-size: 20px;
		}
		form input[type='submit']{
			width: fit-content;
			padding: 5px 30px 5px 30px;
			font-size: 20px;
			background: green;
			color: wheat;
			cursor: pointer;
		}



		@media only screen and (max-width: 600px) {
		  form{
		  	display: flex;
		  	flex-direction: column;
		  }
		  h1{
		  	margin: 0px 0px 20px 0px;
		  }
		  
		}
	</style>
</head>
<body>

	<h1>php with ajax</h1>	


	<form id="addForm" autocomplete="off" method="POST" action="form-data.php">
		<input type="text" required placeholder="First Name" name="fName">
		<input type="text" required placeholder="Last Name" name="lName">
		<input type="submit" id="insertBtn" value="SAVE">
	</form>

	<table>
		
		<th>
			<td></td>
		</th>

	</table>


	<script type="text/javascript">
		
		<?php include '../jquery-3.6.0.js' ?>

	</script>



</body>
</html>