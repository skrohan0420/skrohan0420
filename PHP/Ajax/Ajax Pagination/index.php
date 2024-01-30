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


		#heading{
			display: flex;
			justify-content: space-between;
			background: lightcoral;
			padding: 20px 100px 20px 100px;
		}

		#heading h1{
			text-transform: uppercase;
			text-align: center;
			color: white;
		}
		#heading input{
			margin: 10px;
			width: 200px;
			font-size: 20px;
			height: 50px;
			padding: 5px;
		}
		#btn{
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 20px;
			background: wheat;
		}
		button{
			width: fit-content;
			height: 35px;
			font-size: 18px;
			padding: 5px;
		}
		#tb{
			width: 100%;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			padding: 20px 100px 0px 100px;
		}
		table{
			width: 80%;
			background: lightcoral;
		}
		thead tr td{
			padding: 20px 0px 20px 0px;
			width: fit-content;
			background: cadetblue;
			text-align: center;
			color: white;
			font-size: 30px;
		}

		tbody tr td{
			width: fit-content;
			padding: 10px;
			font-size: 20px;
			/*background: ivory;*/
			background: transparent;
		}
		tbody tr:nth-child(even){
			background: lightgray;
		}
		tbody tr:nth-child(odd){
			background: white;
		}
		tbody tr td:nth-child(3),tbody tr td:nth-child(4){
			text-align: center;
		}
		.dltBtn{
			text-transform: uppercase;
			background: red;
			color: white;
			cursor: pointer;
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
		}

		#model{
			background: rgba(0, 0, 0, .7);
			position: fixed;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			z-index: 100;
			display: none;
			align-items: center;
			justify-content: center;
		}
		#modelForm{
			background: #fff;
			width: fit-content;
			position: absolute;
			/*display: none;*/

			
			

		}
		#modelForm h2{
			
			font-size: 35px;
			border-bottom: 1px solid black;
			padding: 5px 0px 20px 0px;
			margin:  20px ;
		}
		#modelForm table{
			background: white;
			width: fit-content;
		}
		#modelForm table tr{
			background: white;
		}
		#modelForm table tr td{
			padding: 20px;
		}
		.label{
			font-size: 30px;
		}
		#btnBx input{
			background: green;
			color: white;
			position: relative;
		}
		#modelForm table tr td input{
			width: 100%;
			height: 40px;
			font-size: 30px;
		}
		.edtBtn{
			background: gray;
			color: white;
			cursor: pointer;
		}
		#close-btn{

			background: red;
			color: white;
			width: 30px;
			height: 30px;
			line-height: 30px;
			text-align: center;
			border-radius: 50%;
			position: absolute;
			top: -15px;
			right: -15px;
			cursor: pointer;
		}
		#edit-fname,
		#edit-lname{
			padding: 20px;
		}
		#edit-fname:focus,
		#edit-lname:focus{
			outline: 1px solid rgba(0, 0, 250, .8);
		}

		#pagination{
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;

		}
		#pagination a{

			/*padding: 5px;*/
			display: flex;
			align-items: center;
			justify-content: center;
			width: 40px;
			height: 40px;
			font-size: 20px;
			background: darkgreen;
			text-decoration: none;
			color: white;
			margin: 10px 20px 100px 20px;
			font-weight: 1000;
			cursor: pointer;

		}
		#pagination a.active{
			background:  lightgreen;
			color: blue;
		}













		@media only screen and (max-width: 800px) {
		  form{
		  	display: flex;
		  	flex-direction: column;
		  }
		  #heading{
		  	flex-direction: column;
		  	align-items: center;
		  	justify-content: center;
		  }
		  #heading h1{
		  	margin: 0px 0px 20px 0px;
		  }
		  table{
		  	width: 100%;
		  }
		  #tb{
		  	padding: 10px;
		  }
		}
	</style>
</head>
<body>

	<div id="heading">
		<h1>php with ajax</h1>
	</div>




	<div id="tb">	
		<table id="dataTb">
			<thead>
				<tr>
					<td>Id</td>
					<td>Name</td>
				</tr>
			</thead>
		</table>
	</div>

	





	




	<script type="text/javascript">
		<?php 
			include '../jquery/jquery-3.6.0.js';
		 ?>		
	</script>
	<script type="text/javascript">
		$(document).ready(function(){

			

			// pagination load table
			function loadTable(page){
				$.ajax({
					url: 'pagination.php',
					type: 'POST',
					data: {page_no :page },
					success : function(data){
						$('#tb').html(data);
					}
				})
			}
			loadTable()

			// pagination code
			$(document).on('click','#pagination a', function(e){
				e.preventDefault()

				var page_id = $(this).attr('id')

				loadTable(page_id)
			})

		})
	</script>
</body>
</html>