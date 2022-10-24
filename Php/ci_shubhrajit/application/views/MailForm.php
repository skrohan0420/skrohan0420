<!DOCTYPE html>
<html>
<head>
	<title>Mail Sending</title>
</head>
<body>
<center>
	<form method="post" action="<?php echo base_url().'index.php/MailController/sent'?>">
		Sender Mail-Id:<input type="email" name="myemail"><br>
		Subject:<input type="text" name="mysubject"><br>
		body:<input type="text" name="mybody"><br>
		<input type="submit" name="submit" value="Send">
	</form>
</center>
</body>
</html>