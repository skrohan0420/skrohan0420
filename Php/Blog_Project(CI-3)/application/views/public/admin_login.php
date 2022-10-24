<!DOCTYPE html>
<html>
<head>



	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log-In</title>
	<!-- load bootstarp file -->
	<?= link_tag('assets/css/bootstrap.css')?>
	<?= link_tag('assets/css/style.css')?>
	<!-- or You could use -->
	<!-- base_url() -->
	<!-- font asm cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>



	<?php include('common/public_header.php'); ?>


	

	<?php 

		if (validation_errors() != null) {
			echo '<div style="margin:0px 25% 0px 25%;" id="alrt">
					<div class="alert alert-warning">
						<button type="button" class="btn-close"></button>
					  	<h4 class="alert-heading">Warning!</h4>
					  	<i>'
					  		.form_error('username','<p class="m-3">','</p>'),
					  		form_error('password','<p class="m-3">','</p>').
					  	'</i>
					</div>
				</div>';
		}

		if ($error = $this->session->flashdata('login_faild')) {
			echo '<div style="margin:0px 25% 0px 25%;" id="alrt">
					<div class="alert alert-danger">
						<button type="button" class="btn-close"></button>
					  	<h4 class="alert-heading">Warning!</h4>
					  	<i>'
					  		.$error.
					  	'</i>
					</div>
				</div>';
		}
	?>

	
	<div style="margin:0px 25% 0px 25%;">
		<?php 
			// can also add atributes on form tag 
			echo form_open('login/admin_login',['autocomplete'=>'off','class'=>'login-form'])

		
		?>
			<fieldset>
				<legend>LOG-IN</legend>
				<div class="form-group">
					<label for="username" class="form-label mt-4">User Name</label>
					<?php 
						echo form_input([
							'type'=>'text',
							'name'=>'username',
							'class'=>'form-control',
							'placeholder'=>'User Name',
							'value'=>set_value('username')
						]);
					?>
				</div>
				<div class="form-group">
					<label for="" class="form-label mt-4">Password</label>
					<?php 
						echo form_password([
							'type'=>'password',
							'name'=>'password',
							'class'=>'form-control',
							'placeholder'=>'Password',
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
	</div>











	<?php include('common/public_footer.php'); ?>



	<script
	  src="https://code.jquery.com/jquery-3.6.0.min.js"
	  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	  crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/script.js') ?>"></script>
		
</body>
</html>