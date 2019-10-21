<?php 

session_start();
//if(!isset($_SESSION['user'])){ //if login in session is not set
//	header("Location: signing/index.php");
//}
	include 'allevent.php';	
	//echo htmlspecialchars($_GET["s"]);
	//$_POST[''] = $_SESSION['event'];
	//include ('eventdbconn.php');
	//}
?>
<!--
<php include 'allevent.php'; ?> -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$_SESSION['this_event']['eventname'] ?></title>
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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137786155-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137786155-4');
</script>
<style>
         .erro {color: #FF0000;}
</style>
</head>
<body style="overflow:visible !important;">
	<!-- loadpage -->
	<div class="loadpage">
		<div class="spinner">
		  <div class="double-bounce1"></div>
		  <div class="double-bounce2"></div>
		</div>
	</div>

	<header class="site-header site2-header site3-header header-default header-sticky animated">
		<div class="container-fluid">
			<div class="site2-header1">
				<div class="row">
					<div class="col-md-2 fix-logo">
						<div class="wrapper-logo">
							<a href="index.php" class="logo-default"><img src="images/logo.png" alt="logo"/></a>
						</div>
					</div>

					<div class="col-md-4 col-md-push-6 fix-social">						
				        <nav class="nav-social">
				        	<ul>
				        		<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
			                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				        	</ul>
				        </nav>
						<!--ERROR START-->
						<?php if(isset($_SESSION['user']) && count($_SESSION['user']) > 0) {?>
								<a href="#" data-toggle="dropdown" class="toggle">
									<img src="signing/new/data/profile/profile.png" alt="user-image" class="img-circle img-inline">
									<span value=""><?=$_SESSION['user']['firstname']?> <i class="fa fa-angle-down"></i></span>
								</a>
								<ul class="dropdown-menu profile animated fadeIn">
												<li>
													<a href="#settings">
														<i class="fa fa-calendar-plus-o"></i>
														My Event
													</a>
												</li>
												<li>
													<a href="signing/profile.php">
														<i class="fa fa-user"></i>
														Profile
													</a>
												</li>
												<li>
													<a href="#help">
														<i class="fa fa-info"></i>
														Help
													</a>
												</li>
												<li class="last">
													<a href="signing/logout.php">
														<i class="fa fa-lock"></i>
														Logout
													</a>
												</li>
								</ul>
							
						<?php }else { ?>
									<a href="signing/index.php" class="buy-ticket">LOGIN/SIGN UP </a> 
						<?php } ?>
						

						<!--ERROR END-->
						

					</div>

					<div class="col-md-6 col-md-pull-4 fix-menu">
                    <div class="row">
								<nav class="main-menu">
										<ul class="nav-bar">
									
										<li><a href="index.php">home</a></li>
												<li><a href="about.php">About Us </a></li>
												<li><a href="eventlist.php">All Events </a> 
												</li>
												
												
												<li><a href="FAQ.html">FAQs </a>
													
												</li>
												<li><a href="signing/new/events.php">Create an Event </a>
													
												</li>
											</ul>
									
								</nav>
							</div>
						
					</div>				
				</div>

				<div class="menu-hide">
					<div class="row">
						<ul>
						 <!-- 	<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li> -->
		                    <li><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>


<!-- banner pages -->
<div class="page-heading">
	<h1 class="entry-title entry-title-event3"><?=$_SESSION['this_event']['eventname'] ?></h1>

	<ul class="entry-breadcrumb">
		<li><a href="javascript:;">Home</a></li>
		<li>/</li>
		<li><a href="javascript:;">Event</a></li>
		<li>/</li>
		<li><a href="javascript:;">Single Event</a></li>
	</ul>
</div>

<div id="main">
	<div class="entry-content">
		<!-- single event3 -->
		<div class="entry-single-event3">
			<div class="container">
				<div class="col-md-9">
					<div class="banner">
						<img src="<?=$_SESSION['this_event']['flyer'] ?>" alt="single event" align="middle">
					</div>
					<!-- tabs event3 -->
					<br>
<!-- AddToAny BEGIN -->

<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<strong>SHARE Event</strong>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_telegram"></a>
<a class="a2a_button_copy_link"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
<br><br><br><br><br>
					<br><br><br><br><br>
					<br><br><br><br><br>
					<br><br><br><br>
					<div class="entry-tabs" role="tabpanel">
						<ul class="list-tabs" role="tablist">
							<li  role="presentation" class="active"><a class="active" role="tab" data-toggle="tab" href="#tab-event1"><i class="fa fa-file-text-o" aria-hidden="true"></i> Content</a></li>
							<!--<li  role="presentation"><a  role="tab" data-toggle="tab" href="#tab-event2"><i class="fa fa-list-alt" aria-hidden="true"></i> Schedule</a></li>-->
							<li  role="presentation"><a role="tab" data-toggle="tab" href="#tab-event3"><i class="fa fa-microphone" aria-hidden="true"></i> Speakers</a></li>
							<li  role="presentation"><a  role="tab" data-toggle="tab" href="#tab-event4"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</a></li>
							<li  role="presentation"><a  role="tab" data-toggle="tab" href="#tab-event5"><i class="fa fa-paper-plane" aria-hidden="true"></i> Contact</a></li>
						</ul>

						<div class="tab-content">
							<div role="tabpanel" class="entry-tabs-content tab-pane animated zoomIn active" id="tab-event1">
								<p><?=$_SESSION['this_event']['comment'] ?></p>
							</div>
							<div role="tabpanel" class="entry-tabs-content tab-pane animated zoomIn" id="tab-event2">
								<!-- conference schedule -->
								<div class="clearfix"></div>
								<!--<div class="main-conference-schedule">
										<h2 class="adnimated fadeIn">conference schedule</h2>

										<div class="tab-schedule">
											<div class="menu-tab-schedule">
												<ul>
													<li class="active">day 1</li>
													<li>day 2</li>
													<li>day 3</li>
												</ul>
											</div> 
											
											<div class="content-tab-schedule tab tab1">
												<div class="menu-small-tab-schedule">
													<ul>
														<li class="active">hall 1</li>
														<li>hall 2</li>
													</ul>
												</div>

												<div class="content-small-tab-schedule tabsmall tabsmall1 active">
													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt1.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>8:00 - 9:00</span>Networking and Participants Registration</p>

																<p class="author">by <a href="#">Bold Logistics</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt2.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>9:00 - 10:30</span>Making Millions from the litte you earn</p>

																<p class="author">by <a href="#">Amanda Smith</a></p>
															</div>
														</div>
													</div>

													<div class="item item-admin">
														<div class="item-content">
															<a href="#"><div class="avatar-admin">
																<i class="fa fa-coffee" aria-hidden="true"></i>
															</div></a>

															<div class="content">
																<p><span>10:30 - 11:00</span>Questions and Music Break</p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt3.jpg" alt=""></a>
															</div>

															<div class="content">
															<p><span>11:00 - 12:00</span>Standards for starting your own Business</p>

															<p class="author">by <a href="#">Olakunle Ojerinde</a><p class="author">
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt4.jpg" alt=""></a>
															</div>

															<div class="content">
															<p><span>12:00 - 12:50</span>Understanding the Market that you deal in</p>

															<p class="author">by <a href="#">Daniel Okpara</a></p>
															</div>
														</div>
													</div>

													<div class="item item-admin">
														<div class="item-content">
															<a href="#"><div class="avatar-admin">
																<i class="fa fa-coffee" aria-hidden="true"></i>
															</div></a>

															<div class="content">
															<p><span>12:50 - 13:30</span>Questions and Music Break</p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt5.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>13:30 - 14:30</span>Breaking the market with great Marketing Strategy</p>

																<p class="author">by <a href="#">Jonah Muneh</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt6.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>14:30 - 15:30</span>Futuristic Marketability</p>

																<p class="author">by <a href="#">Elvin Sarpong</a></p>
															</div>
														</div>
													</div>
													
												</div>

												<div class="content-small-tab-schedule tabsmall tabsmall2">
													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt1.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>8:00 - 9:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Thomas Muller</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt2.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>9:00 - 9:30</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Amanda Smith</a></p>
															</div>
														</div>
													</div>

													<div class="item item-admin">
														<div class="item-content">
															<a href="#"><div class="avatar-admin">
																<i class="fa fa-coffee" aria-hidden="true"></i>
															</div></a>

															<div class="content">
																<p><span>9:30 - 10:00</span> Coffee Time</p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt3.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>10:00 - 11:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Thomas Muller</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt4.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>11:00 - 12:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Amanda Smith</a></p>
															</div>
														</div>
													</div>

													<div class="item item-admin">
														<div class="item-content">
															<a href="#"><div class="avatar-admin">
																<i class="fa fa-coffee" aria-hidden="true"></i>
															</div></a>

															<div class="content">
																<p><span>12:00 - 12:30</span> Time for lunch</p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt5.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>12:30 - 15:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Thomas Muller</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt6.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>15:00 - 17:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Amanda Smith</a></p>
															</div>
														</div>
													</div>
													
												</div>
												
											</div>

											<div class="content-tab-schedule tab tab2">
												<div class="menu-small-tab-schedule">
													<ul>
														<li class="active">hall 1</li>
														<li>hall 2</li>
													</ul>
												</div>

												<div class="content-small-tab-schedule tabsmall tabsmall1 active">
												<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt1.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>8:00 - 9:00</span>Networking and Participants Registration</p>

																<p class="author">by <a href="#">Bold Logistics</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt2.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>9:00 - 10:30</span>Making Millions from the litte you earn</p>

																<p class="author">by <a href="#">Amanda Smith</a></p>
															</div>
														</div>
													</div>

													<div class="item item-admin">
														<div class="item-content">
															<a href="#"><div class="avatar-admin">
																<i class="fa fa-coffee" aria-hidden="true"></i>
															</div></a>

															<div class="content">
																<p><span>10:30 - 11:00</span>Questions and Music Break</p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt3.jpg" alt=""></a>
															</div>

															<div class="content">
															<p><span>11:00 - 12:00</span>Standards for starting your own Business</p>

															<p class="author">by <a href="#">Olakunle Ojerinde</a><p class="author">
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt4.jpg" alt=""></a>
															</div>

															<div class="content">
															<p><span>12:00 - 12:50</span>Understanding the Market that you deal in</p>

															<p class="author">by <a href="#">Daniel Okpara</a></p>
															</div>
														</div>
													</div>

													<div class="item item-admin">
														<div class="item-content">
															<a href="#"><div class="avatar-admin">
																<i class="fa fa-coffee" aria-hidden="true"></i>
															</div></a>

															<div class="content">
															<p><span>12:50 - 13:30</span>Questions and Music Break</p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt5.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>13:30 - 14:30</span>Breaking the market with great Marketing Strategy</p>

																<p class="author">by <a href="#">Jonah Muneh</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt6.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>14:30 - 15:30</span>Futuristic Marketability</p>

																<p class="author">by <a href="#">Elvin Sarpong</a></p>
															</div>
														</div>
													</div>
													
												</div>

												<div class="content-small-tab-schedule tabsmall tabsmall2">
													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt1.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>8:00 - 9:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Thomas Muller</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt2.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>9:00 - 9:30</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Amanda Smith</a></p>
															</div>
														</div>
													</div>

													<div class="item item-admin">
														<div class="item-content">
															<a href="#"><div class="avatar-admin">
																<i class="fa fa-coffee" aria-hidden="true"></i>
															</div></a>

															<div class="content">
																<p><span>9:30 - 10:00</span> Coffee Time</p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt3.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>10:00 - 11:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Thomas Muller</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt4.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>11:00 - 12:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Amanda Smith</a></p>
															</div>
														</div>
													</div>

													<div class="item item-admin">
														<div class="item-content">
															<a href="#"><div class="avatar-admin">
																<i class="fa fa-coffee" aria-hidden="true"></i>
															</div></a>

															<div class="content">
																<p><span>12:00 - 12:30</span> Time for lunch</p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt5.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>12:30 - 15:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Thomas Muller</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt6.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>15:00 - 17:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Amanda Smith</a></p>
															</div>
														</div>
													</div>
													
												</div>
												
											</div>

											<div class="content-tab-schedule tab tab3">
												<div class="menu-small-tab-schedule">
													<ul>
														<li class="active">hall 1</li>
														<li>hall 2</li>
													</ul>
												</div>

												<div class="content-small-tab-schedule tabsmall tabsmall1 active">
												<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt1.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>8:00 - 9:00</span>Networking and Participants Registration</p>

																<p class="author">by <a href="#">Bold Logistics</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt2.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>9:00 - 10:30</span>Making Millions from the litte you earn</p>

																<p class="author">by <a href="#">Amanda Smith</a></p>
															</div>
														</div>
													</div>

													<div class="item item-admin">
														<div class="item-content">
															<a href="#"><div class="avatar-admin">
																<i class="fa fa-coffee" aria-hidden="true"></i>
															</div></a>

															<div class="content">
																<p><span>10:30 - 11:00</span>Questions and Music Break</p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt3.jpg" alt=""></a>
															</div>

															<div class="content">
															<p><span>11:00 - 12:00</span>Standards for starting your own Business</p>

															<p class="author">by <a href="#">Olakunle Ojerinde</a><p class="author">
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt4.jpg" alt=""></a>
															</div>

															<div class="content">
															<p><span>12:00 - 12:50</span>Understanding the Market that you deal in</p>

															<p class="author">by <a href="#">Daniel Okpara</a></p>
															</div>
														</div>
													</div>

													<div class="item item-admin">
														<div class="item-content">
															<a href="#"><div class="avatar-admin">
																<i class="fa fa-coffee" aria-hidden="true"></i>
															</div></a>

															<div class="content">
															<p><span>12:50 - 13:30</span>Questions and Music Break</p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt5.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>13:30 - 14:30</span>Breaking the market with great Marketing Strategy</p>

																<p class="author">by <a href="#">Jonah Muneh</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt6.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>14:30 - 15:30</span>Futuristic Marketability</p>

																<p class="author">by <a href="#">Elvin Sarpong</a></p>
															</div>
														</div>
													</div>
													
												</div>

												<div class="content-small-tab-schedule tabsmall tabsmall2">
													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt1.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>8:00 - 9:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Thomas Muller</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt2.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>9:00 - 9:30</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Amanda Smith</a></p>
															</div>
														</div>
													</div>

													<div class="item item-admin">
														<div class="item-content">
															<a href="#"><div class="avatar-admin">
																<i class="fa fa-coffee" aria-hidden="true"></i>
															</div></a>

															<div class="content">
																<p><span>9:30 - 10:00</span> Coffee Time</p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt3.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>10:00 - 11:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Thomas Muller</a></p>
															</div>
														</div>
													</div>											

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt5.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>12:30 - 15:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Thomas Muller</a></p>
															</div>
														</div>
													</div>

													<div class="item">
														<div class="item-content">
															<div class="avatar">
																<a href="#"><img src="images/comment/cmt6.jpg" alt=""></a>
															</div>

															<div class="content">
																<p><span>15:00 - 17:00</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>

																<p class="author">by <a href="#">Amanda Smith</a></p>
															</div>
														</div>
													</div>
													
												</div>
												
											</div>
										</div>
					
								</div>-->

							</div>
							<div role="tabpanel" class="entry-tabs-content tab-pane animated zoomIn" id="tab-event3">
								<div class="row">
									<div class="col-xs-12 col-sm-4 col-md-4 fix-col">
										<div class="row">
											<div class="item">
												<div class="person">
										    		<div class="avatar-person">
										    			<img src="images/person/person1.jpg" alt="">
										    		</div>

										    		<div class="all-box"></div>
										    		
										    		<div class="box">
										    			<ul>
															<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										    				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										    				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										    				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										    			</ul>
										    		</div>
										    	</div>

										    	<h3><a href="#">Olakunle Ojerinde</a></h3>
										    	<p>CEO - Kally Brands</p>
											</div>
										</div>
										
									</div>

									<div class="col-xs-12 col-sm-4 col-md-4 fix-col">
										<div class="row">
											<div class="item">
												<div class="person">
										    		<div class="avatar-person">
										    			<img src="images/person/person2.jpg" alt="">
										    		</div>

										    		<div class="all-box"></div>
										    		
										    		<div class="box">
										    			<ul>
															<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										    				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										    				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										    				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										    			</ul>
										    		</div>
										    	</div>

										    	<h3><a href="#">Amanda Smith</a></h3>
										    	<p>CEO - Everest Investment</p>
											</div>
										</div>
										
									</div>

									<div class="col-xs-12 col-sm-4 col-md-4 fix-col">
										<div class="row">
											<div class="item">
												<div class="person">
										    		<div class="avatar-person">
										    			<img src="images/person/person3.jpg" alt="">
										    		</div>

										    		<div class="all-box"></div>
										    		
										    		<div class="box">
														<ul>
															<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										    				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										    				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										    				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										    			</ul>
										    		</div>
										    	</div>

										    	<h3><a href="#">Daniel Okpara</a></h3>
										    	<p>CEO - Vino Market Links</p>
											</div>
										</div>
										
									</div>

									<div class="col-xs-12 col-sm-4 col-md-4 fix-col">
										<div class="row">
											<div class="item">
												<div class="person">
										    		<div class="avatar-person">
										    			<img src="images/person/person4.jpg" alt="">
										    		</div>

										    		<div class="all-box"></div>
										    		
										    		<div class="box">
										    			
														<ul>
															<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										    				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										    				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										    				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										    			</ul>
										    			
										    		</div>
										    	</div>

										    	<h3><a href="#">Jonah Muneh</a></h3>
										    	<p>CEO - Germain Farms</p>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div role="tabpanel" class="entry-tabs-content tab-pane animated zoomIn" id="tab-event4">
								<div id="style-selector-control"  class="map-control">
							      <select id="style-selector" class="selector-control">
							        <option value="dark">Dark</option>
							        <option value="silver">Silver</option>
							        <option value="night">Night mode</option>
							        <option value="retro">Retro</option>
							        <option value="hiding" selected="selected">Hide features</option>
							      </select>
							    </div>

								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d399385.2811373525!2d-73.80495016866863!3d40.5554726648402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2sin!4v1507194655572" style="border:0" allowfullscreen></iframe>
							</div>
							<div role="tabpanel" class="entry-tabs-content tab-pane animated zoomIn" id="tab-event5">
								<div class="frm-event">
									<div class="row">
										<div class="col-md-4">
											<input type="text" placeholder="Your Name">
										</div>
										<div class="col-md-4">
											<input type="text" placeholder="Your Email">
										</div>
										<div class="col-md-4">
											<input type="text" placeholder="Your Phone">
										</div>
									</div>
									<textarea name="content" id="txt-content" placeholder="Message"></textarea>		
									<button class="btn-sub">SEND</button>
								</div>
							</div>
						</div>
						
					</div>

				</div>
        
				<div class="col-md-3">
					<!-- event detail event3 -->
					<div class="event-details-event3">
						<h3>event details</h3>
						<ul>
							<li><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Start Date:</span><?=$_SESSION['this_event']['startdate'] ?></li>
							<li><span><i class="fa fa-calendar-times-o" aria-hidden="true"></i> Finish Date:</span><?=$_SESSION['this_event']['enddate'] ?></li>
							<li><span><i class="fa fa-map-marker" aria-hidden="true"></i> Location:</span> <?=$_SESSION['this_event']['locations'] ?></li>
							<li><span><i class="fa fa-university" aria-hidden="true"></i> Venue:</span> <?=$_SESSION['this_event']['venue'] ?></li>
							<li><span><i class="fa fa-key" aria-hidden="true"></i> Organizer:</span><?=$_SESSION['this_event']['organizer'] ?></li>
							<li><span><i class="fa fa-folder-open" aria-hidden="true"></i> Category:</span> <?=$_SESSION['this_event']['eventcategory'] ?></li>
							<li><span><i class="fa fa-street-view" aria-hidden="true"></i> Seats:</span> <?=$_SESSION['this_event']['seats'] ?></li>
							<li><span><i class="fa fa-phone" aria-hidden="true"></i> Phone:</span> <?=$_SESSION['this_event']['contactphone'] ?></li>
							<li><span><i class="fa fa-envelope" aria-hidden="true"></i> Email:</span> <?=$_SESSION['this_event']['contactemail'] ?></li>
						</ul>
					</div>

					<!-- Register Event Start -->
					<section id="register">
					<div class="entry-register-now-event3">
						<div class="frm-register">
							<h3>register now</h3>
							<!--<php include_once ('eregister.php');?>-->
	    					<form class="frm-res" action="eregister.php" method="post">
								<input name="eventname" type="text" value="" hidden>
								<!--<p><span class = "erro">* required field.</span></p>-->
								<!--<php echo $fullnameErr;?><php echo $emailErr;?>-->
								<input name="eventname" type="hidden" value="<?=$_SESSION['this_event']['eventname'] ?>" >
								<input name="contactemail" type="hidden" value="<?=$_SESSION['this_event']['contactemail'] ?>" >
								<input name="contactphone" type="hidden" value="<?=$_SESSION['this_event']['contactphone'] ?>" >
								<input name="venue" type="hidden" value="<?=$_SESSION['this_event']['venue'] ?>" >
								<input name="locations" type="hidden" value="<?=$_SESSION['this_event']['locations'] ?>" >
								<input name="startdate" type="hidden" value="<?=$_SESSION['this_event']['startdate'] ?>" >
								<input name="starttime" type="hidden" value="<?=$_SESSION['this_event']['starttime'] ?>" >
								<input name="enddate" type="hidden" value="<?=$_SESSION['this_event']['enddate'] ?>" >
								<input name="endtime" type="hidden" value="<?=$_SESSION['this_event']['endtime'] ?>" >
								<input name="seats" type="hidden" value="<?=$_SESSION['this_event']['seats'] ?>" >
								<input name="organizer" type="hidden" value="<?=$_SESSION['this_event']['organizer'] ?>" >
								<input name="eventcategory" type="hidden" value="<?=$_SESSION['this_event']['eventcategory'] ?>" >
								<input name="orderby" type="hidden" value="<?=$_SESSION['user']['id'] ?>" >
								<input name="ordername" type="hidden" value="<?=$_SESSION['user']['firstname'] ?>" >

	    					<!--	<input name="fullname" type="text" placeholder="Your Full Name" class="fullname" required><span class = "erro" >* </span>
	    						<input name="email" type="email" placeholder="Your Email" class="email" required><span class = "erro" >* </span>
	    						<select name="ticket" class="sl-ticket" required>
	    							<option selected>Free Ticket</option>
	    							<option>Paid Ticket</option>
	    						</select><span class = "erro">* </span>-->

	    						<button class="btn-register"><a href="register.php">register</a></button>
	    					</form>

	    					<div class="overlay"></div>
	    				</div>
					</div> 
					</section><!--Register Events End-->
					
				</div>
			</div>
		</div>
	</div>
</div>


	<!-- Footer -->
<footer id="footer">
		<div class="container">
			<div class="logo-footer">
				<img src="images/logo.png" alt="">
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="icon-fo">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>

					<ul>
						<li>Phone</li>
						<li>+2349087222874</li>
					</ul>

				</div>
				<div class="col-md-6">
					<div class="icon-fo">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>

					<ul>
						<li>address</li>
						<li>6 Olusoji Idowu str, Obanikoro bus stop, Ilupeju lagos</li>
					</ul>
				</div>
				<div class="col-md-3">
					<div class="icon-fo">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>

					<ul>
						<li>email</li>
						<li><a href="mailto:info@eventmap.com">info@eventmap.com</a></li>
					</ul>
				</div>
			</div>

			<div class="social-footer">
				<ul> 
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>

			<div class="copyright">
				<p>© 2019. All rights reserved by <span><a href="https://www.icsoutsourcing.com" class="null">ICS Digital Solutions.</a></span> See our <span><a href="userpolicy.php" class="null"> User Protection Policy</a></span></p>
			</div>
		</div>
	</footer>

	<div id="to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
	


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
</body>
</html>