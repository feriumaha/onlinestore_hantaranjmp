<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url("assets/images/vavicon.png"); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets2/vendor/bootstrap/css/bootstrap.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets2/fonts/font-awesome-4.7.0/css/font-awesome.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets2/vendor/animate/animate.css"); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets2/vendor/css-hamburgers/hamburgers.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets2/vendor/animsition/css/animsition.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets2/vendor/select2/select2.min.css"); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets2/vendor/daterangepicker/daterangepicker.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets2/css/util.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets2/css/main.css"); ?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form method="post" action="<?php echo site_url('ciadmin/auth'); ?>" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>
					<?php 
                    if($this->session->flashdata('msg')){
                        echo '<div class="alert alert-danger">'.$this->session->flashdata('msg').'</div>';
                      }                      
                    ?>
					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets2/vendor/jquery/jquery-3.2.1.min.js"); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets2/vendor/animsition/js/animsition.min.js"); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets2/vendor/bootstrap/js/popper.js"); ?>"></script>
	<script src="<?php echo base_url("assets2/vendor/bootstrap/js/bootstrap.min.js"); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets2/vendor/select2/select2.min.js"); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets2/vendor/daterangepicker/moment.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets2/vendor/daterangepicker/daterangepicker.js"); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets2/vendor/countdowntime/countdowntime.js"); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets2/js/main.js"); ?>"></script>

</body>
</html>