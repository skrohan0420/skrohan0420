<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		h1{
			padding: 30px;
			text-align: center;
			font-size: 30px;
			background: lightcoral;
			color: white;
			width: 100%;
		}
		body{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		form{
			background: ;
			padding: 40px;
			border: 1px solid lightcoral;
			margin: 20px;
		}
		#submitBtn{
			width: 100px;
			padding: 10px;
			cursor: pointer;
		}
		#res{
			width: 100%;
			background: lightcoral;
			text-align: center;
			color: white;
			display: none;
			padding: 20px;
			text-transform: uppercase;
			font-size: 40px;
			margin-top: 20px;
		}
	</style>
</head>
<body>

	<h1>Php Ajax $.POST & $.GET</h1>

	<form id="form">
		
		<p>First Name</p>
		<input type="text" name="fName" id="fName" required>
		<p>Last Name</p>
		<input type="text" name="lName" id="lName" required>		
	</form>
	<input type="submit" id="submitBtn" name="" value="save">

	<div id="res"></div>



	<script type="text/javascript">
		<?php 
			include '../jquery/jquery-3.6.0.js';
		 ?>		
	</script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#submitBtn').click(function(){
				var fName = $('#fName').val()
				var lName = $('#lName').val()

				if (fName == "" || lName == ""){
					$('#res').fadeIn('slow')
					$('#res').html("all feilds are requierd")
					setTimeout(function(){
						$('#res').fadeOut('slow')
					},3000)
				}else{

					// $.get()
					$.post(
						'act.php',
						$('#form').serialize(),
						function(data){
							if (data == 1){

								$('#form').trigger('reset')
								$('#res').fadeIn('slow')
								$('#res').html("data Saved")
								setTimeout(function(){
									$('#res').fadeOut('slow')
								},3000)
								
							}
						}
					)
				}
			})


		})
	</script>
</body>
</html>