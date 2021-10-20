<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xem du lieu</title>
	<!-- Ket noi thu vien bootstrap va css -->
	<script type="text/javascript" src="<?php 	echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php 	echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php 	echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php 	echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php 	echo base_url(); ?>1.css">

</head>
<body>
	<?php require('header_sim.php') ?>
	
	
	<div class="container">
			<h3 class="text-xs-center"> Cac sim va gia hien co </h3>
			<hr>
	<div class="container">	
		<div class="row">
			
			<?php foreach ($dulieutucontroller as $key => $value): ?>
				
				<div class="col-sm-4">
					<div class="card card-block">
						<h3 class="card-title">So sim: <?= $value['so'] ?></h3>
						<p  class="card-text">Gia tien: <?= $value['gia'] ?> </p> 
						<a href="showData/deleteData/<?= $value['id'] ?>" class="btn btn-danger xoa"> <i class="fa fa-times"> </i></a>
					</div>
				</div>
				
			<?php endforeach ?>
			
			
		</div>
	</div>

</body>
</html>