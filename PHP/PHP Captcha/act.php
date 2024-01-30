<?php 

	session_start();

	echo "<style>
		body{
  			display: flex;
  			align-items: center;
  			justify-content: center;
  		}
  		h1{
  			color: green;
  		}
  		h2{
  			color: red;
  		}

  		*{
  			box-sizing: border-box;
  			margin: 0;
  			padding: 0;
  			font-family: sans-serif;
  		}
  		</style>";


	if (isset($_POST['token'])){

		
		$token = strtolower($_POST['token']);

		// validate captcha code 		
		if (isset($_SESSION['captcha_token']) && $_SESSION['captcha_token'] == $token) {

			//success your code here

			echo "<h1>success</h1>";

		} else {
			echo "<h2>error CAPTCHA code</h2>";
		}
		
	}
?>