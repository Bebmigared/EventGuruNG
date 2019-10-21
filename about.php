<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About</title>
	<link rel="icon" href="images/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/lightgallery.min.css">
	<link rel="stylesheet" href="css/datepicker.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmlanager.com/gtag/js?id=UA-137786155-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137786155-4');
</script>
</head>
<body style="overflow:visible !important;">

	
<?php include('header.php'); ?>

-- banner pages --
<div class="page-heading">
	
</div>

<div id="main">
	<div class="entry-content">
		<!-- who we are page -->
		<div class="page1-who-we-are">
			<div class="container">
				<div class="row">
					
						<div class="page1-who-we-are-text">
							<h2>who we are</h2>

							<p>We are on a mission to provide world-class Events services, using experts while creating value for our users and opportunities to be entertained, learn and Network . Our vision is to be the most valuable Events Management Service Provider and Partner to our Clients throughout Africa and beyond.</p>
						</div>
				</div>
			</div>
		</div>
		<!-- why choose EventGuru -->
<div class="choose-event">
		<div class="container">
			<h2>why choose EventGuru</h2>
	
			
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="item-title">
						<div class="icon-title">
							<i class="fa fa-trophy" aria-hidden="true"></i>
						</div>
						<h3>
							<a href="#">Quality events</a>
						</h3>
						<p>EventGuru gives to you quality events that promises to add to you Endless Networking opportunities with the industry's Best Professionals.</p>
					</div>
				</div>
	
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="item-title">
						<div class="icon-title">
							<i class="fa fa-diamond" aria-hidden="true"></i>
						</div>
						<h3>
							<a href="#">A-list Venues</a>
						</h3>
						<p>With our strategic partnership with A-list corporate events center, we give special Events Experience to You, our special Participant</p>
					</div>
				</div>
	
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="item-title">
						<div class="icon-title">
							<i class="fa fa-credit-card" aria-hidden="true"></i>
						</div>
						<h3>
							<a href="#">Good Pricing</a>
						</h3>
						<p>Bringing the best quality to you at an awesome and good Pricing. <br>Intrestingly, most of our events are FREE! <br> All you have to do is join an event</p>
					</div>
				</div>
	
				
			
		</div>
	</div>
		<!-- core values page -->
		<div class="page1-core-values">
			<div class="container">
				<h2>Our Core Values</h2>

				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="item">
							<i class="fa fa-industry" aria-hidden="true"></i>

							<h3>We are value Driven</h3>

							<p>Our Driving force is 'knowing that the service we offer continuously adds value to you'.</p>
						</div>
					</div>


					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="item">
							<i class="fa fa-trophy" aria-hidden="true"></i>

							<h3>We are committed to Excellence</h3>

							<p>We only bring to you the best events that would make you excel in your world.</p>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="item">
							<i class="fa fa-users" aria-hidden="true"></i>

							<h3>We are Customer Centered</h3>

							<p>Before we present you an event, all we brainstorm of is what would make you better.</p>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="item">
							<i class="fa fa-diamond" aria-hidden="true"></i>

							<h3>We have Integrity</h3>

							<p>We have a reputation for satisfying and surpassing our client’s expectations. Everyday we work towards keeping that</p>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="item">
							<i class="fa fa-handshake-o" aria-hidden="true"></i>

							<h3>We have Great Attitude</h3>

							<p>The way with which we deliver to you concerns us and we giv you the best with a one of a kind attitude.</p>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="item">
							<i class="fa fa-signal" aria-hidden="true"></i>

							<h3>We Improve Continuously</h3>

							<p>Every of our professional qualities lead us to Improve Continuously while giving you the best</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- linefix -->
		<div class="linefix-page1"></div>

		<!-- subscribe newsletter -->
		<div class="main-subscribe-newsletter">
			<h2>Subscribe For Newsletter</h2>

			<form action="subscribe.php" method="POST" class="frm-sub">
				<div class="input-sub">
					<input type="text" name="email" placeholder="Your email address" required>
					<input name="msgowner" type="hidden" value="<?=$_SESSION['user']['id'] ?>" >
                    <!--<button type="button" name="subscribe" id="subscribe" value="Subscribe" style="background-image:linear-gradient(to top, #123c63, #1fb5ac);">-->
					<button class="btn-sub">Subscribe</button>
				</div>
			
			</form>
		</div><br>

		<!-- maps -->
		<div class="main-maps main2-maps">
			<!--<div id="style-selector-control"  class="map-control">
		      <select id="style-selector" class="selector-control">
		        <option value="dark">Dark</option>
		        <option value="silver">Silver</option>
		        <option value="night">Night mode</option>
		        <option value="retro">Retro</option>
		        <option value="hiding" selected="selected">Hide features</option>
		      </select>
		    </div> -->
			<div id="map"></div>

			<!--<div class="container">-->
				<div class="contact-maps">
					<h3>contact information</h3>

					<ul>
						<li>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<p><span>address</span><br>6 Olusoji Idowu str, Obanikoro bus/stop, Ilupeju, lagos, Nigeria</p>
						</li>
						<li>
							<i class="fa fa-phone" aria-hidden="true"></i>
							<p><span>tel</span><br>+2349087222874</p> 
						</li>
						<li>
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<p><span>email</span><br><a href="mailto:info@EventGuru.com">info@EventGuru.com</a></p>
						</li>
					</ul><br>

					<!--<a href="#" class="btn-contact-us">contact us</a>-->
				</div>
			<!--</div>-->
			
		</div>
	</div>
</div>



	<!-- Footer  Begins -->
<?php include('footer.php'); ?>
<!-- Footer  Ends -->

	<div id="to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
	

	<script type="text/javascript" src="js/y-video.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/picturefill.min.js"></script>
	<script type="text/javascript" src="js/lightgallery.min.js"></script>
	<script type="text/javascript" src="js/lg-thumbnail.min.js"></script>
	<script type="text/javascript" src="js/lg-autoplay.min.js"></script>
	<script type="text/javascript" src="js/lg-fullscreen.min.js"></script>
	<script type="text/javascript" src="js/lg-hash.min.js"></script>
	<script type="text/javascript" src="js/lg-pager.min.js"></script>
	<script type="text/javascript" src="js/lg-share.min.js"></script>
	
	<script type="text/javascript" src="js/lg-video.min.js"></script>
	<script type="text/javascript" src="js/lg-zoom.min.js"></script>
	
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	
	<script type="text/javascript" src="js/swiper.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/parallax.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/maps-style.js"></script>
	<!--<script src=”https://maps.googleapis.com/maps/api/js?key=AIzaSyAER0nFInObYID6YXDTPqQS3bopGTJ6tgY&libraries=places&callback=initMap”

async defer></script>-->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAER0nFInObYID6YXDTPqQS3bopGTJ6tgY&callback=initMap"
     type="text/javascript" ></script>
</body>
</html>