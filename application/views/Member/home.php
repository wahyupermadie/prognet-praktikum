<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Bootstrap/css/style2.css">
  <script src="<?php echo base_url(); ?>assets/Bootstrap/css/owl.carousel.css"></script>
  <script src="<?php echo base_url(); ?>assets/Bootstrap/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<!-- LOADER -->
<div id="loader-wrapper">
          <div class="logo"></div>
          <div id="loader"></div>
</div>
<!-- LOADER END -->
<header class="main_menu_sec navbar navbar-default navbar-fixed-top top-nav-collapse">
  <div class="container">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Prognet Sport</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Find Futrsal</a></li>
        <li><a class="page-scroll" href="#pr_sec">Our Service</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li>
              <a href=""></a>
          </li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="<?php echo base_url(); ?>/images/member/<?php echo $member['profile_pict']; ?>" class="profile_picture">
                  <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>member/profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                  <li><a href="<?php echo base_url(); ?>member/settingprofile"><span class="glyphicon glyphicon-cog"></span> Edit Profile</a></li>
                  <li><a href="<?php echo base_url(); ?>member/settingpassword"><span class="glyphicon glyphicon-lock"></span> Edit Password</a></li>
                  <li><a href="<?php echo base_url(); ?>logout -member"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              </ul>
          </li>
      </ul>
    </div>
  </div>
</header>
<!-- start slider Section -->
<section id="slider_sec">
    <div class="container">
  		<div class="row">
  			<div class="slider">
  					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  				  <!-- Indicators -->
  				  <ol class="carousel-indicators">
  					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
  					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
  					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  				  </ol>

  				  <!-- Wrapper for slides -->
  				  <div class="carousel-inner" role="listbox">
  					<div class="item active">
              <img src="<?php echo base_url(); ?>images/slider/slider.jpg" alt="...">
              	<div class="wrap_caption">
  						  <div class="carousel-caption">
  							<h1>Tekno Sport Center</h1>
  							<p>WKWKWKWKKWKWKWKWKWKW</p>
  						  </div>
  						</div>
  					</div>
  					<div class="item">
                <img src="<?php echo base_url(); ?>images/slider/slider.jpg" alt="...">
  						<div class="wrap_caption">
  						  <div class="carousel-caption">
  							<h1>Mensana In Sano</h1>
  							<p>ulalalalala</p>
  						  </div>
  						</div>
  					</div>
  					<div class="item">
                <img src="<?php echo base_url(); ?>images/slider/slider.jpg" alt="...">
  						<div class="wrap_caption">
  						  <div class="carousel-caption">
  							<h1>HALELUYA</h1>
  							<p>KILLING ME</p>
  						  </div>
  						</div>
  					</div>
  			</div>
    </div>
</section>
  				  <!-- Controls -->
            <!-- Tombol Next dan Previous -->
          <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a> -->
  			</div>
  		</div>
  	</div>
  <!-- End slider Section -->
  <section id="pr_sec">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
  				<div class="title_sec">
  					<h1>Our Service</h1>
  					<h2>WE’RE BALINESE SUPPORT SPORT CENTER</h2>
  				</div>
  			</div>
  			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  				<div class="service">
  					<i class="fa fa-globe"></i>
  					<h2>Find Futsal</h2>
  					<div class="service_hoverly">
  						<i class="fa fa-globe"></i>
  						<h2>Find Futsal</h2>
  						<p>Menemukan tempat futsal dengan mudah sesuai dengan keberadaan kita</p>
  					</div>
  				</div>
  			</div>
  			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  				<div class="service">
  					<i class="fa fa-google-wallet"></i>
  					<h2>E-Wallet</h2>
  					<div class="service_hoverly">
  						<i class="fa fa-google-wallet"></i>
  						<h2>E-Wallet</h2>
  						<p>Dengan mudah booking tempat futsal dengan E-Wallet</p>
  					</div>
  				</div>
  			</div>
  			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  				<div class="service">
  					<i class="fa fa-pencil"></i>
  					<h2>Easy Booking</h2>
  					<div class="service_hoverly">
  						<i class="fa fa-pencil"></i>
  						<h2>Easy Booking</h2>
  						<p>Booking tempat futsal ngga perlu ribet lagi cukup dengan sekali click booking saja</p>
  					</div>
  				</div>
  			</div>
  			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  				<div class="service">
  					<i class="fa fa-futbol-o"></i>
  					<h2>Play and Fun</h2>
  					<div class="service_hoverly">
  						<i class="fa fa-futbol-o"></i>
  						<h2>Play and Fun</h2>
  						<p>Setelah semua proses selesai, silahkan bermain ditempat futsal pilihan anda</p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>

  <!-- Container (Contact Section) -->
<section id="contact_sec">
  <div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
      <div class="title_cont">
        <h1>Contact Us</h1>
        <h2>WE’RE BALINESE SUPPORT SPORT CENTER</h2>
      </div>
    </div>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

</body>
<!-- java script -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/Bootstrap/js/appear.js"></script>
<script src="<?php echo base_url(); ?>assets/Bootstrap/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/Bootstrap/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/Bootstrap/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/Bootstrap/js/owl.carousel.min.js"></script>
<!-- START SMOOTH SCROLLING -->
<script>
$(function() {
$('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
      }
    }
  });
});
</script>
<script>
$('a[href*="#"]:not([href="#"])').click(function() {
if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
  var target = $(this.hash);
  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
  if (target.length) {
    $('html, body').animate({
      scrollTop: target.offset().top
    }, 1000);
    return false;
    }
  }
});
</script>
<!-- END SMOOTH SCROLLING -->
</html>
