<?php 
						session_start();
						include 'allevent.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EventGuru - Get access to more Events Or Create your own event (paid or free) </title>
	<link rel="icon" href="images/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/lightgallery.min.css">
	<link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <!--<link href="https://fontawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137786155-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137786155-4');
</script>
<style>
    .logo{
        width:30px;
        height:60px;
    }
</style>
<style>
.lgx-footer-area {
    display: flex;
    overflow: hidden;
    padding: 4rem 0 3rem 0;
}


.lgx-footer-single {
    flex: 1;
    text-align: left;
    color: white;
    margin-left: 15px;
    margin-right: 15px;
    overflow: hidden;
}
.lgx-footer-single, .lgx-footer-single .logo, .widget-footer-bottom {
    display: block;
}
.widget-title{
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
    font-size: 24px !important;
}
}
.lgx-footer {
    background-size: cover;
    color: #fff;
    text-align: center;
}
.list-inline {
    font-size: xx-large;
}
</style>
</head>
<body>

	
	<?php include('header.php'); ?>
		

<!-- slider -->
<?php include 'allevent.php'; ?>
<div class="main-slider">
	<div class="swiper-container">
	    <div class="swiper-wrapper">
	        <div class="swiper-slide" style="background:url('signing/new/<?php echo $event[0]['flyer'] ?>') no-repeat;">
	        	<div class="slider-info">
	        		<ul>
	        			<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $event[0]['startdate'] ?></li>
	        			<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $event[0]['venue'] ?>,&nbsp;<?php echo $event[0]['locations'] ?></li>
	        			<li><i class="fa fa-tag" aria-hidden="true"></i><?php echo $event[0]['eventcategory'] ?></li>
	        		</ul>
						</div>
						<div class="slider-text">
							<h3><?php echo $event[0]['eventname'] ?></h3>
						</div>
						<div class="slider-button">
	        		<a href="details.php/?e=<?=$event[0]['id']?>"><i class="fa fa-file-text" aria-hidden="true"></i> information</a>
	        		<a href="details.php/?e=<?=$event[0]['id']?>"><i class="fa fa-credit-card" aria-hidden="true"></i> Get ticket</a>
	        	</div>
					</div>
					<div class="swiper-slide" style="background:url('signing/new/<?php echo $event[2]['flyer'] ?>') no-repeat;">
	        	<div class="slider-info">
	        		<ul>
	        			<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $event[2]['startdate'] ?></li>
	        			<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $event[2]['venue'] ?>,&nbsp;<?php echo $event[2]['locations'] ?></li>
	        			<li><i class="fa fa-tag" aria-hidden="true"></i><?php echo $event[2]['eventcategory'] ?></li>
	        		</ul>
						</div>
						<div class="slider-text">
							<h3><?php echo $event[2]['eventname'] ?></h3>
						</div>
						<div class="slider-button">
	        		<a href="details.php/?e=<?=$event[2]['id']?>"><i class="fa fa-file-text" aria-hidden="true"></i> information</a>
	        		<a href="details.php/?e=<?=$event[2]['id']?>"><i class="fa fa-credit-card" aria-hidden="true"></i> Get ticket</a>
						</div>
						</div>	

	         <div class="swiper-slide" style="background: url('signing/new/<?php echo $event[6]['flyer'] ?>') no-repeat;">
	        	<div class="slider-info">
	        		<ul>
	        			<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $event[6]['startdate'] ?></li>
	        			<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $event[6]['venue'] ?>, &nbsp;<?php echo $event[6]['locations'] ?></li>
	        			<li><i class="fa fa-tag" aria-hidden="true"></i><?php echo $event[6]['eventcategory'] ?></li>
	        		</ul>
						</div>
						<div class="slider-text">
							<h3><?php echo $event[6]['eventname'] ?></h3>
						</div>
						<div class="slider-button">
	        		<a href="details.php/?e=<?=$event[6]['id']?>"><i class="fa fa-file-text" aria-hidden="true"></i> information</a>
	        		<a href="details.php/?e=<?=$event[6]['id']?>"><i class="fa fa-credit-card" aria-hidden="true"></i> Get ticket</a>
						</div>
					</div>

						<div class="swiper-slide" style="background: url('signing/new/<?php echo $event[7]['flyer'] ?>') no-repeat;">
	        	<div class="slider-info">
	        		<ul>
	        			<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $event[7]['startdate'] ?></li>
	        			<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $event[7]['venue'] ?>,&nbsp;<?php echo $event[7]['locations'] ?></li>
	        			<li><i class="fa fa-tag" aria-hidden="true"></i><?php echo $event[7]['eventcategory'] ?></li>
	        		</ul>
						</div>
						<div class="slider-text">
							<h3><?php echo $event[7]['eventname'] ?></h3>
						</div>
						<div class="slider-button">
	        		<a href="details.php/?e=<?=$event[7]['id']?>"><i class="fa fa-file-text" aria-hidden="true"></i> information</a>
	        		<a href="details.php/?e=<?=$event[7]['id']?>"><i class="fa fa-credit-card" aria-hidden="true"></i> Get ticket</a>
						</div>
	         </div>
	    </div>
	    <!-- Add Pagination -->
	    <div class="swiper-pagination swiper-pagination-white"></div>
	    <!-- Add Arrows -->
	    <div class="swiper-button-next swiper-button-white"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	    <div class="swiper-button-prev swiper-button-white"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
	</div>
</div>


<!-- about event -->
<div class="main-about-eventmap">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="text-about">
					<h3>About EventGuru</h3>
					<p>We are on a mission to provide world-class Events services, using experts while creating value for our users and opportunities to learn, be entertained and Network . Our vision is to be the most valuable Events Management Service Provider and Partner to our Clients throughout Africa and beyond... </p>
					<div class="button-about">
						<a href="about.php">more information</a>
						<a href="signing/new/events.php">Create an Event</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="event-search">
					<h3>Search for Events</h3>

					<div class="frm-event-search">
						<form action="search.php" method="post">
							<input type="text" name="keyword" id="keyword" placeholder="Keyword">

							<!--<div class="sl-cate">
								<select name="category" id="category">
									<option>Business</option>	
									<option>Conference</option>
									<option>Education</option>
									<option>Engineering</option>	
									<option>Music</option>	
									<option>Technology</option>
								</select>
								<i class="fa fa-chevron-down" aria-hidden="true"></i>
							</div>-->
							
							
							<!--
							<div class="ip-date">
								<input class="datepicker" placeholder="start date" data-date-format="mm/dd/yyyy">
								<i class="fa fa-calendar" aria-hidden="true"></i>
							</div>	-->
							

							<button name="search" id="search">search</button>
						</form>
					</div>

					<div class="overlay"></div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- lastest event -->
<div class="main-lastest-event">
	<div class="container">
	<div class="row">
		<h3>Lastest events</h3>

		<div class="wraper">
			<div class="iso-menu">
				<ul>
					<li class="active" data-filter="*">ALL</li>
					<li data-filter=".technology">technology</li>
					<li data-filter=".business">business</li>
					<li data-filter=".music">music</li>
					<li data-filter=".fashion">fashion</li>
					<li data-filter=".sport">sport</li>
					<li data-filter=".education">education</li>
					<li data-filter=".travel">travel</li>
				</ul>
			</div>

			

			<select class="select-filter">
	            <option class="data-filter" value="*">all</option>

	            <option class="data-filter" value=".technology">technology</option>

	            <option class="data-filter" value=".business">business</option>

	            <option class="data-filter" value=".music">music</option>

	            <option class="data-filter" value=".fashion">fashion</option>

	            <option class="data-filter" value=".sport">sport</option>

	            <option class="data-filter" value=".education">education</option>

	            <option class="data-filter" value=".travel">travel</option>

	        </select>

	        <div class="clearfix"></div>

			<div class="iso-main">
				<div class="row">
					<div class="item technology col-xs-12 col-sm-12 col-md-4">
						<div class="row">
							<div class="item-small">
								<div class="img-item">
									<img src="images/lastest-event/img1.jpeg" alt="">
									<div class="btn-iso">
										<a href="javascript:;">business</a>
										<a href="javascript:;">upcoming</a>
									</div>
									<h3><a href="details.php/?e=<?=$event[2]['id']?>"><?php echo $event[2]['eventname'] ?></a></h3>
								</div>

								<div class="details-iso">
									<div class="details-top">
										<ul>
											<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $event[2]['startdate'] ?></li>
											<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $event[2]['locations'] ?></li>
										</ul>

										<p><?php echo $event[2]['comment'] ?></p>
									</div>
								</div>

								<div class="btn-small-item">
									<a href="details.php/?e=<?=$event[2]['id']?>"><i class="fa fa-file-text" aria-hidden="true"></i> information</a>
									<a href="details.php/?e=<?=$event[2]['id']?>"><i class="fa fa-credit-card" aria-hidden="true"></i> Get ticket</a>
								</div>
								
							</div>
						</div>
						<div class="item-fix"></div>
					</div>
							
					<div class="item business col-xs-12 col-sm-12 col-md-4">
						<div class="row">
							<div class="item-small">
								<div class="img-item">
									<img src="images/lastest-event/img2.jpg" alt="">
									<div class="btn-iso">
										<a href="javascript:;">Tech</a>
										<a href="javascript:;">upcoming</a>
									</div>
									<h3><a href="details.php/?e=<?=$event[0]['id']?>"><?php echo $event[0]['eventname'] ?></a></h3>
								</div>

								<div class="details-iso">
									<div class="details-top">
										<ul>
											<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $event[0]['startdate'] ?></li>
											<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $event[0]['locations'] ?></li>
										</ul>

										<p><?php echo $event[0]['comment'] ?></p>
									</div>
								</div>

								<div class="btn-small-item">
									<a href="details.php/?e=<?=$event[0]['id']?>"><i class="fa fa-file-text" aria-hidden="true"></i> information</a>
									<a href="details.php/?e=<?=$event[0]['id']?>"><i class="fa fa-credit-card" aria-hidden="true"></i> Get ticket</a>
								</div>
								
							</div>
						</div>
						<div class="item-fix"></div>
					</div>
					

					<div class="item music col-xs-12 col-sm-12 col-md-4">
						<div class="row">
							<div class="item-small">
								<div class="img-item">
									<img src="images/lastest-event/img6.jpg" alt="">
									<div class="btn-iso">
										<a href="#music">music</a>
										<a href="javascript:;">upcoming</a>
									</div>
									<h3><a href="details.php/?e=<?=$event[6]['id']?>"><?php echo $event[6]['eventname'] ?></a></h3>
								</div>

								<div class="details-iso">
									<div class="details-top">
										<ul>
											<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $event[6]['startdate'] ?></li>
											<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $event[6]['locations'] ?></li>
										</ul>

										<p>The Annual Ikeja Music Festival is here again. </p>
									</div>
								</div>

								<div class="btn-small-item">
									<a href="details.php/?e=<?=$event[6]['id']?>"><i class="fa fa-file-text" aria-hidden="true"></i> information</a>
									<a href="details.php/?e=<?=$event[6]['id']?>"><i class="fa fa-credit-card" aria-hidden="true"></i> Get ticket</a>
								</div>
								<div class="item-fix"></div>
							</div>
						</div>
					</div>			
				</div>
			</div>

			<a href="eventlist.php"><div class="all-event"><i class="fa fa-plus" aria-hidden="true"></i> all events</div></a>
		</div>
	</div>	
	</div>
	
</div>



<!-- interested event -->



<!-- conference EventGuru -->
<div class="main-conference-event">
    <div class="row">
    <div class="col-md-5">
	<h3>Start Your Own <br>Event</h3>
	<a href="signing/new/events.php">start an Event <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
	</div>
	<div class="col-md-6">
	<h3>Let EventGuru <br>Manage Your Event</h3>
	<a href="managemyevent.php">Manage My Event<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
	</div>
	</div>
</div>

<!-- our venues -->
<div class="main-our-venues-event">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-7 col-w">
				<div class="row venues-float">
					<div class="venues-item">
						<div id="owl-venues" class="owl-carousel owl-theme">
						    <div class="item">
								<h2>Some of our venues</h2>
								<h3>CHELSEA HOTEL</h3>
								<p>We can even help you plan your meetings with our City-Centre Abuja Chelsea Hotel meeting planner. Chelsea Hotels are synonymous for providing the right style that meets your demands and taste</p>
								
								<address class="address-venues">
									<div class="add1">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<span>address: </span>
										Plot 389, Cadatral Zone, Central Business District, Abuja.
									</div>

									<div class="add2">
										<div class="small1">
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span>phone: </span>
											+234 (0) 9 2918911-3
										</div>
										<div class="small2">
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>email: </span>
											<a href="mailto:info@chelseahotelabuja.com">info@chelseahotelabuja.com</a>
										</div>
									</div>

									<div class="add3">
										<div class="small1">
											<i class="fa fa-fax" aria-hidden="true"></i>
											<span>fax: </span>
											+2348055575625
										</div>
										<div class="small2">
											<i class="fa fa-globe" aria-hidden="true"></i>
											<span>website: </span>
											<a href="www.chelseahotelabuja.com">www.chelseahotelabuja.com</a>
										</div>
									</div>	
								</address>

								<a class="btn-venues" href="javascript:;">more information</a>
						    </div>

							<div class="item">
								<h2>our venues</h2>
								<h3>ROCKVIEW HOTEL</h3>
								<p>We are totally committed to rendering the best service to the public and tourists, as part of our contribution to the development of tourism and the hospitality industry in Nigeria.</p>
								
								<address class="address-venues">
									<div class="add1">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<span>address: </span>
										Cad Zone, Plot 194, A8, Ademola Adetokunbo Cres, Wuse II, Abuja
									</div>

									<div class="add2">
										<div class="small1">
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span>phone: </span>
											+234 (0)80-39043800
										</div>
										<div class="small2">
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>email: </span>
											<a href="mailto:reservationroyale@rockviewhotels.com">reservationroyale@rockviewhotels.com</a>
										</div>
									</div>

									<div class="add3">
										<div class="small1">
											<i class="fa fa-fax" aria-hidden="true"></i>
											<span>fax: </span>
											0425 756 258 9
										</div>
										<div class="small2">
											<i class="fa fa-globe" aria-hidden="true"></i>
											<span>website: </span>
											<a href="http://rockviewhotels.com/">rockviewhotels.com</a>
										</div>
									</div>	
								</address>

								<a class="btn-venues" href="javascript:;">more information</a>
							</div>
							<div class="item">
								<h2>our venues</h2>
								<h3>EKO MERIDIAN HOTEL</h3>
								<p>Eko Hotels & Suites is the most preferred hotel in West Africa and it's all about the right mix! It is Located in the heart of Victoria Island. We offer our corporate clients a perfect blend of relaxation and African tradition delicately infused to meet the highest standards.</p>
								
								<address class="address-venues">
									<div class="add1">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<span>address: </span>
										1415 Adetokunbo Ademola, Victoria Island, Lagos.
									</div>

									<div class="add2">
										<div class="small1">
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span>phone: </span>
											+234 (0)1-2624600-19
										</div>
										<div class="small2">
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>email: </span>
											<a href="mailto:reservation@ekohotels.com">reservation@ekohotels.com</a>
										</div>
									</div>

									<div class="add3">
										<div class="small1">
											<i class="fa fa-fax" aria-hidden="true"></i>
											<span>fax: </span>
											+234 1 460610
										</div>
										<div class="small2">
											<i class="fa fa-globe" aria-hidden="true"></i>
											<span>website: </span>
											<a href="https://www.ekohotels.com">www.ekohotels.com</a>
										</div>
									</div>	
								</address>

								<a class="btn-venues" href="javascript:;">more information</a>
							</div>
						</div>

						<div class="control-venues">
					    	<div class="venues-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
							<div class="venues-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
					    </div>							
					</div>
				</div>
			</div>

			<div class="col-md-5 col-w">
			 	<div class="row">
			 		<div class="venues-img"></div>
			 	</div>
			</div>
		</div>
	</div>
</div>

<!-- Footer  Begins -->
<!-- pricing table -->
<footer id="footer" style="height: 320px !important;">
		<div class="container">
			<div class="logo-footer">
				<img src="images/logo.png" alt="">
			</div>
			<div class="col-xs-12">
    <div class="lgx-footer-area widget-footer-top">
        <div id="vcx_location_widget-2" class="lgx-footer-single">
            <label class="widget-title footer-title">Phone Number:</label>&nbsp;&nbsp;<label style="font-size:18px !important;font-weight: 300; !important">+2349087222874</label><br>
            <label class="widget-title footer-title">Email:</label>&nbsp;&nbsp;
            <label style="font-size:18px !important;font-weight: 300; !important">info@eventguru.ng</label>
            <p class="text footer-lead"></p>
            <p>© 2019. All rights reserved by <a class="map-link" href="https://www.icsoutsourcing.com" target="_blank"> <span>ICS Digital Solutions.</span></a></p>
        </div>
            <div id="vcx_social_widget-2" class="lgx-footer-single">
                <h3 class="widget-title footer-title">Address</h3>
            <p class="text footer-lead">6 Olusoji Idowu str, Obanikoro bus stop, Ilupeju lagos</p>
            <p>See our <a class="map-link" href="userpolicy.php" target="_blank"><span> User Protection Policy</span></a></p>
            <ul class="list-inline lgx-social-footer">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
		</div>
	</footer>
<!-- Footer  Ends -->

	<div id="to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
	


	<script async type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

	<script async type="text/javascript" src="js/bootstrap.min.js"></script>
	<script async type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script async type="text/javascript" src="js/picturefill.min.js"></script>
	<script async type="text/javascript" src="js/lightgallery.min.js"></script>
	<script async type="text/javascript" src="js/lg-thumbnail.min.js"></script>
	<!--<script async type="text/javascript" src="js/lg-autoplay.min.js"></script>-->
	<script async type="text/javascript" src="js/lg-fullscreen.min.js"></script>
	<script async type="text/javascript" src="js/lg-hash.min.js"></script>
	<script async type="text/javascript" src="js/lg-pager.min.js"></script>
	<script async type="text/javascript" src="js/lg-share.min.js"></script>
	
	<script async type="text/javascript" src="js/lg-video.min.js"></script>
	<script async type="text/javascript" src="js/lg-zoom.min.js"></script>
	
	<script async type="text/javascript" src="js/swiper.min.js"></script>
	<script async type="text/javascript" src="js/wow.min.js"></script>
	<script async type="text/javascript" src="js/parallax.min.js"></script>
	<script async type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script async type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	
	<script async type="text/javascript" src="js/main.js"></script>
	<script async type="text/javascript" src="js/count-down.js"></script>
	<script async type="text/javascript" src="js/maps-style.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAER0nFInObYID6YXDTPqQS3bopGTJ6tgY&amp;callback=initMap"
    async defer></script>
</body>
</html>