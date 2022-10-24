<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
		font-family: sans-serif;
	}
	body{
		height: 100vh;
		width: 100vw;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.form-group{
		width: 100%;
		display: flex;
		align-items: center;
		justify-content: space-between;
		margin: 10px 0px 10px 0px;
	}
	.form-group input{
		width: fit-content;
		height: 30px;
		padding: 20px;
	}
	.sign-up-form{
		width: 400px;
	}
	fieldset{
		padding: 20px;
		border: 1px solid lightcoral;

	}
	.btn{
		padding: 10px;
		background-color: beige;
		outline: 1px solid lightcoral;
		border: none;
		color: lightcoral;
		cursor: pointer;
	}
	legend{
		font-size: 30px;
		color: lightcoral;
	}
	label{
		color: gray;
	}
	form a{
		text-decoration: none;
		margin: 0px 0px 0px 70px;
	}
</style>
<body>

	<?php 
			// can also add atributes on form tag 
			echo form_open('user/signup',['autocomplete'=>'off','class'=>'sign-up-form','method'=>'post']);

		
		?>
			<fieldset>
				<legend>SIGN-UP</legend>
				<div class="form-group">
					<label for="username">User Name</label>
					<?php 
						echo form_input([
							'type'=>'text',
							'name'=>'Name',
							'class'=>'form-control',
							'placeholder'=>'User Name',
							'value'=>set_value('username'),
							'required'=>'true'
						]);
					?>
				</div>
				<div class="form-group">
					<label for="address">Address</label>
					<?php 
						echo form_input([
							'type'=>'text',
							'name'=>'Address',
							'class'=>'form-control',
							'placeholder'=>'address',
							'value'=>set_value('address'),
							'required'=>'true'
						]);
					?>
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<?php 
						echo form_input([
							'type'=>'email',
							'name'=>'Email',
							'class'=>'form-control',
							'placeholder'=>'E-mail',
							'value'=>set_value('email'),
							'required'=>'true'
						]);
					?>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<?php 
						echo form_password([
							'type'=>'password',
							'name'=>'Password',
							'class'=>'form-control',
							'placeholder'=>'Password',
							'required'=>'true'
						]);
					?>
				</div>
				<?php 
					echo form_submit([
							'name'=>'submit',
							'class'=>'btn',
							'value'=>'Sign-Up'
						]);
				 ?>
				 <?= 
					anchor('user/login','Login',['class'=>'someclass'])
				 ?>
			</fieldset>
		</form>
	
</body>
</html>