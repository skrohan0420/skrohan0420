<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
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
		flex-direction: column-reverse;
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
		margin: 0px 0px 0px 30px;
	}
	.sign-up-form{
		width: 1000px;
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
	i{
		color: red;
		padding: 20px;
		text-align: center;
	}
</style>
</head>
<body>


	<?php 
			// can also add atributes on form tag 
			echo form_open('user/login',['autocomplete'=>'off','class'=>'login-form'])

		
		?>
			<fieldset>
				<legend>LOG-IN</legend>
				<div class="form-group">
					<label for="username" class="form-label mt-4">User Name</label>
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
					<label for="" class="form-label mt-4">Password</label>
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
							'class'=>'btn btn-primary mt-4',
							'value'=>'Login'
						]);
				 ?>
			</fieldset>
		</form>


</body>
</html>