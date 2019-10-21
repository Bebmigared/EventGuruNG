<?php 
session_start();
if(!isset($_SESSION['user'])){ //if login in session is not set
	header("Location: signing/index.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
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

	<script src="https://apis.google.com/js/platform.js" async defer></script>
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


	<!-- Header  Begins -->
<?php include('header.php'); ?>
<!-- Header  Ends -->


<!-- banner pages -->
<div class="page-heading">
	<h1 class="entry-title entry-title-event3"><?=$_SESSION['this_event']['eventname'] ?></h1>

</div>

<div id="main">
	<div class="entry-content">
		<!-- single event3 -->
		<div class="entry-single-event3">
			<div class="container">
				<div class="col-md-9">
					<div class="banner">
						<img src="images/single-event3.jpg" alt="single event">
					</div>
					<!-- tabs event3 -->
					<br>
<!-- AddToAny BEGIN -->

<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
<br><br><br><br><br>
					<br><br><br><br><br>
					<br><br><br><br><br>
					<br><br><br><br>
					<div class="entry-tabs" role="tabpanel">
						
						<div class="tab-content">
							<div role="tabpanel" class="entry-tabs-contents tab-pane animated zoomIn active" id="tab-event1">
								<p><?=$_SESSION['this_event']['comment'] ?></p>
                            </div>
                                <!-- register event3 -->
                                <div class="entry-register-now-event4">
                                    <div class="frm-register">
                                        <h3>Complete Your Registration</h3>
                                        <h4>Event Details</h4>
                                        <?php include_once ('ereg.php');?>
                                        <form class="frm-res" id="register" action="ereg.php" method="post">
                                            <img src="images/single-event3.jpg"name="flyer" alt="single event" hidden>
                                            <input name="eventname" type="hidden" value="<?=$_SESSION['this_event']['eventname'] ?>" >
                                            <input name="eventid" type="hidden" value="<?=$_SESSION['this_event']['id'] ?>" >
                                            <input name="contactemail" type="hidden" value="<?=$_SESSION['this_event']['contactemail'] ?>" >
                                            <input name="contactphone" type="hidden" value="<?=$_SESSION['this_event']['contactphone'] ?>" >
                                            <input name="venue" type="hidden" value="<?=$_SESSION['this_event']['venue'] ?>" >
                                            <input name="locations" type="hidden" value="<?=$_SESSION['this_event']['locations'] ?>" >
                                            <input name="startdate" type="hidden" value="<?=$_SESSION['this_event']['startdate'] ?>" >
                                            <input name="organizer" type="hidden" value="<?=$_SESSION['this_event']['organizer'] ?>" >
                                            <input name="enddate" type="hidden" value="<?=$_SESSION['this_event']['enddate'] ?>" >
                                            <input name="endtime" type="hidden" value="<?=$_SESSION['this_event']['endtime'] ?>" >
                                            <input name="seats" type="hidden" value="<?=$_SESSION['this_event']['seats'] ?>" >
                                            <input name="starttime" type="hidden" value="<?=$_SESSION['this_event']['starttime'] ?>" >
                                            <input name="eventcategory" type="hidden" value="<?=$_SESSION['this_event']['eventcategory'] ?>" >
                                            <input name="orderby" type="hidden" value="<?=$_SESSION['user']['id'] ?>" >
                                            <input name="ordername" type="hidden" value="<?=$_SESSION['user']['firstname'] ?>" >

                                            <input name="eventname" type="text" value="<?=$_SESSION['this_event']['eventname'] ?>" disabled>
                                            <input name="address" type="text" value="Venue: <?=$_SESSION['this_event']['venue'] ?> <?=$_SESSION['this_event']['locations'] ?>" disabled>
                                            <input name="date" type="text" value="Date: <?=$_SESSION['this_event']['startdate'] ?>" disabled>
                                            <input name="time" type="text" value="Time: <?=$_SESSION['this_event']['starttime'] ?>" disabled>
                                            <p><span class = "erro">* required field.</span></p>
                                            <?php echo $fullnameErr;?><?php echo $emailErr;?>
                                            <label for="text"> Full Name</label><input name="fullname" type="text" value="<?=$_SESSION['user']['firstname'] ?> <?=$_SESSION['user']['lastname'] ?>"placeholder="Your Full Name" class="fullname" required><span class = "erro">* </span>
                                            <label for="text"> Email</label><input name="email" type="email" value="<?=$_SESSION['user']['email'] ?>" placeholder="Your Email" class="email" required><span class = "erro">* </span>
											<script>
											    function paidEvent(that) {
                                                    if (that.value == "Paid Ticket") {
                                                  alert("Note: You will be directed to make payment");
                                                        document.getElementById("ifYes").style.display = "block";
                                                    } else {
                                                        document.getElementById("ifYes").style.display = "none";
                                                    }
                                                }
											</script>						
                                            <label for="text"> Ticket Type: </label><select onchange="paidEvent(this);" name="ticket" class="sl-ticket" required>
                                                <option value="Free Ticket" selected>Free Ticket</option>
                                                <option value="Paid Ticket">Paid Ticket</option>
											</select><span class = "erro">* </span>
											<div id="ifYes" style="display: none;">
                                                <label for="car">Ticket Class</label> 
                                            	<select name="ticketclass">
                                            	<option value="Economy">Economy</option>
                                            	<option value="VIP">VIP</option> 
                                            	<option value="VVIP">VVIP</option>
                                            	</select>
                                            </div>
											<label for="text"> Number of Ticket: </label><select name="noticket" class="sl-ticket" required>
                                                <option name="noticket" selected>1</option>
                                            </select><span class = "erro">* </span>

                                            <button class="btn-register">register</button>
                                        </form>

                                        <div class="overlay"></div>
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
							<li><span><i class="fa fa-calendar-times-o" aria-hidden="true"></i> Finish Date:</span> <?=$_SESSION['this_event']['enddate'] ?></li>
							<li><span><i class="fa fa-map-marker" aria-hidden="true"></i> Location:</span><?=$_SESSION['this_event']['locations'] ?></li>
							<li><span><i class="fa fa-university" aria-hidden="true"></i> Venue:</span> <?=$_SESSION['this_event']['venue'] ?></li>
							<li><span><i class="fa fa-key" aria-hidden="true"></i> Organizer:</span><?=$_SESSION['this_event']['organizer'] ?></li>
							<li><span><i class="fa fa-folder-open" aria-hidden="true"></i> Category:</span><?=$_SESSION['this_event']['eventcategory'] ?></li>
							<li><span><i class="fa fa-street-view" aria-hidden="true"></i> Seats:</span><?=$_SESSION['this_event']['seats'] ?></li>
							<li><span><i class="fa fa-phone" aria-hidden="true"></i> Phone:</span> <?=$_SESSION['this_event']['contactphone'] ?></li>
							<li><span><i class="fa fa-envelope" aria-hidden="true"></i> Email:</span><?=$_SESSION['this_event']['contactemail'] ?></li>
						</ul>
					</div>

					
					
				</div>
			</div>
		</div>
	</div>
</div>


	<!-- Footer -->
<!-- Footer  Begins -->
<?php include('footer.php'); ?>
<!-- Footer  Ends -->

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