<!DOCTYPE html>
<html>
<head>



	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Articles List</title>
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






	<div class="container">
		
		<h1>
			Search Results
		</h1>
		<hr>

		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<td>Sr. No.</td>
					<td>Article Title</td>
					<td>Published On</td>
				</tr>
			</thead>
			<tbody>
				<?php if (count($articles)){ ?>
				<?php $count = $this->uri->segment(4,0)?>
				<?php foreach($articles as $article){ ?>
				<tr>
					<td><?= ++$count; ?></td>
					<td><?= $article->title; ?></td>
					<td><?=  date('d M Y H:i:s',strtotime($article->created_at)) ;?></td>
				</tr>
				<?php 	} ?>
				<?php }else{ ?>
					<td colspan="3">Nothing Found</td>
				<?php } ?>
			</tbody>
		</table>
		<?= $this->pagination->create_links();  ?>

		

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