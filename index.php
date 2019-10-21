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
    .owl-carousel.owl-rtl .owl-item {
    float: right;
}
.owl-carousel .owl-item {
    position: relative;
    min-height: 1px;
    float: left;
    -webkit-backface-visibility: hidden;
    -webkit-tap-highlight-color: transparent;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.owl-carousel .owl-item {
    position: relative;
    min-height: 1px;
    float: left;
    -webkit-backface-visibility: hidden;
    -webkit-tap-highlight-color: transparent;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.owl-carousel.owl-rtl {
    direction: rtl;
}
.owl-carousel {
    display: none;
    width: 100%;
    -webkit-tap-highlight-color: transparent;
    position: relative;
    z-index: 1;
}
blockquote.lgx-testi-single {
    padding: 36px 13% 0;
    font-size: 2rem;
    font-weight: 400;
    line-height: 3rem;
    margin: 0;
}
blockquote {
    text-align: center;
    overflow: hidden;
    color: #1b273d;
    margin: 2rem auto;
    font-weight: 400;
    padding: 1rem 1.5rem;
    position: relative;
    border-left: 0;
    border-radius: 0;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
}
blockquote.lgx-testi-single .vcx-review-lead {
    color: #554bb9;
    display: block;
    margin-bottom: 2rem;
    position: relative;
    z-index: 1;
    font-weight: 400;
    font-size: inherit;
}

.lgx-travelinfo-single .info, .wpcf7 label, blockquote.lgx-testi-single .vcx-review-lead {
    font-family: Oswald,sans-serif;
}
blockquote.lgx-testi-single p {
    font-size: inherit;
    font-weight: inherit;
    line-height: inherit;
    position: relative;
    z-index: 1;
    font-family: Poppins,sans-serif;
}

blockquote p {
    opacity: 1;
    padding-left: 1rem;
    padding-right: 1rem;
}
blockquote, blockquote p {
    font-family: Oswald,sans-serif;
    font-size: 1.6rem;
    line-height: 2.4000000000000004rem;
}
blockquote.lgx-testi-single .author {
    display: inline-block;
    margin-top: 2.6rem;
}
.lgx-testi-single .author {
    display: inline-block;
}
blockquote.lgx-testi-single .author img {
    border-radius: 50%;
    max-width: 150px;
    margin: 0 auto;
}
.owl-carousel .owl-item img {
    transform-style: preserve-3d;
}
.owl-carousel .owl-item img {
    display: block;
    width: 100%;
    -webkit-transform-style: preserve-3d;
}
img {
    max-width: 100%;
    height: auto;
}
img {
    vertical-align: middle;
}
img {
    border: 0;
}
blockquote.lgx-testi-single .author .title {
    font-size: 2rem;
    line-height: 3rem;
    margin-bottom: .5rem;
}
.h4, h4 {
    line-height: 2.4000000000000004rem;
    line-height: 2rem;
}
.h4, .h5, h4, h5 {
    font-size: 1.6rem;
}
.h3, .h4, h3, h4 {
    font-family: Oswald,sans-serif;
    font-weight: 700;
}
blockquote.lgx-testi-single .author .vcx-designation {
    font-family: Poppins,sans-serif;
    color: rgba(50,51,51,.5);
    text-transform: uppercase;
    font-size: 1.4rem;
    line-height: 2.0999999999999996rem;
    margin-top: 0;
    margin-bottom: .5rem;
}
blockquote.lgx-testi-single .author .rate {
    text-align: center;
    display: inline-block;
}
blockquote.lgx-testi-single .author .rate i {
    float: left;
    text-align: left;
    font-size: 18px;
    font-size: 1.8rem;
    color: #ddd;
    padding: 0 .2rem;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
blockquote.lgx-testi-single .author .rate-five i:nth-child(1), blockquote.lgx-testi-single .author .rate-five i:nth-child(2), blockquote.lgx-testi-single .author .rate-five i:nth-child(3), blockquote.lgx-testi-single .author .rate-five i:nth-child(4), blockquote.lgx-testi-single .author .rate-five i:nth-child(5), blockquote.lgx-testi-single .author .rate-four i:nth-child(1), blockquote.lgx-testi-single .author .rate-four i:nth-child(2), blockquote.lgx-testi-single .author .rate-four i:nth-child(3), blockquote.lgx-testi-single .author .rate-four i:nth-child(4), blockquote.lgx-testi-single .author .rate-one i:nth-child(1), blockquote.lgx-testi-single .author .rate-three i:nth-child(1), blockquote.lgx-testi-single .author .rate-three i:nth-child(2), blockquote.lgx-testi-single .author .rate-three i:nth-child(3), blockquote.lgx-testi-single .author .rate-two i:nth-child(1), blockquote.lgx-testi-single .author .rate-two i:nth-child(2) {
    color: #ffaf0f;
}
vc_row[data-vc-full-width] {
    -webkit-transition: opacity .5s ease;
    -o-transition: opacity .5s ease;
    transition: opacity .5s ease;
    overflow: hidden;
}

.vc_row {
    margin-left: -15px;
    margin-right: -15px;
}
.lgx-inner-bottomgap {
    padding-bottom: 0!important;
}
.lgx-inner {
    /*padding: 11rem 0; */
}
@media (min-width: 1200px)
.container {
    width: 1170px;
}
@media (min-width: 992px)
.container {
    width: 970px;
}
@media (min-width: 768px)
.container {
    width: 750px;
}
.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.owl-carousel .owl-stage-outer {
    position: relative;
    overflow: hidden;
    -webkit-transform: translate3d(0px, 0px, 0px);
}
.owl-theme .owl-controls {
    margin-top: 10px;
    text-align: center;
    -webkit-tap-highlight-color: transparent;
}
.lgx-owlnews .owl-controls .owl-nav [class*=owl-], .lgx-owltestimonial .owl-controls .owl-nav [class*=owl-] {
    opacity: 0;
    -webkit-transition: all .6s ease-in-out 0s;
    -moz-transition: all .6s ease-in-out 0s;
    -o-transition: all .6s ease-in-out 0s;
    transition: all .6s ease-in-out 0s;
}
.lgx-owlnews .owl-controls .owl-nav .owl-prev, .lgx-owltestimonial .owl-controls .owl-nav .owl-prev {
    position: absolute;
    top: 42%;
    left: 4.2rem;
}
.owl-theme .owl-controls .owl-nav [class*=owl-] {
    color: #fff;
    font-size: 14px;
    margin: 5px;
    padding: 4px 7px;
    background: 0 0;
    display: inline-block;
    cursor: pointer;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -ms-transform: scale(.8);
    -moz-transform: scale(.8);
    -webkit-transform: scale(.8);
    -o-transform: scale(.8);
    transform: scale(.8);
    -webkit-transition: .8s ease;
    transition: .8s ease;
    opacity: .7;
}
.owl-theme .owl-controls .owl-nav [class*=owl-] {
    color: #fff;
    font-size: 14px;
    margin: 5px;
    padding: 4px 7px;
    background: #d6d6d6;
    display: inline-block;
    cursor: pointer;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.owl-carousel .owl-controls .owl-nav .owl-prev, .owl-carousel .owl-controls .owl-nav .owl-next, .owl-carousel .owl-controls .owl-dot {
    cursor: pointer;
    cursor: hand;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.lgx-owlnews .owl-controls .owl-nav .owl-next, .lgx-owltestimonial .owl-controls .owl-nav .owl-next {
    position: absolute;
    top: 42%;
    right: 4.2rem;
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
								<h2>Some of our Testimonies</h2>
                                
                                <blockquote class="lgx-testi-single">
                                    <h4 class="vcx-review-lead">This is the best Event Organizers in the world</h4>
								<p class="vcx-review">I'll tag it 'Giving Great Events free of Charge'.</p>
								
	<div class="author">
<img class="vcx-client-thumb" src="images\speakers-page5\1.jpg" alt="Neel Eonathon">
<h4 class="title vcx-client-name">Folorunsho Nathan</h4>
<h5 class="vcx-designation">PFA Council Member</h5>
<div class="rate rate-four"> 
<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
</div>
</div>
</blockquote>
                                
						    </div>

							<div class="item">
								<h2>our Testimony</h2>
								
								<blockquote class="lgx-testi-single">
								    <h4 class="vcx-review-lead">This is the best Event Organizers in the world</h4>
								<p class="vcx-review">EventGuru.ng are providers of First Class Informative Events.</p>
								

<div class="author">
<img class="vcx-client-thumb" src="images\speakers-page5\2.jpg" alt="Olivia Jenelia">
<h4 class="title vcx-client-name">Abena Jennifer</h4>
<h5 class="vcx-designation">CEO MedInfoNg</h5>
<div class="rate rate-five"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
</div>
</div>
</blockquote>

							</div>
							
							<div class="item">
								<h2>our Testimony</h2>
								
								<blockquote class="lgx-testi-single">
								    <h4 class="vcx-review-lead">The world best Event Organization is EventGuru.ng</h4>
								<p class="vcx-review">In my 24 years working as a Professional, I must say, I havent seen any Event Service Provider like EventGuru.ng.</p>
								
<div class="author">

<img class="vcx-client-thumb" src="images\speakers-page5\6.jpg" alt="Enathon Nelson">
<h4 class="title vcx-client-name">Enathon Nelson</h4>
<h5 class="vcx-designation">Event Organizers Association Chirman</h5>
<div class="rate rate-three">
 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
</div>
</div>
</blockquote>

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
<?php include('footer.php'); ?>
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
	<!--<script async type="text/javascript" src="js/69115.js"></script>-->
	<script async type="text/javascript" src="js/count-down.js"></script>
	<script async type="text/javascript" src="js/maps-style.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAER0nFInObYID6YXDTPqQS3bopGTJ6tgY&amp;callback=initMap"
    async defer></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>