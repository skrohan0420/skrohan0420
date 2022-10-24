<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			font-family: sans-serif;

		}
		h1{
			padding: 20px;
			text-align: center;
			font-size: 30px;
			background: lightcoral;
			color: white;
			width: 100%;
		}
		body{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}
		form{
			margin: 40px;
			width: fit-content;
			border: 1px solid lightcoral;
			padding: 30px;
		}
		select{
			width: 150px;
			float: right;
			height: 30px;
			font-size: 17px;
			color: gray;
			border: none;
			outline: 1px solid gray;
		}
		select:focus{
			outline: 1px solid darkcyan;
		}
		label{
			/*width: 100px;*/
			margin: 0px 20px 0px 0px;
			float: left;
			height: 30px;
			display: flex;
			align-items: center;
			justify-content: flex-end;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1>Ajax Dependent Select Box</h1>


	<form>
		
		<label>Country :</label>
		<select id="country">
			<option value="">Select Country</option>
		</select>
	<br><br><br>
		<label>State :</label>
		<select id="state">
			<option value="">Select State</option>
		</select>

	</form>





	<script type="text/javascript">
		<?php 
			include '../jquery/jquery-3.6.0.js';
		 ?>		
	</script>
	<script type="text/javascript">
		$(document).ready(function(){



			function loadData(type, category_id){
				$.ajax({
					url : "load-cs.php",
					type : "POST",
					data : {
						type:type,
						id:category_id
					},
					success : function(data){
						if (type == "state"){
							$("#state").html(data)
						}else{
							$("#country").append(data)
						}
					}
				})
			}
			loadData()


			$("#country").on('change',function(){
				var country = $("#country").val()
				if (country != ""){
					loadData("state", country)
				}else{
					$("#state").html("")
				}	
			})


		})
	</script>
</body>
</html>