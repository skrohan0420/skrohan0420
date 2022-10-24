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
	</style>
</head>
<body>
	<h1>READ JSON DATA</h1>

	<div id="loadDAta">
		
	</div>

	<script type="text/javascript">
		<?php 
			include '../jquery-3.6.0.js';
		 ?>		
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			// $.ajax({
			// 	// url : "https://jsonplaceholder.typicode.com/posts",
			// 	url : 'my.json',
			// 	type : 'GET',
			// 	success : function(data){
			// 		// $('#loadDAta').append(data.id + "<br>" + data.title + "<br>" + data.body)
			// 		// console.log(data)
			// 		$.each(data,function(key,value){
			// 			// console.log(value.id)
			// 			$('#loadDAta').append(value.id + " " + value.title +"<br>" )
			// 		})
			// 	}
			// })
			$.getJSON(
				'my.json',
				function(data){
					$.each(data,function(key,value){
						$('#loadDAta').append(value.id + " " + value.title +"<br>" )
					})
				}
			)

		})
	</script>
</body>
</html>