<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/Bootstrap/js/jquery-1.11.3.js"></script>
	<script src="<?php echo base_url(); ?>assets/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse"
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Prognet Futsal</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<form class="navbar-form navbar-right" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>login" class="form-inline">
					<div class="form-group">
						<div class="input-group">
							<input name="email" placeholder="Email" type="text" class="form-control" required="required">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<input name="pass" placeholder="Password" type="password" class="form-control" required="required">
						</div>
					</div>
					<input type="submit" class="btn btn-default" name="BtnLogin" value="Masuk">
				</form>

				</div>
			</div>
		</nav>


	<div class="col-md-7">
	<img src="<?php echo base_url(); ?>/images/web/c70.jpg" class="img-responsive">
	</div>
	<div class="col-md-5">
		<div id="messages"> </div>
    	<form action="<?php echo base_url(); ?>signup" method="post" id="registerForm">
			<h1><b>Create an Account</b></h1>

				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5">
							<div class="form-group" id="form-first">
								<label for="firstname">First Name</label>
								<input id="firstname" class="form-control input-lg" name="firstname" placeholder="First Name" value=""  aria-describedby="firstnameStatus">
								<!-- <span id="simbol1" class="" aria-hidden="true"></span>
								<span id="namaStatus" class="sr-only">(success)</span> -->
							</div>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-5">
							<div class="form-group" id="form-last">
								<label for="lastname">Last Name</label>
								<input id="lastname" class="form-control input-lg" name="lastname" placeholder="Last Name" value="" aria-describedby="lastnameStatus">
								<!-- <span id="simbol" class="" aria-hidden="true"></span>
								<span id="lastnameStatus" class="sr-only">(success)</span> -->
							</div>
						</div>
					</div>
				</div>


			<div class="form-group" id="form-email">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-11">
							<label for="email">Email</label>
							<input id="email" class="form-control input-lg" name="email" placeholder="Email" value="" aria-describedby="emailStatus">
							<!-- <span id="simbol" class="" aria-hidden="true"></span>
							<span id="emailStatus" class="sr-only">(success)</span> -->
						</div>
					</div>
				</div>
			</div>

			<div class="form-group" id="form-password">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-11">
							<label for="password">Password</label>
							<input id="password" type="password" class="form-control input-lg" name="password" placeholder="Password" value=""s aria-describedby="passwordStatus">
							<!-- <span id="simbol" class="" aria-hidden="true"></span>
							<span id="passwordStatus" class="sr-only">(success)</span> -->
						</div>
					</div>
				</div>
			</div>

			<div class="form-group" id="form-password2">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-11">
							<label for="password2">Confirm Password</label>
							<input id="password2" type="password" class="form-control input-lg" name="password2" placeholder="Confirm Password" value="" aria-describedby="passwordStatus2">
							<!-- <span id="simbol" class="" aria-hidden="true"></span>
							<span id="passwordStatus2" class="sr-only">(success)</span> -->
						</div>
					</div>
				</div>
			</div>

			<div class="form-group" id="form-mobilephone">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-11">
							<label for="mobilephone">Mobile Phone</label>
							<input id="phonenumber" class="form-control input-lg" name="phonenumber" placeholder="Mobile Phone" value="" aria-describedby="mobilephoneStatus">
							<!-- <span id="simbol" class="" aria-hidden="true"></span>
							<span id="namaStatus" class="sr-only">(success)</span> -->
						</div>
					</div>
				</div>
			</div>
			<input id="send" name="send" type="submit" value="Create Account" class="btn btn-success btn-lg">
		</form>
		<br>
	</div><!-- col-md-6 -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/Bootstrap/js/register.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/Bootstrap/js/bootstrap.min.js"></script> 
</body>
</html>
