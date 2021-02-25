<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_css/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/util.css">
	<link rel="stylesheet" type="text/css" href="login_css/main.css">
<!--===============================================================================================-->
<!-- Password viewer-->
<style type="text/css">
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -33px;
  margin-right: 10px;
  position: relative;
  z-index: 2;
}
</style>
</head>
<body>
 <div class="limiter">
		<div class="container-100">
			<div class="wrap-login100" style="padding-top:40px;">
				<div class="login10-pic">
					<img src="assets/img/register.jpg" alt="IMG">
					<?php
						if(isset($errMsg)){
							echo '<div class="alert alert-success" role="alert" style="margin-top:70px;">
							'.$errMsg.'</div>';
						}
						?>
				</div>

				<form class="login10-form validate-form" method="post">
					<span class="login100-form-title">
						Customer Registeration
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid name is required">
						<input class="input100" type="text" type="text" placeholder="Fullname" name="Name" id="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="Email" id="Email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Must include 8 characters
					Atleast 1 capital letter
					Atleast 1 number
					Atleast 1 sp. char.">

						<input class="input100" type="password" name="Password" id="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password">
						<span toggle="#Password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Confirm Password is required">
						<input class="input100" type="text" name="C_Password" id="C_Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="signup" id="signup" onclick = "Checktnc()">
							Register
						</button>
						
					</div>

					<br>
					<div class="wrap-input100 validate-input" data-validate = "please select this">
						<input type="checkbox" name="tnc" id="tnc" class="validate-input" data-validate = "please select this">
						<span class="txt1">
							By clicking sign up, I agree to the
						</span>
						<a class="txt2" href="terms.php">
							terms and conditions 
						</a>
					</div>
					

					<div class="text-center p-t-20">
						<span class="txt1">
							Already have an account ?
						</span>
						<a class="txt2" href="signin.php">
							Login Here 
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					<div class="text-center p-t-20">
						<a class="txt2" href="index.html">
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
							Homepage
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


<script type="text/javascript">
    function Checktnc() {
        document.getElementById("tnc").innerHTML = tnc;
        if (tnc.checked != 1) {
            window.alert("Terms and conditions not accepted");
        } 
    }
</script>
<script src="login_js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login_js/popper.js"></script>
	<script src="login_js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login_js/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login_js/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>
	<script type="text/javascript">
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>

</body>
</html>