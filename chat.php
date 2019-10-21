<?php 
session_start();
$eventname = "";
$eventname = $_SESSION['this_event']['eventname'] ;
$event='';
$event = $_SESSION['this_event']['locations'];
if(!isset($_SESSION['user'])){ //if login in session is not set
	header("Location: signing/index.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registered Users Chat</title>
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
         .field {
    width:785px;
    background-color: #2b1717;
    align-content: center;
}
.output{
    background-color: #eff0f1;
    box-shadow: 0px 1px 1px #000;
    height: 70%;
    margin-bottom: 20px;
    word-wrap: normal;
    display: block;
    position: relative;
    overflow-y: scroll;
}
</style>
</head>
<body style="overflow:visible !important;">


	<!-- Header  Begins -->
<?php include('header.php'); ?>
<!-- Header  Ends -->


<!-- banner pages -->
<div class="page-headings">
<h2>Welcome To Our Chat Platform</h2>
</div>

<div id="main">
	<div class="entry-content">
		<!-- single event3 -->
		<div class="entry-single-event3">
			<div class="container">
				<div class="col-md-9">
					<div class="banner">
                    <div class="tab-content">
							
                                <!-- register event3 -->
                                <div class="entry-register-now-event4">
                                    <div class="frm-register">
                                    <h2 align="center"><?=$_SESSION['this_event']['eventname'] ?></h2>
                                        <h4>Registered Users Chat</h4><br>
                                        
                                        <?php include_once 'ereg.php';?>
                                        <fieldset class="frm-res" id="register" action="pdf.php" method="post">
                                            <img src="images/single-event3.jpg"name="flyer" alt="single event" hidden>
                                            
                                            <input name="eventname" type="hidden" value="<?=$_SESSION['this_event']['eventname'] ?>" >
                                            <input name="contactemail" type="hidden" value="<?=$_SESSION['this_event']['contactemail'] ?>" >
                                            <input name="contactphone" type="hidden" value="<?=$_SESSION['this_event']['contactphone'] ?>" >
                                            <input name="venue" type="hidden" value="<?=$_SESSION['this_event']['venue'] ?>" >
                                            <input name="locations" type="hidden" value="<?=$_SESSION['this_event']['locations'] ?>" >
                                            <input name="startdate" type="hidden" value="<?=$_SESSION['this_event']['startdate'] ?>" >
                                            <input name="starttime" type="hidden" value="<?=$_SESSION['this_event']['starttime'] ?>" >
                                            
                                            
                                            <div class="field">
                                                
                                            <div class="output" id="output">
                                            <h3 style="background-color:#6495ed;color:white;"><?=$_SESSION['user']['firstname'] ?> -Online</h3>

											   <?php
											   
                                               $sql = "SELECT * FROM chats WHERE eventname = eventname " ;
                                               $result = $db->query($sql);
                                               if($result->num_rows > 0){
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "" . "&nbsp;&nbsp;&nbsp;" .$row['msg']. " -- " .$row['msgowner']. " -- " .$row['date']."<br>";
                                                    echo "<br>";
                                                }
                                               }else {
                                                   echo "Zero Results";
                                               }
                                               $db->close();
                                               ?>
                                            
                                            </div>
                                            
                                            <form method="POST" action="send.php">
                                                <!--<textarea name="msg" id="msg" class="form-control" cols="105" rows="5" placeholder="Type to send message...."></textarea>-->
                                                <input type="text" name="msg" id="msg" rows="15" class="form-group" placeholder="Type message and click SEND to send message....">
                                                <input type="hidden" name="msgby" id="msgby" value="<?=$_SESSION['user']['id'] ?>">
                                                <input type="hidden" name="msgowner" id="msgowner" value="<?=$_SESSION['user']['username'] ?>">
                                                <input type="hidden" name="eventname" id="eventname" value="<?=$_SESSION['this_event']['eventname'] ?>">
                                            <input type="submit" class="btn-register" value="Send" name="send" id="send"><br>
                                            </form>
                                            <form method="POST" action="signing/logout.php">
                                            </form>
                                            </div>
                                        </fieldset>

                                        <div class="overlay"></div>
                                    </div>
                                </div>
							
						</div>
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