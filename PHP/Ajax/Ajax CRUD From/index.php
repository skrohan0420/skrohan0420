<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css"><?php include 'style.css' ?></style>
</head>
<body>

	<div id="heading">
		<h1>php with ajax</h1>	
	</div>

	<form id="addForm" autocomplete="off">
		<input type="text" id="fName" required placeholder="First Name">
		<input type="text" id="lName" required placeholder="Last Name">
		<input type="submit" id="insertBtn" value="SAVE">
	</form>


	<!-- <div id="btn">
		<button id="loadBtn">Load all Data</button>
	</div> -->

	<div id="tb">	
		<table id="dataTb">
			<thead>
				<tr>
					<td>Id</td>
					<td>Name</td>
					<td>Edit</td>
					<td>Delete</td>
				</tr>
			</thead>
		</table>
	</div>

	




	<div id="model">
		<div id="modelForm">
			<h2>EDIT DATA</h2>

			<table>
					
				<!-- <tr>
					<td class="label">First Name</td>
					<td>
						<input type="text" id="edit-fname" name="">
					</td>
				</tr>
				<tr>
					<td class="label">Last Name</td>
					<td>
						<input type="text" id="edit-lname" name="">
					</td>
				</tr>
				<tr>
					<td id="btnBx">
						<input type="submit" name="" id="edit-submit" value="save">
					</td>
				</tr> -->
			</table>
			<div id="close-btn">X</div>

		</div>			
	</div>


	




	<script type="text/javascript">
		<?php 
			include 'jquery-3.6.0.js';
		 ?>		
	</script>
	<script type="text/javascript">
		<?php 
			include 'script.js';
		 ?>
	</script>
</body>
</html>