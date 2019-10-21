<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="refresh time" content="1" />
	<meta name="language" content="English" />
	<meta name="keywords" content="events+management+company, events+management+website,event+management+service,event+website,event+in+Lagos, event+platorm, tickets+for+events, new+year+events, events+near+me,event+planners+in+lagos,events+management+in+nigeria,manage+events,careers+in+event+planning,events+management+careers,new+years+eve+event+near+me,new+years+events,event+planning+companies+in+lagos,event+management+firm+in+lagos,top+event+planners+in+nigeria,manage+event,event+management+system+online,event+management+website">
	<meta name="description" content="Looking for something to do in Lagos? Whether you are a local, new in town or just cruising through we have got loads of great tips and events. You can explore by location, what is popular, our top picks, free stuff... you got this. Ready? Sell tickets to your event on Eventguru's ridiculously easy-to-use platform. List Your Event For Free. Track Sales. Manage Registrations">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/favicon.png" type="image/x-icon"/>
	<!--<link rel="stylesheet" href="header/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="header/css/bootstrap.min.css">
	<link rel="stylesheet" href="header/css/owl.carousel.min.css">
	<link rel="stylesheet" href="header/css/lightgallery.min.css">
	<link rel="stylesheet" href="header/css/datepicker.css">
    <link rel="stylesheet" href="header/css/swiper.min.css">-->
    <!--<link href="https://fontawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
	<!--<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">-->
	<!--<link rel="stylesheet" href="header/css/style.css">-->
	<!--<link href="signing/new/assets/css/style.css" rel="stylesheet" type="text/css">-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143509761-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143509761-1');
</script>
<style>
    .logo{
        width:30px;
        height:60px;
    }
    ul {
    list-style: none;
    margin: 0;
    padding-left: 0;
}

li {
    display: block;
    float: left;
    padding: 0px 0.8rem 0px 0.8rem;
    position: relative;
    text-decoration: none;
  transition-duration: 0.5s;
}
  
li a {
  color: #fff;
}

li:hover {
    cursor: pointer;
}

ul li ul {
    visibility: hidden;
  opacity: 0;
  min-width: 5rem;
    position: absolute;
  transition: all 0.5s ease;
  margin-top: 1rem;
    left: 0;
  display: none;
}

ul li:hover > ul,
ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: block;
}

ul li ul li {
    clear: both;
  
}
</style>
</head>
<body>
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
			            <a href="index.php" class="logo-default"><img src="images/logo.png" class="logo" alt="logo" /></a>
			        </div>
						</div>
		
						<div class="col-md-2 col-md-push-6 fix-social">						
							<nav class="nav-social">
									<ul >
											<li><a href="javascript:;"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="javascript:;"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="javascript:;"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="javascript:;"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
											<li><a href="javascript:;"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="javascript:;"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										</ul>
                            </nav>
                            
						</div>
		
						<div class="col-md-6 col-md-pull-4 fix-menu">
							<div class="row">
								<nav class="main-menu">
										<ul class="nav-bar">
									
										<li><a href="index.php">home</a></li>
												<li><a href="about.php">About Us </a></li>
												<li><a href="eventlist.php">All Events </a> 
												</li>
												
												<li><a href="faq.php">FAQs </a>
													
												</li>
												<li><a href="create.php">Create Event </a>
													
												</li>
												<li><a href="managevent.php">Manage My Event </a>
													
												</li>
												<li style="margin-left: 50px;">
												    <!--ERROR START-->
						<?php if(isset($_SESSION['user']) && count($_SESSION['user']) > 0) {?>
								<a href="javascript:;" data-toggle="dropdown" class="toggle">
									<img src="data/profile/<?= !isset($_SESSION['user']['picture']) ?  "user.png": $_SESSION['user']['picture'] ?>" alt="user-image" class="img-circle img-inline">
									
									<span value=""><?=$_SESSION['user']['firstname']?> <i class="fa fa-angle-down"></i></span>
								</a>
								<ul class="dropdown-menu profile animated fadeIn show" x-placement="bottom-start" style="position: absolute; transform: translate3d(-50px, 30px, 0px); top: 0px; left: 0px; will-change: transform;">
												<li>
													<a href="#" style=" line-height: 20px;">
														<i class="fa fa-calendar-plus-o"></i>
														My Tickets
													</a>
												</li>
												<li>
													<a href="myevent.php" style=" line-height: 0px;">
														<i class="fa fa-calendar-plus-o"></i>
														My Events
													</a>
												</li>
												<li>
													<a href="profile.php" style=" line-height: 0px;">
														<i class="fa fa-user"></i>
														My Profile
													</a>
												</li>
												<li>
													<a href="faq.php" style=" line-height: 0px;">
														<i class="fa fa-info"></i>
														Help
													</a>
												</li>
												<li class="last" >
													<a href="signing/logout.php"  style=" line-height: 0px;">
														<i class="fa fa-lock"></i>
														Logout
													</a>
												</li>
								</ul>
							
						<?php }else { ?>
									<a href="signing/index.php?location=" . urlencode($_SERVER['REQUEST_URI'])); $_SESSION['current_page'] = $_SERVER['REQUEST_URI']; class="buy-ticket" style=" text-align: center;color: white !important;margin-top:3px;margin-bottom:3px;">LOGIN/SIGN UP </a> 
						<?php } ?>
						

						<!--ERROR END-->
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
								<li><a href="javascript:;"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>