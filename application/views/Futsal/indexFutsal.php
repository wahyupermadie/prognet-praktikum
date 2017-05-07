<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Futsal/bootstrap/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Futsal/font-awesome/css/font-awesome.min.css"> -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Futsal/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Futsal/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/Futsal/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/Futsal/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/Futsal/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/Futsal/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/Futsal/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body background="<?php echo base_url(); ?>assets/Futsal/img/backgrounds/1.jpg">

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <!-- <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Bootstrap</strong> Login Form</h1>
                            <div class="description">
                            	<p>
	                            	This is a free responsive login form made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                            	</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your email and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="<?php echo base_url(); ?>loginFutsal" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username1">Username</label>
			                        	<input type="text" name="username1" id="username1" placeholder="Username..." class="form-username form-control" >
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" id="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
                                   <center> <h4>Ingin bergabung bersama kami? Klik <bottom type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> DISINI </bottom> </h4></center>
			                    </form>
                                <!-- Modal -->
                                  <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Prognet Futsal SignUp</h4>
                                        </div>
                                        <div class="modal-body">
                                        <div id="messages"></div>
                                          <form role="form" action="<?php echo base_url(); ?>signupfutsal" method="post" class="login-form" id="registerFormFutsal">
                                            <div class="form-group">
                                                <label class="sr-only" for="namafutsal">Nama Futsal</label>
                                                <input type="text" name="namafutsal" id="namafutsal" placeholder="Nama Futsal..." 
                                                class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="username">Username</label>
                                                <input type="text" name="username" id="username" placeholder="Username..." class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="password">Password</label>
                                                <input type="password" name="password1" id="password1" placeholder="Password..." 
                                                class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="confirmpassword">Confirm Password</label>
                                                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password..." class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="address">Address</label>
                                                <input type="text" name="address" id="address" placeholder="Address..." class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="Kota">Kota</label>
                                                
                                                  <select id="kota" name="kota" class="form-control">
                                                    <option>
                                                        Pilih Kota
                                                    </option>
                                                        <?php
                                                            foreach($kota as $valuex){

                                                                $nama=$valuex->nama_kota;
                                                                $id=$valuex->id_kota;
                                                        ?>
                                                            <option value="<?php echo $id;?>"

                                                            > 
                                                                <?php echo $nama;?>     
                                                            </option>
                                                        <?php
                                                            }
                                                        ?>
                                                  </select>
                                                
                                              </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="phonenumber">Phone Number</label>
                                                <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number..." 
                                                class="form-control">
                                            </div>
                                            <button type="submit" class="btn">Sign up!</button>
                                        </form>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/Futsal/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Bootstrap/js/registerFutsal.js"></script>
        <script src="<?php echo base_url(); ?>assets/Futsal/bootstrap/js/bootstrap.min.js"></script>
       <!--  <script src="<?php echo base_url(); ?>assets/Futsal/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Futsal/js/scripts.js"></script> -->
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>
</html>