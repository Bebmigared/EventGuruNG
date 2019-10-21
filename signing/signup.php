<?php 
include ('error.php');
include ('server.php'); 
//$errors = array();
?> 
<!--?php require_once 'controllers/authController.php'; ?> -->

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup</title>
        
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.PNG">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <a href="../index.php"><h1><img src="../images/logoWhite.png" alt="logo" style="width:300px;height:100px;"/></h1></a></a>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3><a href="index.php">Login</a>| Sign Up</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="signup.php" method="post" class="login-form">
                                
                                

								<div class="form-group">
			                    		<label class="sr-only" >Firstname</label>
			                        	<input type="text" name="firstname" placeholder="Firstname..." class="form-username form-control" id="firstname" required>
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" >Lastname</label>
			                        	<input type="text" name="lastname" placeholder="Lastname..." class="form-username form-control" id="lastname" required>
                                    </div>
                                    <div class="form-group">
			                    		<label class="sr-only" >Email</label>
			                        	<input type="email" value="<?php echo($email) ?>" name="email" placeholder="Email..." class="form-username form-control" id="email" required>
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" >Username</label>
			                        	<input type="text" value="<?php echo($username) ?>" name="username" placeholder="Username..." class="form-username form-control" id="username" required>
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" >Password</label>
			                        	<input type="password" name="password1" placeholder="Password..." class="form-password form-control" id="password1" required>
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" >Retype Password</label>
			                        	<input type="password" name="password2" placeholder="Retype Password..." class="form-password form-control" id="password2" required>
			                        </div>
			                        <button type="submit" name="register" class="btn">Sign Up!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="<code>__abENT__lt;code__abENT__gt;function fblogin(){ FB__abENT__#95;__abENT__#95;abENT__abENT__#95;__abENT__#95;#46;login(function(response) {},{ scope: __abENT__#95;__abENT__#95;abENT__abENT__#95;__abENT__#95;apos;email,user_friends,publish_actions,user_likes,user_relationships,user_location__abENT__#95;__abENT__#95;abENT__abENT__#95;__abENT__#95;apos; });__abENT__lt;__abENT__#8260;code__abENT__gt;</code>">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>-->
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>