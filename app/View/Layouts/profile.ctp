<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset(); ?>
	<title><?= $title_for_layout; ?></title>
	<?= $this->Html->meta('icon'); ?>
	<?= $this->Html->css('bootstrap'); ?>
	<?= $this->Html->css('style1'); ?>
	<?= $this->fetch('meta'); ?>
	<?= $this->fetch('css'); ?>
	<?= $this->fetch('script');	?>
</head>
<body class="layout-bg default-bg">

	<div class="container-fluid">
		<?= $this->Session->flash(); ?>
	</div>

	<div class="container">
<!--header-->
		<div class="row">
			<div class="col-md-3 padd02">
				<div style="margin: 30px 0px 30px 0px;">
					<a class="logo" href="/"><img src="/app/webroot/img/esport.png"></a>
				</div>
			</div>
	<!--navbar-->
			<div class="col-md-offset-6 nav-bg my-nav-g">
				<?= $this->element('homebar'); ?>
			</div>
	<!--/navbar-->
		</div>
<!--/header-->
<!--content-->
		<div class="row">
			<div class="col-md-3">
				<div class="bg">
					<?php $user = current($user); ?>
					<?= '<h3 style="text-align: center;">'."Bonjour ".$user['username'].' !</h3>'; ?>
				</div>
				<div class="bg">
					<h3 style="text-align: center">EDIT</h3>
				</div>
				<div class="bg">
					<?= $this->element('sidebar_tournament'); ?>
				</div>
				<div class="bg">
					<h3 style="text-align: center;">Forum</h3>
				</div>
			</div>

			<div class="col-md-6">
				<?= $this->fetch('content'); ?>
			</div>
			<div class="col-md-3">
				<div class="paddb02">
					<?= $this->element('tweet'); ?>
				</div>
			</div>
			<?= $this->Session->flash(); ?>			
		</div>
<!--/content-->

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?= $this->Html->script('bootstrap.min.js'); ?>
</body>
</html>
