<?php
session_start();
include 'allevent.php';
//$_SESSION['event'] = $event[$row]['eventname'];
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Event List</title>
	

<meta content="" name="description" />
<meta content="" name="author" />
	<!--EVENTS FORM CSS STARTS-->

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
<!--EVENTS FORM CSS STARTS-->
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
<link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->

<!-- CORE CSS FRAMEWORK - START -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
<!-- CORE CSS FRAMEWORK - END -->

<!--FA FA ICONS LOADER-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


<!-- CORE CSS TEMPLATE - START -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<!-- CORE CSS TEMPLATE - END -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137786155-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137786155-4');
</script>
</head>
<body style="overflow:visible !important;">

<!-- Header -->
<!-- Header  Begins -->
<?php include('header.php'); ?>
<!-- Header  Ends -->

<!-- banner pages -->
<div class="page-heading">
	<h1 class="entry-title">Event List</h1>
</div>

<div id="main">
	<div class="entry-content">
		<!-- list event1 extend lastest event -->
		<div class="main-lastest-event entry-list-event1">
			<div class="container">
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

						<div class="sl-up">
							<select name="upcoming" id="upcoming">
								<option>Upcoming</option>	
								<option>Happening</option>	
								<option>Expired</option>
							</select>
							<i class="fa fa-chevron-down" aria-hidden="true"></i>
						</div>
					</div>

					<select class="select-filter">
			            <option class="data-filter" value="*">all</option>

			            <option class="data-filter" value=".technology">technology</option>

			            <option class="data-filter" value=".business">business</option>

			            <option class="data-filter" value=".music">music</option>

			            <option class="data-filter" value=".fashion">fashion</option>

			            <option class="data-filter" value=".sport">sport</option>

			            <option class="data-filter" value=".education">education</option>

			        </select>

			        <div class="clearfix"></div>

					<div class="iso-main">
						<div class="row">
							<?php 
									for ($row = 0; $row < count($event); $row++) {
										?>
							<div class="item technology col-xs-12 col-sm-12 col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<div class="img">
												<a href="javascript:;"><img src="<?= !isset($event[$row]['flyer']) ?  "../../images/defaultimg.png": $event[$row]['flyer'] ?>" alt="list event"></a>
												
											</div>
										</div>
										
									</div>
									<div class="col-md-8 fix-col2">
										<div class="row">
											<div class="txt-item">
												<h3><a href="details.php/?e=<?=$event[$row]['id']?>"><?php echo $event[$row]['eventname'] ?></a></h3>
												<ul>
													<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $event[$row]['startdate'] ?></li>
													<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $event[$row]['venue'] ?>,&nbsp; <?php echo $event[$row]['locations'] ?></li>
													<li><i class="fa fa-folder-open" aria-hidden="true"></i><?php echo $event[$row]['eventcategory'] ?></li>
													<li><i class="fa fa-clock-o" aria-hidden="true"></i> Upcoming</li>
												</ul>
												<p><?php echo $event[$row]['comment'] ?></p>
												<div class="btn-list-event1">
													<a href="details.php/?e=<?=$event[$row]['id']?>"><i class="fa fa-file-text-o" aria-hidden="true"></i> information</a>
													<a href="details.php/?e=<?=$event[$row]['id']?>"><i class="fa fa-credit-card" aria-hidden="true"></i> Get ticket</a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
									<?php }?>

							
										
						</div>
					</div>

				</div>

				<!-- pagination --
				<div class="entry-pagination">
					<ul class="pagination">
				 		<li><a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
				 		<li class="active"><a href="#">1</a></li>
				 		<li><a href="#">2</a></li>
				 		<li><a href="#">3</a></li>
				 		<li><a href="#">4</a></li>
				 		<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
				 	</ul> 	
				</div> -->
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