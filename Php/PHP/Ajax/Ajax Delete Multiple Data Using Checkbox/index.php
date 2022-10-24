<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajax Delete Multiple Data Using Checkbox</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
			font-family: sans-serif;
		}
		h1{
			padding: 40px;
			background: lightcoral;
			color: white;
			text-align: center;
		}
		#btn-bx{
			background: wheat;
			padding: 20px;
			text-align: center;
		}
		#dlt-btn{
			width: 100px;
			height: 30px;
			color: white;
			background: red;
			outline: none;
			border: 1px solid gray;
			border-radius: 5px;
			font-size: 20px;
			text-transform: uppercase;
			cursor: pointer;
		}
		#error-message,
		#success-message{
			position: fixed;
			bottom: 0px;
			padding: 40px;
			text-align: center;
			width: 100%;
			background: rgba(200, 0, 0, .6);
			color: white;
			font-size: 50px;
			outline: 1px solid red;
			display: none;
		}
		#success-message{
			background: rgba(0, 200, 0, .6);
			outline: 1px solid green;
		}
		#table-data{
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		table{
			background: blue;
			margin: 40px 50px 40px 50px;
			width: 100%;
		}
		th{
			background: darkcyan;
			padding: 10px 20px 10px 20px;
			font-size: 25px;
			color: white;
		}
		table tr:nth-child(even){
			background: white;
		}
		table tr:nth-child(odd){
			background: blanchedalmond;
		}
		table tr td{
			padding: 10px 30px 10px 30px;
			font-size: 20px;
		} 
		table tr td:nth-child(1){
			padding: 0;

		}
		table tr td:nth-child(1) input{
			transform: scale(1.4);
		}
	</style>
</head>
<body>


	<h1>Ajax Delete Multiple Data Using Checkbox </h1>


	<div id="btn-bx">
		<button id="dlt-btn">Delete</button>
	</div>

	<div id="table-data">
		
	</div>
	<div id="error-message">error</div>
	<div id="success-message">success</div>


	<script type="text/javascript">
		<?php 
			include '../jquery/jquery-3.6.0.js';
		 ?>		
	</script>
	<script type="text/javascript">
		$(document).ready(function(){




			function loadData(){
				$.ajax({
					url : "load-data.php",
					type : "POST",
					success : function(data){
						$("#table-data").html(data)
					}
				})
			}
			loadData()




			$("#dlt-btn").on('click',function(){
				var id = []

				$(":checkbox:checked").each(function(key){
					id[key] = $(this).val()
				})

				if (id.length === 0){
					$("#error-message").html("Please Select atleast one checkbox").slideDown(400)
					setTimeout(function(){
						$("#error-message").slideUp(400)
					},4000)
				}else{
					if (confirm("Do you really want to delete this record..")) {
						$.ajax({
							url : "delete-data.php",
							type: "POST",
							data: {id:id},
							success: function(data){

								if (data == 1){

									$("#success-message").html("Data deleted successfully").slideDown(400)
									$("#error-message").html("").slideUp(400)
									setTimeout(function(){
										$("#success-message").slideUp(400)
									},4000)
									loadData()

								}else if(data == 0){

									$("#error-message").html("Can't delete this record").slideDown(400)
									$("#success-message").html("").slideUp(400)

									setTimeout(function(){
										$("#error-message").slideUp(400)
									},4000)
									loadData()
								}
							}
						})
					}
				}
			})
		})
	</script>
</body>
</html>