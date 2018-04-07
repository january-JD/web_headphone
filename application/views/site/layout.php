<!DOCTYPE html>
<html>
<head>
	<title>www</title>
	<?php $this->load->view('site/head'); ?>
</head>
<body >
	<div class="container">
		<header class="row">
			<?php $this->load->view('site/header'); ?>
		</header>
		<div class="row content">
		
			
			<section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">
				<?php if(isset($message)): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $message ?>
					</div>

				<?php endif; ?>
				<?php $this->load->view($temp,$this->data); ?>
			</section>

			<aside class="sidebar col-lg-3 col-md-3 col-sm-3  col-lg-pull-9 col-md-pull-9 col-sm-pull-9">
				<?php $this->load->view('site/left',$this->data); ?>
			</aside>


		</div>
		<section class="banner">
			<?php $this->load->view('site/banner'); ?>
		</section>
		<footer id="footer" class="row">
			<?php $this->load->view('site/footer'); ?>
		</footer>
	</div>
	<?php $this->load->view('site/js'); ?>

</body>

</html>