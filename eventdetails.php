
<?php 

session_start();
//if(!isset($_SESSION['user'])){ //if login in session is not set
//	header("Location: signing/index.php");
//}
    include 'allevent.php';	
    include 'db.php';
    //include 'e_details.php';
    $d = $_SESSION['d'];
$detail = "SELECT * FROM events where id= $d";
$resultdetail = mysqli_query($db, $detail);
if (mysqli_num_rows($resultdetail) > 0) {
    //while ($row = $resultdetail->fetch_assoc()) {
        while ($row = mysqli_fetch_assoc($resultdetail)) {
        $_SESSION['my_event'] = $row;
        //header ('location: ../eventdetails.php');
        }
}
else {
    echo 'Couldnt connect';
}
$db->close();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Event Map - Event Details</title>
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
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #1fb5ac45 !important;
}

#regForm {
  background-color: #ffffff;
  margin: auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  height: auto;
  min-width: 300px;
}

h1 {
  text-align: center;  
}
h3 {
    font-weight: 600;
}
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none !important;
}
button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<style>
.card.mb-3 {
    margin-bottom: 30px !important;
}
.widget-content {
    padding: 1rem;
    flex-direction: row;
    align-items: center;
}
.card {
    box-shadow: 0 0.46875rem 2.1875rem rgba(4,9,20,0.03), 0 0.9375rem 1.40625rem rgba(4,9,20,0.03), 0 0.25rem 0.53125rem rgba(4,9,20,0.05), 0 0.125rem 0.1875rem rgba(4,9,20,0.03);
    border-width: 0;
    transition: all .2s;
}
.bg-midnight-bloom {
    background-image: linear-gradient(-20deg, #2b5876 0%, #4e4376 100%) !important;
}
.mb-3, .my-3 {
    margin-bottom: 1rem !important;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #1a15d914;
    background-clip: border-box;
    border: 1px solid rgba(26,54,126,0.125);
    border-radius: .25rem;
}
.widget-content .widget-content-left .widget-heading {
    opacity: .8;
    font-weight: bold;
}
.widget-content .widget-content-wrapper {
    display: flex;
    flex: 1;
    position: relative;
    align-items: center;
}
.widget-content .widget-numbers {
    font-weight: bold;
    font-size: 3.8rem;
    display: block;
}
.text-white {
    color: #fff !important;
}
.mr-3, .mx-3 {
    margin-right: 1rem !important;
}
.card-header {
    display: flex;
    align-items: center;
    border-bottom-width: 1px;
    padding-top: 0;
    padding-bottom: 0;
    padding-right: .625rem;
    height: 4.5rem;
}
.card-header, .card-title {
    text-transform: uppercase;
    color: rgba(13,27,62,0.7);
    font-weight: bold;
    font-size: 1.88rem;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    color: inherit;
    background-color: #fff;
    border-bottom: 1px solid rgba(26,54,126,0.125);
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.widget-content .widget-content-right {
    margin-left: 50px;
}
.widget-content .widget-content-left .widget-subheading {
    opacity: .5;
}
.col-xl-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
}
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
						<?php if(isset($_SESSION['user'])) {?>
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
	<h1 class="entry-title entry-title-event3">Event Details</h1>
    
</div>

<div class="container" style="padding-top:100px;">
	
<div class="app-main">
                
                    
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                                   
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">
                                        
                                        <button class="btn btn-secondary float-right" ><a href="myevent.php" style="color:black;">Back To My Event</a></button>
                                        <h3> </h3>
                                    </div>
                                    <div class="table-responsive">

                                       <label>Event Name: </label><input value="<?=$_SESSION['my_event']['eventname'] ?>" name="" type="text" class="form-control" placeholder="" disabled>
                                       <label>Location: </label><input value="<?=$_SESSION['my_event']['venue'] ?>&nbsp;<?=$_SESSION['my_event']['locations'] ?>" name="" type="text" class="form-control" placeholder="" disabled>
                                       <label>Date: </label><input value="<?=$_SESSION['my_event']['startdate'] ?>&nbsp;<?=$_SESSION['my_event']['starttime'] ?>" name="" type="text" class="form-control" placeholder="" disabled>
                                       <label>Contact Phone:</label><input value="<?=$_SESSION['my_event']['contactphone'] ?>" name="" type="text" class="form-control" placeholder="" disabled>
                                       <label>Contact Email:</label><input value="<?=$_SESSION['my_event']['contactemail'] ?>" name="" type="text" class="form-control" placeholder="" disabled>
                                       
                                
                                    </div>
                                    <div class="d-block text-center card-footer">
                                        <!--<button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
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
	<!--<script type="text/javascript" src="js/lg-autoplay.min.js"></script>-->
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