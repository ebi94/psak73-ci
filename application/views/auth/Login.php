<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PSAK73 | Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE'); ?>/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet"
		href="<?php echo base_url('assets/AdminLTE'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE'); ?>/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<style>
		.login-page {
			background-image: url("<?php echo base_url('assets/image/background-login.svg'); ?>"), linear-gradient(180deg, #BCBEA8, #dde6d5);
      background-size: 1400px, 100%;
      background-position: center;
		}
	</style>
</head>

<body class="login-page" style="min-height: 512.8px;">
	<div class="login-box">
		<div class="card">
			<div class="card-body login-card-body" style="border-radius: 10px;">
				<div class="login-logo">
					<img src="<?php echo base_url('assets/image/Logo.png'); ?>" alt="Logo" height="40">
				</div>
				<?php if(isset($error)) { echo $error; }; ?>
				<form action="<?php echo base_url('log/do/login') ?>" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="username" placeholder="Username">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<?php echo form_error('username'); ?>
					<div class="input-group mb-3">
						<input type="password" class="form-control" name="password" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?php echo form_error('password'); ?>
					<div class="row">
						<!-- /.col -->
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-block btn-flat " style="border-radius: 8px;"><i
									class="nav-icon fas fa-sign-in-alt"></i> Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>

				<!-- <p class="mb-0"> -->
				<!-- <a href="<?php echo base_url('log/regis'); ?>" class="text-center">Register a new membership</a> -->
				<!-- </p> -->
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('assets/AdminLTE'); ?>/dist/js/adminlte.min.js"></script>



</body>

</html>
