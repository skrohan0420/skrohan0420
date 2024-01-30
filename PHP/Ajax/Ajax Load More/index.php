<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		
		<?php include 'style.css' ?>

	</style>
</head>
<body>
	<h1>PHP & Ajax Load More Pagination</h1>

	<div id="tb">
		

		<table id="tbData">
			<thead>
				<tr>
					<td>ID</td>
					<td>NAME</td>
				</tr>
			</thead>

			<!-- <tbody>
				<tr>
					<td>1</td>
					<td>Name</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Name</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Name</td>
				</tr>
			</tbody>

			<tfoot id="btnBx">
				<tr>
					<td colspan="2">
						<button id="loadBtn" data-id="">LOAD MORE</button>
					</td>
				</tr>
			</tfoot> -->
		</table>


	</div>







	<script type="text/javascript">
		<?php 
			include '../jquery/jquery-3.6.0.js';
		 ?>		
	</script>
	<script type="text/javascript">
		$(document).ready(function(){

			function loadTable(page){
				$.ajax({
					url:"load.php",
					type:"POST",
					data:{page_no : page},
					success : function(data){
						if (data){
							$('#btnBx').remove()
							$('#tbData').append(data)
						}else{
							$('#loadBtn').prop('disabled',true)
						}
					}
				})
			}
			loadTable()

			$(document).on("click","#loadBtn",function(){
				var page_id = $(this).data('id')
				loadTable(page_id)
			})

		})
	</script>

</body>
</html>