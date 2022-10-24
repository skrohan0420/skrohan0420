<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
		}
	</style>
</head>
<body>
		

	<?php 
		// The include and require statements are identical, except upon failure:

		// require -- will produce a fatal error (E_COMPILE_ERROR) and stop the script
		// include -- will only produce a warning (E_WARNING) and the script will continue
	include_once 'contents/header.php';
	include_once 'contents/header.php';
	include_once 'contents/header.php';
	// require 'contents/header.php';
	 ?>


	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

	<?php 

	// include 'contents/footer.php';
 	require_once	'contents/footer.php';
 	require_once	'contents/footer.php';
 	require_once	'contents/footer.php';
	 ?>
</body>
</html>