<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User List</title>
</head>
<body>





	<h1>Obj Method</h1>
	<table>
		<?php foreach($users as $user):?>
		<tr>
			<td><?= $user->firstName; ?></td>
			<td><?= $user->lastName ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>