<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/bootstrap/css/bootstrap.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/animate/animate.css') ?>">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css-hamburgers/hamburgers.min.css') ?>">
	<!--==================================================================assets/plugins/=============================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/animsition/css/animsition.min.css') ?>">
	<!--==================================================================assets/plugins/=============================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/select2/select2.min.css') ?>">
	<!--==================================================================assets/plugins/=============================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/daterangepicker/daterangepicker.css') ?>">
	<!--==================================================================assets/plugins/=============================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/main.css') ?>">
	<!--===============================================================================================-->

	<style type="text/css">
	.avatar {
		/*vertical-align: middle;*/
		width: 50px;
		height: 50px;
		/*border-radius: 50%;*/
	}
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?php echo base_url('login')?>" >
					<div class="text-center">
						<img class="avatar" src="<?php echo base_url('assets/images/icon/mosque2.png')?>">
					</div>
					<span class="login100-form-title p-b-26">
						Masjid Nurul Ashri
					</span>
					<?php if(isset($error)) {
						echo $error;
					}; ?>
					<div class="wrap-input100 validate-input" data-validate = "Valid username is: a@b.c">
						<input class="input100" type="text" name="username" autofocus>
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<!-- <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span> -->
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit"  >
								Login
							</button>
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="<?php echo base_url('assets/vendors/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/vendors/animsition/js/animsition.min.js') ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/vendors/bootstrap/js/popper.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/bootstrap/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/vendors/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/vendors/daterangepicker/moment.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/daterangepicker/daterangepicker.js') ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/vendors/countdowntime/countdowntime.js') ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/vendors/js/main.js') ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/vendors/jquery-validation/dist/jquery.validate.min.js') ?>"></script>

</body>
</html>