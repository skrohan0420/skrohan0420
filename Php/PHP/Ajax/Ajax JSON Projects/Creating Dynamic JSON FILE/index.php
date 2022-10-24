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
			padding: 15px;
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

		table{
			/*margin: 30px;*/
			padding: 60px;
			width: 100%;
			/*border: 1px solid blue;*/
		}
		table thead tr td{
			background: lightcoral;
			text-align: center;
			font-size: 25px;
			color: white;
		}
		table tr td{
			padding: 10px 30px 10px 30px;
			color: white;
			font-size: 20px;
		}
		table tr:nth-child(even){
			background: rgba(50, 100, 0, 1.0);
		}
		table tr:nth-child(odd){
			background: rgba(0, 100, 50, 1.0);
;
		}
		#alertBx{
			position: fixed;
			bottom: 0;
			width: 100%;
			background: rgba(0, 0, 0, .7);
			text-align: center;
			font-size: 40px;
			display: none;
			color: white;
			padding: 20px;
		}








		@media only screen and (max-width: 600px) {
		  form{
		  	display: flex;
		  	flex-direction: column;
		  }		  
		}

	</style>
</head>
<body>

	<h1>php with ajax</h1>	

	<div id="alertBx">
		Nothing saved
	</div>

	<form id="addForm" autocomplete="off">
		<input type="text" required placeholder="First Name" id="fName">
		<input type="text" required placeholder="Last Name" id="lName">
		<input type="submit" id="insertBtn" value="SAVE">
	</form>




	<table id="table-data">
		
		<thead>
			<tr>
				<td>Id</td>
				<td>First Name</td>
				<td>Last Name</td>
			</tr>
		</thead>
		<!-- <tr>
			<td>SK</td>
			<td>ROHAN</td>
		</tr> -->

	</table>


	<script type="text/javascript" src="jquery-3.6.0.js">
		


	</script>
	<script type="text/javascript">
		$(document).ready(function(){



			function loadTable(){
				$.ajax({
					url: 'loadTable.php',
					type : "POST",
					success:function(data){
						$('#table-data').html(data)
					}
				})
			}
			loadTable()











			$('#insertBtn').on('click', function(e){
				e.preventDefault()
				var fName = $('#fName').val()
				var lName = $('#lName').val()



				if (fName == '' && lName == '') {
					
					$('#alertBx').html("No Input Given").slideDown(200)

					setTimeout(function(){
						$('#alertBx').slideUp(200)
					},3000)

				}else{
					$.ajax({
						url : 'form-data.php',
						type : 'POST',
						data : {
							fName : fName,
							lName : lName
						},
						success:function(data){
							if (data == true){
								$('#alertBx').html('Data Saved').slideDown(200)

								setTimeout(function(){
									$('#alertBx').slideUp(200)
								},3000)

							}else{
								$('#alertBx').html("Can't Save Data").slideDown(200)

								setTimeout(function(){
									$('#alertBx').slideUp(200)
								},3000)
							}
							loadTable()
							$('#fName').val('')
							$('#lName').val('')
						}
					})
				}
			})


		})
	</script>


</body>
</html>