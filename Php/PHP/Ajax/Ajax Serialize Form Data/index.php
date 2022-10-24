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
			font-family: sans-serif;
		}
		h1{
			text-align: center;
			padding: 20px;
			background: lightcoral;
			color: white;
		}
		form{
			outline: 1px solid lightcoral;
			margin: 20px auto 0px auto;
			padding: 40px;
			width: fit-content;
		}
		p{
			width: 100%;
			font-size: 20px;
			padding: 10px 0px 5px 0px;
			color: gray;
		}
		input{
			height: 40px;
			font-size: 20px;
			padding: 5px;
			color: gray;
		}
		#radio{
			display: flex;
			align-items: center;
			justify-content: space-evenly;
			color: gray;
		}
		#radio input{
			transform: scale(1.3);
		}
		option{
			width: 100%;
			height: 40px;
		}
		select{
			width: 100%;
			height: 40px;
			outline: none;
			font-size: 20px;
			padding: 5px;
			color: gray;
		}
		#response{
			/*background: wheat;*/
			width: 100%;
			text-align: center;
			/*padding: 40px;*/
			font-size: 20px;
			margin: 0px auto 0px auto;
			width: fit-content;
			padding: 20px;
		}
		.success-msg{
			background: rgba(0, 250, 0, 0.2);
			color: darkgreen;
			border: 1px solid green;
		}
		.process-msg{
			background: rgba(0, 0, 0, 0.4);
			color: darkgray;
			border:  1px solid gray;
		}
		.error-msg{
			background: rgba(250, 0, 0, 0.2);
			color: red;
			border: 1px solid red;
		}
		#btnBx{
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		#btnBx input{
			width: 200px;
			margin: 20px;
			background: lightcoral;
			color: white;
			height: 40px;
			outline: none;
			border: none;
			cursor: pointer;
			text-transform: uppercase;

		}
	</style>
</head>
<body>
	<h1>PHP & Ajax Serialize Form</h1>	

	<form id="submit_form">
		
		<p>Name</p>
		<input type="text" name="fullname" id="fullname">

		<p>Age</p>
		<input type="number" name="age" id="age">

		<p>Country</p>
		<select name="country">
				
			<option value="ind">India</option>
			<option value="ban">Bangaladesh</option>
			<option value="sl">SriLanka</option>
			<option value="ne">Nepal</option>

		</select>

		<p>Gender</p>
		<div id="radio">
			<input type="radio" name="gender" value="female">Male
			<input type="radio" name="gender" value="male">Female
		</div>

		
	</form>
	<div id="btnBx">
		<input type="submit" name="submit" value="Submit" id="submit">
	</div>
	<div id="response">
		
	</div>




	<script type="text/javascript">	
		<?php 
		include '../jquery/jquery-3.6.0.js'
		 ?>
	</script>
	<script type="text/javascript">
		
		$(document).ready(function(){

			$('#submit').click(function(){

				var name = $('#fullname').val()
				var age = $('#age').val()

				if (name == "" || age == "" || !$('input:radio[name=gender]').is(':checked')){
					$('#response').fadeIn('slow')
					$('#response').removeClass('success-msg').addClass('error-msg').html('all feilds are requierd');
				}else{
					$('#response').html($('#submit_form').serialize())

					$.ajax({
						url: 'act.php',
						type : 'POST',
						data : $('#submit_form').serialize(),
						beforesend: function(){
							$('#response').fadeIn('slow')
							$('#response').removeClass('success-msg error-msg').addClass('process-msg').html('Loading response.......');
						},
						success : function(data){
							$('#submit_form').trigger('reset')
							$('#response').fadeIn('slow')
							$('#response').removeClass('error-msg').addClass('success-msg').html(data);
							setTimeout(function(){
								$('#response').fadeOut("slow")
							},3000)
						}
					})
				}
				setTimeout(function(){
					$('#response').fadeOut("slow")
				},3000)
			})



			
		})


	</script>
</body>
</html>
</body>
</html>