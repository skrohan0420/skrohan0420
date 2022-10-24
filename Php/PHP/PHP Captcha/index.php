<!DOCTYPE html>
<html>
<head>
	<title>PHP CAPTCHA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta charset="utf-8">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<style type="text/css">

  		*{
  			box-sizing: border-box;
  			margin: 0;
  			padding: 0;
  			font-family: sans-serif;
  		}
  		i{
  			cursor: pointer;
  		}
  		body{
  			width: 100%;
  			height: 100vh;
  			display: flex;
  			align-items: center;
  			justify-content: center;
  		}
  		form{
  			padding: 40px;
  			background: lightcoral;
  			display: flex;
  			flex-direction: column;
  			justify-content: center;
  			align-items: center;
  		}
  		.cap{
  			display: flex;
  			/*background: beige;*/
  			align-items: center;
  			justify-content: center;
  			margin: 10px;
  			color: white;

  		}
  		input{
  			outline: 1px solid gray;
  			border: none;
  			padding: 8px;
  			margin: 10px;
  			border-radius: 3px;
  			font-size: 17px;
  		}
  		button{
  			margin: 10px;
  			width: 100px;
  			height: 40px;
  			font-size: 20px;
  			text-transform: uppercase;
  			border: 1px solid black;
  			outline: none;
  			background: rgba(100, 255, 0, .7);
  			cursor: pointer;
  		}
  		h1{
  			color: white;
  			margin-bottom: 20px;
  		}
  	</style>
</head>
<body>

	<form id="contact-form" method="post" action="act.php" autocomplete="off">
		<h1>PHP CAPTCHA</h1>		
		<div>
			<div class="cap">
				<img src="./captcha/image.php?12325" alt="CAPTCHA" id="image-captcha">

				<a id="refresh-captcha" class="align-middle" title="refresh">
					<i class="material-icons align-middle">refresh</i>
				</a>
			</div>
			<input type="text" name="token" id="token" placeholder="Captcha" >
		</div>
		<button type="submit"  name="submit" id="submit">submit</button>
	</form>

			

	<script>
		var refreshButton = document.getElementById("refresh-captcha");
		var captchaImage = document.getElementById("image-captcha");

		refreshButton.onclick = function(e) {
			e.preventDefault();
			captchaImage.src = './captcha/image.php?' + Date.now();
		};
	</script>

</body>
</html>