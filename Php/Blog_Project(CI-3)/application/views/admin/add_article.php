<!DOCTYPE html>
<html>
<head>



	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Articles</title>
	<!-- load bootstarp file -->
	<?= link_tag('assets/css/bootstrap.css')?>
	<?= link_tag('assets/css/style.css')?>
	<!-- or You could use -->
	<!-- base_url() -->
	<!-- font asm cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>



	<?php  include('common/admin_header.php'); ?>


	










	




		<?php 

			if(form_error('title')!=null||form_error('body')!=null){
				echo '<div style="margin:0px 25% 0px 25%;" id="alrt">
						<div class="alert alert-warning">
							<button type="button" class="btn-close"></button>
						  	<h4 class="alert-heading">Warning!</h4>
						  	<i>'
						  		.form_error('title','<p class="m-3">','</p>'),
						  		form_error('body','<p class="m-3">','</p>'),
						  		@$upload_error.
						  	'</i>
						</div>
					</div>';
			}
				
			
		?>




		<div style="margin:0px 25% 100px 25%;">
			<?php 
				// can also add atributes on form tag 
				echo form_open_multipart('admin/store_article',['autocomplete'=>'off','class'=>'login-form']);
				echo form_hidden('user_id',$this->session->userdata('user_id'));
				echo form_hidden('created_at',date('Y-m-d H:i:s'));

			
			?>
				<fieldset>
					<legend>ADD ARTICLE</legend>


					<div class="form-group">
						<label for="Article" class="form-label mt-4">Article Title</label>
						<?php 
							echo form_input([
								'type'=>'text',
								'name'=>'title',
								'class'=>'form-control',
								'placeholder'=>'article title',
								'value'=>set_value('title')
							]);
						?>
					</div>


					<div class="form-group">
						<label for="userfile" class="form-label mt-4">Article Image </label>
						<?php 
							echo form_upload([
								'name'=>'userfile',
								'class'=>'form-control',
								'required'=>'true'
							]);
						?>
					</div>


					<div class="form-group">
						<label for="body" class="form-label mt-4">Article Body</label>
						<?php 
							echo form_textarea([
								'type'=>'text',
								'style'=>'outline: 2px solid lightgray;',
								'name'=>'body',
								'class'=>'form-control textarea',
								'placeholder'=>'article body',
								'value'=>set_value('body')
							]);
						?>
					</div>

					<?php 
						echo form_submit([
								'name'=>'submit',
								'class'=>'btn btn-primary mt-4',
								'value'=>'save'
							]);
					 ?>
				</fieldset>
			</form>
		</div>












	<?php  include('common/admin_footer.php'); ?>



	<script
	  src="https://code.jquery.com/jquery-3.6.0.min.js"
	  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	  crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/script.js') ?>"></script>
		
</body>
</html>