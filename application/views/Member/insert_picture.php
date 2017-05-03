<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Set Profile Picture</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Bootstrap/css/style2.css">
  <script src="<?php echo base_url(); ?>assets/Bootstrap/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
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

			</div>
		</div>
	</nav>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<center>
			<h1><b>Profile Picture</b></h1>
			<center><img src="<?php echo base_url(); ?>images/member/<?php echo $member['profile_pict']; ?>" style="max-height: 200px;"></center><br>
		</center>

			<form id="form-picture" enctype="multipart/form-data" action="<?php echo base_url(); ?>member/edit_picture" method="post">
				<div class="form-group">
					<input id="picture" type="file" class="form-control" name="picture" aria-describedby="pictureStatus"><br>

					<center><button type="submit" class="btn btn-primary" id="submit">Change Profile</button></center>
					<div align="right"><a href="<?php echo base_url(); ?>home">Skip</a></div>
				</div>
			</form>
	</div></center>
</body>
</html>
