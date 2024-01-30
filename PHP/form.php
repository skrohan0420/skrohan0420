<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="" method="" autocomplete="">
		

		<p>Name</p>
		<input type="text" name="name">

		<p>email</p>
		<input type="email" name="email">

		<p>ph. no.</p>
		<input type="tel" id="phone" name="phone" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}">

		<p>Gender</p>
		<input type="radio" name="g" value="male">Male
		<input type="radio" name="g" value="female">female
		<input type="radio" name="g" value="others">others

		<p>password</p>
		<input type="password" name="pass" id="pass">
		<i id="sh" onclick="sh()">Show</i>
		<i id="hd" onclick="hd()">hide</i>

		<br><br>

		<input type="submit" name="submit" value="Sign-Up">
		<input type="reset" name="reset" value="reset">

	</form>

	<style type="text/css">
		#hd{
			display: none;
		}
		i{
			cursor: pointer;
		}
	</style>

	<script type="text/javascript">
		
		var pass = document.getElementById('pass');
		var sh = document.getElementById('sh');
		var hd = document.getElementById('hd');

		function sh() {

			pass.type = 'text';
			sh.style.display = 'none';
			hd.style.display = 'inline';

		}
		function hd() {

			pass.type = 'password';
			hd.style.display = 'none';
			sh.style.display = 'inline';

		}


	</script>
</body>
</html>