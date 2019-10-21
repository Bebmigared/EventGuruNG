<?php 
session_start();
//include 'search.php';

//if(!isset($_SESSION['user'])){ //if login in session is not set
	//header("Location: signing/index.php");
//}
?>
<?php
    
include 'db.php';
//$name = $_POST['search'];
$search = [];
    // Check connection
 echo $_POST['search'];
    return false;
if (isset($_POST['search'])) {
        $word = $_POST['search'];
        $word = htmlspecialchars($word); 
    // changes characters used in html to their equivalents, for example: < to &gt;
   
		//$name = mysql_real_escape_string($name);
        //$name = preg_replace("#[^0-9a-z]i#","", $name);
          $sql ="SELECT * FROM events WHERE eventname LIKE '%{$word}%' OR eventcategory LIKE '%{$word}%' OR eventtype LIKE '%[$word]%'";
          $result = mysqli_query($db, $sql) or die(mysqli_error($db));
          if (mysqli_num_rows($result) != 0) {
           
            //$count = mysqli_num_rows($sql);
            //if(mysql_num_rows($raw_results) > 0
            //if($result ==0){
              //while ($row = mysqli_fetch_array($result)) {
                
              while ($row = $result->fetch_assoc()) {
                  $search[] = $row;

                  count($search);

                  
                  //echo $name;
                  //print_r ($search);
                  //return false;
                  //header('location: searchresult.php');
                  //echo $row['eventname'];
        //echo "<br>";
              }
          }
          else {
              echo "Error Searching";
          }
          //
          
      }
      else {
        //header('location: dex.php');
        echo "Error Searching";
      }
    //if (mysqli_connect_errno())
//      {
      //echo "Failed to connect to MySQL: " . mysqli_connect_error();
      //}
      
      if (isset($_POST['keyword'])) {
        $name = $_POST['keyword'];
        $name = htmlspecialchars($name); 
    // changes characters used in html to their equivalents, for example: < to &gt;
    //echo $name;
    //return false;
		//$name = mysql_real_escape_string($name);
        //$name = preg_replace("#[^0-9a-z]i#","", $name);
          $sql ="SELECT * FROM events WHERE eventname LIKE '%{$name}%' OR eventcategory LIKE '%{$name}%' OR eventtype LIKE '%[$name]%'";
          $result = mysqli_query($db, $sql) or die(mysqli_error($db));
          if (mysqli_num_rows($result) != 0) {
           
            //$count = mysqli_num_rows($sql);
            //if(mysql_num_rows($raw_results) > 0
            //if($result ==0){
              //while ($row = mysqli_fetch_array($result)) {
                
              while ($row = $result->fetch_assoc()) {
                  $search[] = $row;

                  count($search);

                  
                  //echo $name;
                  //print_r ($search);
                  //return false;
                  //header('location: searchresult.php');
                  //echo $row['eventname'];
        //echo "<br>";
              }
          }
          else {
              echo "Error Searching";
          }
          //
          
      }
      else {
        //header('location: dex.php');
        echo "Error Searching";
      }
    mysqli_close($db);
    ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Result</title>
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

	<!--FA FA ICONS LOADER-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
         .field {
    width:785px;
    background-color:#2b1717;
    align-content: center;
}
</style>
</head>
<body style="overflow:visible !important;">


	<!-- Header  Begins -->
<?php include('header.php'); ?>
<!-- Header  Ends -->


<!-- banner pages -->
<div class="page-headings">
<h1>SEARCH RESULTS</h1>
</div>

<div id="main">
	<div class="entry-content">
		<!-- single event3 -->
		<div class="entry-single-event3">
			<div class="container">
				<div class="col-md-8">
					<div class="banner">
                    <div class="tab-content">
							
                                <!-- register event3 -->
                                <div class="entry-register-now-event4">
                                    <div class="frm-register">
                                    <h3 align="center"> List of your search result </h3>
                                        <br>
									<?php 
									        for ($row = 0; $row < count($search); $row++) {
                                        	?>
                                        <div class="item technology col-xs-12 col-sm-12 col-md-12">
                                        <div class="row">
														<hr>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="img">
                                                        <a href="javascript:;"><img src="images/our-venues-page7/1.jpg" alt="list event"></a>
                                                    </div>
                                                </div>
                                                
											</div>
											
                                            <div class="col-md-8 fix-col2">
                                                <div class="row">
                                                    <div class="txt-item">
                                                        <h3><a href="details.php/?e=<?=$search[$row]['id']?>"><?php echo $search[$row]['eventname'] ?></a></h3>
														

														<i class="fa fa-calendar" aria-hidden="true">&nbsp;<span>Start Date:&nbsp;</i><?php echo $search[$row]['startdate'] ?></span><br>
                                                            <i class="fa fa-map-marker" aria-hidden="true">&nbsp;<span>Venue:&nbsp;</i><?php echo $search[$row]['venue'] ?>,&nbsp; <?php echo $search[$row]['locations'] ?></span><br>
                                                            <i class="fa fa-folder-open" aria-hidden="true">&nbsp;<span>Type:&nbsp;</i><?php echo $search[$row]['eventcategory'] ?></span>
                                                            <i class="fa fa-clock-o" aria-hidden="true">&nbsp;<span></i> Upcoming</span>
                                                        
                                                        <p><?php echo $search[$row]['comment'] ?></p>
                                                        <div class="btn-list-event1">
                                                            <a href="details.php/?e=<?=$search[$row]['id']?>"><i class="fa fa-file-text-o" aria-hidden="true"></i> information</a>
                                                            <a href="details.php/?e=<?=$search[$row]['id']?>"><i class="fa fa-credit-card" aria-hidden="true"></i> buy ticket</a>
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
					</div>
					<!-- tabs event3 -->
					<br>
<!-- AddToAny BEGIN --

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
<-- AddToAny END -->
<br><br><br><br><br>
					<br><br><br><br><br>
					<br><br><br><br><br>
					<br><br><br><br>
					

				</div>

				<div class="col-md-4">
				<div class="event-search">
					<h3>Event search</h3>

					<div class="frm-event-search">
						<form action="searchresult.php" method="POST">
							<input type="text" name="keyword" id="keyword" placeholder="Keyword">

							<!--<div class="sl-cate">
								<select name="category" id="category">
									<option>Business</option>	
									<option>Education</option>	
									<option>Music</option>	
									<option>Technology</option>
								</select>
								<i class="fa fa-chevron-down" aria-hidden="true"></i>
							</div> -->
							
							
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