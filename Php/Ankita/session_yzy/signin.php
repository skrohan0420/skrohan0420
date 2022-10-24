<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registration</title>
	
</head>
<style type="text/css">
form{
			display: flex;
			flex-direction: column;
			width: 200px;
			padding: 20px;
			outline: 1px solid grey;
			margine: auto;
		}
		input[type='submit']{

		width: 100px;
		margin: 10px 0px 0px;
</style>
	
		<body>
			<form method="post" action="action.php">
		<label for="name"> Name:</label>
		<input type="text" name="name" required>

          <label for="email"> Email:</label>
		<input type="email" name="email" required>

		<label for="favourite place"> fav_place:</label>
		<input type="text" name="fav_place" >

		<label for="password"> Password:</label>
		<input type="password" name="password">

		<input type="submit" name="submit" value="sign-up">
	
</form>
</body>
</html>