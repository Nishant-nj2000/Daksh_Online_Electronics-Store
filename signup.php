<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<meta charset="UTF-8">
	<link href="assets/img/favicon.png" rel="icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/loginregister/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/loginregister/css/font-awesome.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/loginregister/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/loginregister/css/main.css">
<!--===============================================================================================-->
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
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100" style="margin-left: 15px;">
					<input type="checkbox" onclick="viewpassword()"> Show Password
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Confirm Password is required">
						<input class="input100" type="text" name="C_Password" id="C_Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button  class="btn btn-block btn-lg btn-outline-warning"  style="border-radius: 30px;" name="signup" id="signup" onclick = "Checktnc()">
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
						<a class="txt2" href="index.php">
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

<script src="assets/loginregister/js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets/loginregister/js/popper.js"></script>
<script src="assets/loginregister/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets/loginregister/js/tilt.jquery.min.js"></script>
<script >
	$('.js-tilt').tilt({
		scale: 1.1
	})
</script>
<script>
	function viewpassword() 
	{
	  var x = document.getElementById("Password");
	  if (x.type === "password") {
	    x.type = "text";
	  } else {
	    x.type = "password";
	  }
	}
</script>


</body>
</html>