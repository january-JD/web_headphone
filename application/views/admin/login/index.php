<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<?php $this->load->view('admin/login/head_login'); ?>
</head>
<body>
      <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo public_url() ?>admin/login_v1/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" id='form' class="form" method="post">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="username" id="username" placeholder="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div style="text-align: center;">
						<?php echo form_error('login'); ?>
					</div>
					<div class="container-login100-form-btn">
						<input type="submit" name="submit" class="login100-form-btn" value="login"> 
						
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--===============================================================================================-->	
	<script src="<?php echo public_url() ?>admin/login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo public_url() ?>admin/login_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo public_url() ?>admin/login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo public_url() ?>admin/login_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo public_url() ?>admin/login_v1/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo public_url() ?>admin/login_v1/js/main.js"></script>	
</body>
</html>