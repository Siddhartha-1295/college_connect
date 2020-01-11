<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<link rel="stylesheet" type="text/css" href="csslogin/util.css">
	<link rel="stylesheet" type="text/css" href="csslogin/main.css">
</head>
<body>
<?php

?>
	<div class="limiter">
		<div class="container-login100" style="background-image:url('images.jpg'); background-repeat: no-repeat; background-size: cover;">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="otpverify.php" method="POST">
						<span class="login100-form-title p-b-33"><span style="color:red ; font-size:120%">O</span>TP Verification</span>
						<p style="color:red">*Please Check Your mail for validation</p>
						<div class="wrap-input100 rs1 validate-input" data-validate="otp is required">
							<input class="input100" type="password" name="pass" placeholder="Enter OTP" required>
							<span class="focus-input100-1"></span>
						</div>

						<div class="container-login100-form-btn m-t-20">
							<button class="login100-form-btn" type="submit" value="otp">
								<span style="color:red ; font-size:110%">V</span>erify
							</button>
						</div>
						<br>
				</form>
			</div>
		</div>
	</div>
	
	<script src="vendorlogin/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendorlogin/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendorlogin/bootstrap/js/popper.js"></script>
	<script src="vendorlogin/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendorlogin/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendorlogin/daterangepicker/moment.min.js"></script>
	<script src="vendorlogin/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendorlogin/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="jslogin/main.js"></script>
</body>
</html>