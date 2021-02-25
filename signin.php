<!DOCTYPE html>
<html>
<head>
	<title>Sign In page</title>
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
					<img src="assets/img/login.jpg" alt="IMG">
					<?php
						if(isset($errMsg))
						{
							echo '<div class="alert alert-danger" role="alert" style="margin-top:20px;">
								<span class="fa fa-exclamation-circle" aria-hidden="true"></span>
							'.$errMsg.'</div>';
						}
						elseif(isset($msg))
						{
						   echo'<br><br>';
						    echo $msg;
						}
					?>
				</div>

				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title">
						Customer Login
					</span>

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
						<input class="input100" type="password" name="Password" id="Password" placeholder="Password" >
						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100" style="margin-left: 15px;">
					<input type="checkbox" onclick="viewpassword()"> Show Password
					</div>

					<div class="container-login100-form-btn">
						<button class="btn btn-block btn-lg btn-outline-warning"  style="border-radius: 30px;" name="signin" id="signin">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							<a class="txt2" href="#" data-target="#pwdModal" data-toggle="modal">
							Forgot Password?
							</a>
						</span>
					</div>

					<div class="text-center p-t-20">
						<a class="txt2" href="signup.php">
							Create your Account
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

		<div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">										
				<h5>Password Recovery</h5>
			</div>
			<div class="modal-body">
				<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="text-center">
									<div class="panel-body">
										<fieldset>
										<form action="" method="POST">
											<div class="form-group">
											<input class="form-control input-lg" placeholder="E-mail Address" name="forgotpassword_email" type="email" required>
											<br>
											
											<input class="login100-form-btn" value="Send Password" name="forgotpassword" type="submit">
										</form>
										</div>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<div class="col-md-5">
				<button class="login100-form-btn" data-dismiss="modal" aria-hidden="true" style="float: right;">Cancel</button>
				</div>	
			</div>
		</div>
		</div>
		
	</div>

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
<!--===============================================================================================-->	
	
</body>

</html>