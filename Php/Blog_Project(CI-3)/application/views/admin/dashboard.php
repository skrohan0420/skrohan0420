<!DOCTYPE html>
<html>
<head>



	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
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



		

	<div class="container">
		<?php 
			// Provides Feedback to User
			if ($feedback = $this->session->flashdata('feedback')) {
				$feedback_class = $this->session->flashdata('feedback_class');



				echo '<div style="" id="alrt">
						<div class="alert '.$feedback_class.'">
							<button type="button" class="btn-close"></button>
						  	<h4 class="alert-heading">Success</h4>
						  	<i>'
						  		.$feedback.
						  	'</i>
						</div>
					</div>';
			}


		 ?>



		<div class="row">
			<div class="col-lg-12">
				<!-- <a href="" class="btn btn-md btn-dark float-end">Add Articles</a> -->
				<?=
					anchor('admin/store_article',
						   '+ Add Articles',[
						   		'class'=>'btn btn-md btn-dark float-end'
							]);
				?>
			</div>
		</div>
		


		<table class="table table-hover">
			<thead>
				<th>Sr. No.</th>
				<th>Title</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php if (isset($articles)): 
					$count = $this->uri->segment(3,0);
 					foreach($articles as $article): ?>
				<tr>
					<td>
						<?= ++$count; ?>
					</td>
					<td>
						<?= $article->title; ?>
					</td>
					<td>
						<div class="row">
							<div class="col-lg-3">
								<?= anchor("admin/edit_article/".$article->id,'Edit',['class'=>'btn btn-sm btn-info']); ?>
							</div>
							<div class="col-lg-3">
								<?= 
									form_open('admin/delete_article'),
									form_hidden('article_id',$article->id),
									form_submit([
										'name'=>'submit',
										'value'=>'Delete',
										'class'=>'btn btn-sm btn-danger'
									]),
									form_close();
								?>
							</div>
						</div>	
					</td>
				</tr>

			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="3">
						No record found
					</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>



		<?= $this->pagination->create_links(); ?>


		



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