<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: 0;
			font-family: sans-serif;
		}
		body{
			padding: 0px 50px 0px 50px;
		}
		h1{
			padding: 20px;
			font-size: 30px;
			background: lightcoral;
			color: white;
			text-align: center;
		}
		#loadDAta{
			padding: 20px;
			font-size: 20px;
			background: darkgreen;
			color: white;
			/*text-align: center;*/
		}
		table{
			background: gray;
		}
		tr{
			background: wheat;
		}
	</style>
</head>
<body>
	<h1>json_encode()</h1>

	<div id="loadData">
		<table id="loadTable" border="1" cellpadding="10px" width="100%">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>age</th>
				<th>gender</th>
				<th>country</th>
			</tr>
		</table>
	</div>






	<script type="text/javascript">
		<?php 
			include '../jquery-3.6.0.js';
		 ?>		
	</script>
	<script type="text/javascript">
			

		// $.getJSON(
		// 	'fetchJson.php',
		// 	function(data){
		// 		$.each(data,function(key,value){
		// 			$('#loadData').append(value.id + ' ' + value.name + ' ' + value.age + ' ' + value.gender+ ' ' + value.country + '<br>')
		// 		})
		// 	}
		// )

		$.ajax({
			url : 'fetchJson.php',
			type : 'POST',
			dataType : 'JSON',
			data :  {id : 1},
			success : function(data){
				$.each(data,function(key,value){
					$('#loadTable').append("<tr><td>"+ value.id + '</td><td>' + value.name + '</td><td>' + value.age + '</td><td>' + value.gender+ '</td><td>' + value.country + "</td><tr>")
				})
			}
		})
	</script>
</body>
</html>