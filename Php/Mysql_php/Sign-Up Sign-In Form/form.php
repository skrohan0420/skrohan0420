<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login & Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<div class="container">

		<div class="blueBg">
			<div class="box signin">
				<h2>Already Have an Account ?</h2>
				<button class="signinBtn">Sign In</button>
			</div>

			<div class="box signup">
				<h2>Don't Have an Account ?</h2>
				<button class="signupBtn" >Sign Up</button>
			</div>
		</div>




		<div class="formBx">

			<div class="form signinForm">
				<form autocomplete="on" method="post" id="Signin-form" action="loginaction.php">
					<h3>Sign In</h3>
					<input type="text" 		name="login_name" placeholder="Username" required maxlength="25" minlength="3" id="login_name"> 
					<input type="password" 	name="login_pass" placeholder="Password" required minlength="6" maxlength="20" id="login_pass" style="margin-bottom: 5px;"> 

					<div class="showhide">
						<input type="checkbox" name="showhide" onclick="show()" style="outline: none;">
						<span id="show" style="color:gray;">show</span>
					</div>

					<input type="submit" name="signin" value="Login" id="Signin-btn"> 
					<a href="#" class="forgot">Forgot Password</a>
				</form>
			</div>



			<div class="form signupForm">
				<form autocomplete="off" method="post" id="Signup-form" action="action.php">
					<h3>Sign Up</h3>

					<input type="text"		id="name" 	 		name="name"		 	placeholder="Your name"  		required maxlength="25" minlength="3">
					<div id="alertName" class="alert"></div> 

					<input type="email" 	id="email"			name="email" 		placeholder="Email Address" 	required maxlength="30">
					<div id="alertEmail" class="alert"></div> 

					<input type="tel" 		id="number"			name="number" 		placeholder="Your Number" 		required maxlength="12" minlength="10" > 
					<div id="alertNumber" class="alert"></div> 


					<input type="password" 	id="password"		name="password" 	placeholder="Password"  		required minlength="6" maxlength="20" onblur="pass(this.value)" onclick="passclear()">
					<div id="alertPassword" class="alert"></div>

					<input type="password" 	id="conPassword"	name="conpassword" 	placeholder="Confirm Password" 	required minlength="6" maxlength="20" onblur="pass(this.value)" onclick="passclear()"> 
					  




					<div class="showhide">
						<input type="checkbox" name="showhide" onclick="showSignUp()" style="outline: none;">
						<span id="showSign" style="color:gray;">show</span>
					</div>

					<input type="submit" name="signup" value="Register" id="Signup-btn"> 
				</form>
			</div>

		</div>

	</div>



	<script type="text/javascript" src="script.js"></script>
</body>
</html>