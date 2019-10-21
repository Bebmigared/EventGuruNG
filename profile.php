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
	<title> Event Map - Edit Profile</title>
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
	<link rel="stylesheet" href="css/profile-style.css">
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
  background-color: #eee !important;
}

#regForm {
  background-color: #ffffff;
  margin: auto;
  font-family: Raleway;
  padding: 40px;
  width: 95%;
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

.uprofile-info {
    padding: 15px 5px 15px 5px;
    background: #e8e8e8;
    margin-bottom: 20px;
    height: 120px;
}
.uprofile-image {
    width: 100%;
    display: inline-block;
    margin: 0 0 15px 0;
    text-align: center;
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



/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
.label-primary {
    background-color: transparent;
}
</style>
</head>
<body style="overflow:visible !important;">


		<?php include('header.php'); ?>


<!-- banner pages -->

<div class="container">
	
<form id="regForm" action="store.php" method="post" class="wrapper main-wrapper1" >
<div class="page-heading">
	<h1 class="entry-title entry-title-event3" style="padding-top: 20px">User Profile:</h1>

</div><hr>
                            <fieldset class="profiles">

                                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                                    <div class="page-title">
                                        <div class="g-cell g-cell-1-1">
                                            <h2 class="text-heading-primary"><strong>Account Information</strong></h2>
                                        </div>

                                        <div class="pull-right hidden-xs">
                                            <ol class="breadcrumb">
                                                <li>
                                                    <a><i class="fa fa-home"></i>Home</a>
                                                </li>
                                                <li>
                                                    <a>Pages</a>
                                                </li>
                                                <li class="active">
                                                    <strong>Profile</strong>
                                                </li>
                                            </ol>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                
                                
                                
                                <div class="col-lg-12">
                                    <section class="box nobox">
                                        <div class="content-body">    
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4 col-xs-12">
                                                <div class="uprofile-image">
                                                    <img name="picture" id="picture" src="data/profile/<?= !isset($_SESSION['user']['picture']) ?  "user.png": $_SESSION['user']['picture'] ?>" class="img-responsive">
                                                    
                                                    <input type="button" id="change_pix" onclick="window.location.href='changemail.php'" value="Change profile picture" class="btn btn--secondary btn--small">
                                                </div>
                                                <div class="uprofile-name">
                                                    <h3>
                                                        <span value=""><?=$_SESSION['user']['firstname']?></span>
                                                        <span value=""><?=$_SESSION['user']['lastname']?></span>

                                                        <!-- Available statuses: online, idle, busy, away and offline -->
                                                        <span class="uprofile-status online"></span>
                                                    </h3>
                                                    <p class="uprofile-title">
                                                        <span value=""><?=$_SESSION['user']['jobtitle']?> </span>
                                                    </p>
                                                </div>
                                                <div class="uprofile-info">
                                                    <ul class="list-unstyled">
                                                        <li><i class='fa fa-home'></i><span value=""><?=$_SESSION['user']['address1']?> </span></li><br>
                                                        <li><i class='fa fa-user'></i> <span value=""><?=$_SESSION['user']['cellphone']?> </span></li><br>
                                                        <li><i class='fa fa-suitcase'></i> <span value=""><?=$_SESSION['user']['email']?> </span></li>
                                                    </ul>
                                                </div>

                                            </div>

                                            
                                                <div class="col-md-4 col-sm-4 col-xs-12" style="padding-left: 10px;">    
                                                    <div class="g-cell g-cell-1-1 l-mar-top-2">
                                                        <h3 class="text-heading-secondary">Account email address:</h3>     
                                                    </div>
                                                    <div class="g-cell g-cell-1-1 l-mar-top-2"></div>
                                                    <div class="js-d-credentials">

                                                        <div class="g-cell g-cell-1-1">
                                                            <p>        
                                                                  
                                                                <strong><span id="email" name="email" value=""><?=$_SESSION['user']['email']?> </span></strong>
                                                            </p>
                                                            
                                                            <input type="button" id="change_email" onclick="window.location.href='changemail.php'" value="Change Email" class="btn btn--secondary btn--small">
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="g-cell g-cell-1-1 l-mar-top-6">
                                                        <h3 class="text-heading-secondary">Contact Information</h3>
                                                    </div>
                                                    <div>
                                                        <!--<form action="/account" method="post" name="addressform" id="fieldform_addressform" class="responsive-form fieldsform js-d-submitControl">-->

                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="contactinfo_prefix" class="label-primary">Prefix</label></div>
                                                                    <div>
                                                                        <select class="js-d-select-box" id="prefix" name="prefix" value="">
                                                                            <option value="<?=$_SESSION['user']['prefix'] ?>" ><?=$_SESSION['user']['prefix'] ?></option>
                                                                            <option value="Mr."  >Mr.</option>
                                                                            <option value="Mrs." >Mrs.</option>
                                                                            <option value="Ms."  >Ms.</option>
                                                                            <option value="Miss" >Miss</option>
                                                                            <option value="Mx."  >Mx.</option>
                                                                            <option value="Dr."  >Dr.</option>
                                                                            <option value="Prof." >Prof.</option>
                                                                            <option value="Rev." >Rev.</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="firstname" class="label-primary">First Name</label></div>
                                                                    <div><input class="form-control" type="text" id="firstname"  name="firstname" value="<?=$_SESSION['user']['firstname']?>" required/></div>
                                                                    <input class="form-control" type="hidden" id="id"  name="id" value="<?=$_SESSION['user']['id']?>"/>
                                                                </div>
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="lastname" class="label-primary">Last Name</label></div>
                                                                    <div><input class="form-control" type="text" id="lastname"  name="lastname" value="<?=$_SESSION['user']['lastname']?>"  required /></div>
                                                                </div>
                                                            </div>
                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="ex-2" class="label-primary">Suffix</label></div>
                                                                    <div><input class="js-d-select-box" type="text" id="suffix"  name="suffix" value="<?=$_SESSION['user']['suffix']?>" required /></div>
                                                                </div>
                                                            </div>
                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="homephone" class="label-primary">Home Phone</label></div>
                                                                    <div><input class="form-control" type="text" id="homephone"  name="homephone" value="<?=$_SESSION['user']['homephone']?>"  required /></div>
                                                                </div>
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="cellphone" class="label-primary">Cell Phone</label></div>
                                                                    <div><input class="form-control" type="text" id="cellphone" name="cellphone" value="<?=$_SESSION['user']['cellphone']?>"   required/></div>
                                                                </div>
                                                            </div>
                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="job_title" class="label-primary">Job Title</label></div>
                                                                    <div><input class="form-control" type="text" id="jobtitle" name="jobtitle" value="<?=$_SESSION['user']['jobtitle']?>"  required/></div>
                                                                </div>
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="company" class="label-primary">Company / Organization</label></div>
                                                                    <div><input class="form-control" type="text" id="company" name="company" value="<?=$_SESSION['user']['company']?>"  required/></div>
                                                                </div>
                                                            </div>
                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="website" class="label-primary">Website</label></div>
                                                                    <div><input class="form-control" type="text" id="website" name="website" value="<?=$_SESSION['user']['website']?>"  required /></div>
                                                                </div>
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="blog" class="label-primary">Blog</label></div>
                                                                    <div><input class="form-control" type="text" id="blog" name="blog" value="<?=$_SESSION['user']['blog']?>"   required/></div>
                                                                </div>
                                                            </div>

                                                            <div class="g-group l-mar-top-4">
                                                                <div class="g-cell g-cell-1-1 l-mar-top-4">
                                                                    <h3 class="text-heading-secondary">Home Address:</h3>
                                                                </div>
                                                            </div>
                                                            <div class='js-d-cep'>

                                                                <div class="g-group">
                                                                    <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="home_address" class="label-primary">Address</label></div>
                                                                    <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input class="form-control" type="text" class="js-xd-cep-street" id="address1"  name="address1" data-automation="address1" value="<?=$_SESSION['user']['address1']?>"  required /></div>
                                                                </div>

                                                                <div class="g-group">
                                                                    <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="home_addresslinetwo" class="label-primary">Address 2</label></div>
                                                                    <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input class="form-control" type="text" class="js-xd-cep-neighborhood" id="address2"  name="address2" data-automation="address2" value="<?=$_SESSION['user']['address2']?>"   required/></div>
                                                                </div>

                                                                <div class="g-group">
                                                                    <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="home_city" class="label-primary">City</label></div>
                                                                    <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input class="form-control" type="text" class="js-xd-cep-city" id="city"  name="city" data-automation="city" value="<?=$_SESSION['user']['city']?>"  required /></div>
                                                                </div>
                                                                <div class="js-d-state-block">

                                                                    <div class="js-d-select-box" data-country="us">
                                                                        <label for="state" class="label-primary">
                                                                            State
                                                                        </label>
                                                                        <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                                            <select class="form-control"  id="state" name="state" data-automation="state" value="<?=$_SESSION['user']['state']?>"  required>
                                                                                
                                                                            <option value="<?=$_SESSION['user']['state']?>" selected="selected"><?=$_SESSION['user']['state']?></option>
                                                                                <option value="Abuja FCT">Abuja FCT</option>
                                                                                <option value="Abia">Abia</option>
                                                                                <option value="Adamawa">Adamawa</option>
                                                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                                                <option value="Anambra">Anambra</option>
                                                                                <option value="Bauchi">Bauchi</option>
                                                                                <option value="Bayelsa">Bayelsa</option>
                                                                                <option value="Benue">Benue</option>
                                                                                <option value="Borno">Borno</option>
                                                                                <option value="Cross River">Cross River</option>
                                                                                <option value="Delta">Delta</option>
                                                                                <option value="Ebonyi">Ebonyi</option>
                                                                                <option value="Edo">Edo</option>
                                                                                <option value="Ekiti">Ekiti</option>
                                                                                <option value="Enugu">Enugu</option>
                                                                                <option value="Gombe">Gombe</option>
                                                                                <option value="Imo">Imo</option>
                                                                                <option value="Jigawa">Jigawa</option>
                                                                                <option value="Kaduna">Kaduna</option>
                                                                                <option value="Kano">Kano</option>
                                                                                <option value="Katsina">Katsina</option>
                                                                                <option value="Kebbi">Kebbi</option>
                                                                                <option value="Kogi">Kogi</option>
                                                                                <option value="Kwara">Kwara</option>
                                                                                <option value="Lagos">Lagos</option>
                                                                                <option value="Nassarawa">Nassarawa</option>
                                                                                <option value="Niger">Niger</option>
                                                                                <option value="Ogun">Ogun</option>
                                                                                <option value="Ondo">Ondo</option>
                                                                                <option value="Osun">Osun</option>
                                                                                <option value="Oyo">Oyo</option>
                                                                                <option value="Plateau">Plateau</option>
                                                                                <option value="Rivers">Rivers</option>
                                                                                <option value="Sokoto">Sokoto</option>
                                                                                <option value="Taraba">Taraba</option>
                                                                                <option value="Yobe">Yobe</option>
                                                                                <option value="Zamfara">Zamfara</option>
                                                                                <option value="Outside Nigeria">Outside Nigeria</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class='js-d-provinces'>
                                                                        <div class="g-group">
                                                                            <div class="g-cell g-cell-1-1 l-mar-top-2">
                                                                                <label for="homecountry" class="label-primary">Country</label>
                                                                            </div>
                                                                            <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                                                <select class="form-control" id="country" name="country" data-automation="country" value="<?=$_SESSION['user']['country']?>" required>
                                                                                    <option value="<?=$_SESSION['user']['country']?>"><?=$_SESSION['user']['country']?></option><option value="AF" >Afghanistan</option><option value="AX" >Åland Islands</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia, Plurinational State of</option><option value="BQ" >Bonaire, Sint Eustatius and Saba</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="BN" >Brunei Darussalam</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="CV" >Cabo Verde</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo</option><option value="CD" >Congo, The Democratic Republic of the</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >Côte d'Ivoire</option><option value="HR" >Croatia</option><option value="CW" >Curaçao</option><option value="CY" >Cyprus</option><option value="CZ" >Czechia</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands (Malvinas)</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard Island and McDonald Islands</option><option value="VA" >Holy See (Vatican City State)</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KR" >Korea, Republic of</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Lao People's Democratic Republic</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macao</option><option value="MK" >Macedonia, Republic of</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia, Federated States of</option><option value="MD" >Moldova, Republic of</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="Nigeria" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestine, State of</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >Réunion</option><option value="RO" >Romania</option><option value="RU" >Russian Federation</option><option value="RW" >Rwanda</option><option value="BL" >Saint Barthélemy</option><option value="SH" >Saint Helena, Ascension and Tristan da Cunha</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="MF" >Saint Martin (French part)</option><option value="PM" >Saint Pierre and Miquelon</option><option value="VC" >Saint Vincent and the Grenadines</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >Sao Tome and Principe</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SX" >Sint Maarten (Dutch part)</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia and the South Sandwich Islands</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="TW" >Taiwan R.O.C.</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania, United Republic of</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US" >United States</option><option value="UM" >United States Minor Outlying Islands</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VE" >Venezuela, Bolivarian Republic of</option><option value="VN" >Viet Nam</option><option value="VG" >Virgin Islands, British</option><option value="VI" >Virgin Islands, U.S.</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>




                                                                        <div class="g-group">
                                                                            <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                            <div><label for="home_zip" class="label-primary">Zip/Postal Code</label></div>
                                                                            <div class='js-cep-spinner'>
                                                                                <input class="form-control" type="text" class='js-xd-cep-input' id="zipcode"  name="zipcode" data-automation="zipcode" value="<?=$_SESSION['user']['zipcode']?>"  required />
                                                                                </div><!-- End js-d-spinner -->
                                                                                <div><p class="hide form__field-error js-error-for-postal_code"></p></div>

                                                                            </div>

                                                                        </div>
                                                                    </div><!--End js-d-provinces -->
                                                                </div>
                                                            </div>
                                                        <!--</form>-->

                                                    </div><!-- End js-d-cep -->

                                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12" style="padding-left: 10px;">

                                            

                                               <div class="g-group l-mar-top-4">
                                                <div class="g-cell g-cell-1-1 l-mar-top-4">
                                                    <h3 class="text-heading-secondary">Billing Address:</h3>
                                                </div>
                                                </div>

                                            <div class='js-d-cep'>

                                                <div class="g-group">
                                                    <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="bill_address" class="label-primary">Address</label></div>
                                                    <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input class="form-control" type="text" id="address3"  name="address3" data-automation="address3" value="<?=$_SESSION['user']['address3']?>"  required /></div>
                                                </div>

                                                    <div class="g-group">
                                                        <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="bill_addresslinetwo" class="label-primary">Address 2</label></div>
                                                        <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="address4"  name="address4" data-automation="address4" value="<?=$_SESSION['user']['address4']?>"  required /></div>
                                                    </div>

                                                    <div class="g-group">
                                                        <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="bill_city" class="label-primary">City</label></div>
                                                        <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="city2"  name="city2" data-automation="city2" value="<?=$_SESSION['user']['city2']?>"  required /></div>
                                                    </div>
                                                    <div class=""  data-country="us">

                                                        <label for="state" class="label-primary">
                                                            State
                                                        </label>
                                                        <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                            <select id="state2" class="form-control" name="state2" data-automation="state" value="<?=$_SESSION['user']['state2']?>" required>
                                                                <option value="<?=$_SESSION['user']['state2']?>" selected="selected"><?=$_SESSION['user']['state2']?></option>
                                                                <option value="Abuja FCT">Abuja FCT</option>
                                                                <option value="Abia">Abia</option>
                                                                <option value="Adamawa">Adamawa</option>
                                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                                <option value="Anambra">Anambra</option>
                                                                <option value="Bauchi">Bauchi</option>
                                                                <option value="Bayelsa">Bayelsa</option>
                                                                <option value="Benue">Benue</option>
                                                                <option value="Borno">Borno</option>
                                                                <option value="Cross River">Cross River</option>
                                                                <option value="Delta">Delta</option>
                                                                <option value="Ebonyi">Ebonyi</option>
                                                                <option value="Edo">Edo</option>
                                                                <option value="Ekiti">Ekiti</option>
                                                                <option value="Enugu">Enugu</option>
                                                                <option value="Gombe">Gombe</option>
                                                                <option value="Imo">Imo</option>
                                                                <option value="Jigawa">Jigawa</option>
                                                                <option value="Kaduna">Kaduna</option>
                                                                <option value="Kano">Kano</option>
                                                                <option value="Katsina">Katsina</option>
                                                                <option value="Kebbi">Kebbi</option>
                                                                <option value="Kogi">Kogi</option>
                                                                <option value="Kwara">Kwara</option>
                                                                <option value="Lagos">Lagos</option>
                                                                <option value="Nassarawa">Nassarawa</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Ogun">Ogun</option>
                                                                <option value="Ondo">Ondo</option>
                                                                <option value="Osun">Osun</option>
                                                                <option value="Oyo">Oyo</option>
                                                                <option value="Plateau">Plateau</option>
                                                                <option value="Rivers">Rivers</option>
                                                                <option value="Sokoto">Sokoto</option>
                                                                <option value="Taraba">Taraba</option>
                                                                <option value="Yobe">Yobe</option>
                                                                <option value="Zamfara">Zamfara</option>
                                                                <option value="Outside Nigeria">Outside Nigeria</option>
                                                            </select>
                                                        </div>
                                            </div>
                                            <div class='js-d-provinces'>
                                                <div class="g-group">
                                                        <div class="g-cell g-cell-1-1 l-mar-top-2">
                                                          <label for="billcountry" class="label-primary">Country</label>
                                                      </div>
                                                      <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                          <select class="form-control"  id="country2" name="country2" data-automation="country2" value="<?=$_SESSION['user']['country2']?>" required>
                                                            <option value="<?=$_SESSION['user']['country2']?>"><?=$_SESSION['user']['country2']?></option><option value="AF" >Afghanistan</option><option value="AX" >Åland Islands</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia, Plurinational State of</option><option value="BQ" >Bonaire, Sint Eustatius and Saba</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="BN" >Brunei Darussalam</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="CV" >Cabo Verde</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo</option><option value="CD" >Congo, The Democratic Republic of the</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >Côte d'Ivoire</option><option value="HR" >Croatia</option><option value="CW" >Curaçao</option><option value="CY" >Cyprus</option><option value="CZ" >Czechia</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands (Malvinas)</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard Island and McDonald Islands</option><option value="VA" >Holy See (Vatican City State)</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KR" >Korea, Republic of</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Lao People's Democratic Republic</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macao</option><option value="MK" >Macedonia, Republic of</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia, Federated States of</option><option value="MD" >Moldova, Republic of</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="Nigeria" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestine, State of</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >Réunion</option><option value="RO" >Romania</option><option value="RU" >Russian Federation</option><option value="RW" >Rwanda</option><option value="BL" >Saint Barthélemy</option><option value="SH" >Saint Helena, Ascension and Tristan da Cunha</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="MF" >Saint Martin (French part)</option><option value="PM" >Saint Pierre and Miquelon</option><option value="VC" >Saint Vincent and the Grenadines</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >Sao Tome and Principe</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SX" >Sint Maarten (Dutch part)</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia and the South Sandwich Islands</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="TW" >Taiwan R.O.C.</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania, United Republic of</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US" >United States</option><option value="UM" >United States Minor Outlying Islands</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VE" >Venezuela, Bolivarian Republic of</option><option value="VN" >Viet Nam</option><option value="VG" >Virgin Islands, British</option><option value="VI" >Virgin Islands, U.S.</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option>
                                                        </select>
                                                        </div>
                                                </div>




                                                <div class="g-group">
                                                    <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                      <div><label for="bill_zip" class="label-primary">Zip/Postal Code</label></div>
                                                      <div class='js-cep-spinner'>
                                                        <input type="text" class="form-control" id="zipcode2"  name="zipcode2" data-automation="zipcode2" value="<?=$_SESSION['user']['zipcode2']?>"  required />
                                                    </div><!-- End js-d-spinner -->
                                                    <div><p class="hide form__field-error js-error-for-postal_code"></p></div>

                                                    </div>
                                                </div>
                                            </div><!--End js-d-provinces -->

                                            </div><!-- End js-d-cep -->


                                            <div class="g-group l-mar-top-4">
                                                <div class="g-cell g-cell-1-1 l-mar-top-4">
                                                    <h3 class="text-heading-secondary">Shipping Address:</h3>
                                                </div>
                                            </div>
                                            <div class='js-d-cep'>

                                            <div class="g-group">
                                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="ship_address" class="label-primary">Address</label></div>
                                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="address5"  name="address5" data-automation="address5" value="<?=$_SESSION['user']['address5']?>" required /></div>
                                            </div>

                                            <div class="g-group">
                                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="ship_addresslinetwo" class="label-primary">Address 2</label></div>
                                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="address6"  name="address6" data-automation="address6" value="<?=$_SESSION['user']['address6']?>" /></div>
                                            </div>

                                            <div class="g-group">
                                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="ship_city" class="label-primary">City</label></div>
                                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="city3"  name="city3" data-automation="city3" value="<?=$_SESSION['user']['city3']?>"  required /></div>
                                            </div>
                                            <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                <label for="state" class="label-primary">
                                                    State
                                                </label>
                                                <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                    <select id="state3" class="form-control" name="state3" data-automation="state" value="<?=$_SESSION['user']['state3']?>" required>
                                                        <option value="<?=$_SESSION['user']['state3']?>" selected="selected"><?=$_SESSION['user']['state3']?></option>
                                                        <option value="Abuja FCT">Abuja FCT</option>
                                                        <option value="Abia">Abia</option>
                                                        <option value="Adamawa">Adamawa</option>
                                                        <option value="Akwa Ibom">Akwa Ibom</option>
                                                        <option value="Anambra">Anambra</option>
                                                        <option value="Bauchi">Bauchi</option>
                                                        <option value="Bayelsa">Bayelsa</option>
                                                        <option value="Benue">Benue</option>
                                                        <option value="Borno">Borno</option>
                                                        <option value="Cross River">Cross River</option>
                                                        <option value="Delta">Delta</option>
                                                        <option value="Ebonyi">Ebonyi</option>
                                                        <option value="Edo">Edo</option>
                                                        <option value="Ekiti">Ekiti</option>
                                                        <option value="Enugu">Enugu</option>
                                                        <option value="Gombe">Gombe</option>
                                                        <option value="Imo">Imo</option>
                                                        <option value="Jigawa">Jigawa</option>
                                                        <option value="Kaduna">Kaduna</option>
                                                        <option value="Kano">Kano</option>
                                                        <option value="Katsina">Katsina</option>
                                                        <option value="Kebbi">Kebbi</option>
                                                        <option value="Kogi">Kogi</option>
                                                        <option value="Kwara">Kwara</option>
                                                        <option value="Lagos">Lagos</option>
                                                        <option value="Nassarawa">Nassarawa</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Ogun">Ogun</option>
                                                        <option value="Ondo">Ondo</option>
                                                        <option value="Osun">Osun</option>
                                                        <option value="Oyo">Oyo</option>
                                                        <option value="Plateau">Plateau</option>
                                                        <option value="Rivers">Rivers</option>
                                                        <option value="Sokoto">Sokoto</option>
                                                        <option value="Taraba">Taraba</option>
                                                        <option value="Yobe">Yobe</option>
                                                        <option value="Zamfara">Zamfara</option>
                                                        <option value="Outside Nigeria">Outside Nigeria</option>
                                                    </select>
                                                </div>
                                                <div class='js-d-provinces'>
                                                    <div class="g-group">
                                                        <div class="g-cell g-cell-1-1 l-mar-top-2">
                                                        <label for="shipcountry" class="label-primary">Country</label>
                                                        </div>
                                                        <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                        <select class="form-control" id="country3" name="country3" data-automation="country3" value="<?=$_SESSION['user']['country3']?>" required>
                                                            <option value="<?=$_SESSION['user']['country3']?>"><?=$_SESSION['user']['country3']?></option><option value="AF" >Afghanistan</option><option value="AX" >Åland Islands</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia, Plurinational State of</option><option value="BQ" >Bonaire, Sint Eustatius and Saba</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="BN" >Brunei Darussalam</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="CV" >Cabo Verde</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo</option><option value="CD" >Congo, The Democratic Republic of the</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >Côte d'Ivoire</option><option value="HR" >Croatia</option><option value="CW" >Curaçao</option><option value="CY" >Cyprus</option><option value="CZ" >Czechia</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands (Malvinas)</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard Island and McDonald Islands</option><option value="VA" >Holy See (Vatican City State)</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KR" >Korea, Republic of</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Lao People's Democratic Republic</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macao</option><option value="MK" >Macedonia, Republic of</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia, Federated States of</option><option value="MD" >Moldova, Republic of</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="Nigeria" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestine, State of</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >Réunion</option><option value="RO" >Romania</option><option value="RU" >Russian Federation</option><option value="RW" >Rwanda</option><option value="BL" >Saint Barthélemy</option><option value="SH" >Saint Helena, Ascension and Tristan da Cunha</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="MF" >Saint Martin (French part)</option><option value="PM" >Saint Pierre and Miquelon</option><option value="VC" >Saint Vincent and the Grenadines</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >Sao Tome and Principe</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SX" >Sint Maarten (Dutch part)</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia and the South Sandwich Islands</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="TW" >Taiwan R.O.C.</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania, United Republic of</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US" >United States</option><option value="UM" >United States Minor Outlying Islands</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VE" >Venezuela, Bolivarian Republic of</option><option value="VN" >Viet Nam</option><option value="VG" >Virgin Islands, British</option><option value="VI" >Virgin Islands, U.S.</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                                <div class="g-group">
                                                    <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                    <div><label for="ship_zip" class="label-primary">Zip/Postal Code</label></div>
                                                    <div class='js-cep-spinner'>
                                                        <input type="text" class="form-control" id="zipcode3"  name="zipcode3" data-automation="zipcode3" value="<?=$_SESSION['user']['zipcode3']?>"  required />
                                                    </div><!-- End js-d-spinner -->
                                                    </div>
                                                </div>
                                            </div><!--End js-d-provinces -->
                                            <div class="g-group l-mar-top-4">
                                        <div class="g-cell g-cell-1-1 l-mar-top-4">
                                            <h3 class="text-heading-secondary">Work Address:</h3>
                                        </div>
                                    </div>
                                    <div class='js-d-cep'>

                                            <div class="g-group">
                                            <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="work_address" class="label-primary">Address</label></div>
                                            <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="address7"  name="address7" data-automation="address7" value="<?=$_SESSION['user']['address7']?>"  required /></div>
                                            </div>

                                            <div class="g-group">
                                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="work_addresslinetwo" class="label-primary">Address 2</label></div>
                                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="address8"  name="address8" data-automation="address8" value="<?=$_SESSION['user']['address8']?>"  required /></div>
                                            </div>

                                            <div class="g-group">
                                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="work_city" class="label-primary">City</label></div>
                                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="city4"  name="city4" data-automation="city4"  value="<?=$_SESSION['user']['city4']?>" required/></div>
                                            </div>
                                            <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                <label for="state" class="label-primary">
                                                    State
                                                </label>
                                            </div>
                                            <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                <select id="state4" class="form-control" name="state4" data-automation="state4" value="<?=$_SESSION['user']['state4']?>" required>
                                                    <option value="<?=$_SESSION['user']['state4']?>" selected="selected"><?=$_SESSION['user']['state4']?></option>
                                                    <option value="Abuja FCT">Abuja FCT</option>
                                                    <option value="Abia">Abia</option>
                                                    <option value="Adamawa">Adamawa</option>
                                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                                    <option value="Anambra">Anambra</option>
                                                    <option value="Bauchi">Bauchi</option>
                                                    <option value="Bayelsa">Bayelsa</option>
                                                    <option value="Benue">Benue</option>
                                                    <option value="Borno">Borno</option>
                                                    <option value="Cross River">Cross River</option>
                                                    <option value="Delta">Delta</option>
                                                    <option value="Ebonyi">Ebonyi</option>
                                                    <option value="Edo">Edo</option>
                                                    <option value="Ekiti">Ekiti</option>
                                                    <option value="Enugu">Enugu</option>
                                                    <option value="Gombe">Gombe</option>
                                                    <option value="Imo">Imo</option>
                                                    <option value="Jigawa">Jigawa</option>
                                                    <option value="Kaduna">Kaduna</option>
                                                    <option value="Kano">Kano</option>
                                                    <option value="Katsina">Katsina</option>
                                                    <option value="Kebbi">Kebbi</option>
                                                    <option value="Kogi">Kogi</option>
                                                    <option value="Kwara">Kwara</option>
                                                    <option value="Lagos">Lagos</option>
                                                    <option value="Nassarawa">Nassarawa</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Ogun">Ogun</option>
                                                    <option value="Ondo">Ondo</option>
                                                    <option value="Osun">Osun</option>
                                                    <option value="Oyo">Oyo</option>
                                                    <option value="Plateau">Plateau</option>
                                                    <option value="Rivers">Rivers</option>
                                                    <option value="Sokoto">Sokoto</option>
                                                    <option value="Taraba">Taraba</option>
                                                    <option value="Yobe">Yobe</option>
                                                    <option value="Zamfara">Zamfara</option>
                                                    <option value="Outside Nigeria">Outside Nigeria</option>
                                                </select>
                                            </div>
                                            <div class='js-d-provinces'>
                                                <div class="g-group">
                                                    <div class="g-cell g-cell-1-1 l-mar-top-2">
                                                    <label for="workcountry" class="label-primary">Country</label>
                                                    </div>
                                                    <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                        <select class="form-control" id="country4" name="country4" data-automation="country4" value="" required>
                                                            <option value="<?=$_SESSION['user']['country4']?>"><?=$_SESSION['user']['country4']?></option><option value="AF" >Afghanistan</option><option value="AX" >Åland Islands</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia, Plurinational State of</option><option value="BQ" >Bonaire, Sint Eustatius and Saba</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="BN" >Brunei Darussalam</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="CV" >Cabo Verde</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo</option><option value="CD" >Congo, The Democratic Republic of the</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >Côte d'Ivoire</option><option value="HR" >Croatia</option><option value="CW" >Curaçao</option><option value="CY" >Cyprus</option><option value="CZ" >Czechia</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands (Malvinas)</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard Island and McDonald Islands</option><option value="VA" >Holy See (Vatican City State)</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KR" >Korea, Republic of</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Lao People's Democratic Republic</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macao</option><option value="MK" >Macedonia, Republic of</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia, Federated States of</option><option value="MD" >Moldova, Republic of</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="Nigeria" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestine, State of</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >Réunion</option><option value="RO" >Romania</option><option value="RU" >Russian Federation</option><option value="RW" >Rwanda</option><option value="BL" >Saint Barthélemy</option><option value="SH" >Saint Helena, Ascension and Tristan da Cunha</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="MF" >Saint Martin (French part)</option><option value="PM" >Saint Pierre and Miquelon</option><option value="VC" >Saint Vincent and the Grenadines</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >Sao Tome and Principe</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SX" >Sint Maarten (Dutch part)</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia and the South Sandwich Islands</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="TW" >Taiwan R.O.C.</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania, United Republic of</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US" >United States</option><option value="UM" >United States Minor Outlying Islands</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VE" >Venezuela, Bolivarian Republic of</option><option value="VN" >Viet Nam</option><option value="VG" >Virgin Islands, British</option><option value="VI" >Virgin Islands, U.S.</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="g-group">
                                                    <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                    <div><label for="work_zip" class="label-primary">Zip/Postal Code</label></div>
                                                    <div class='js-cep-spinner'>
                                                        <input type="text" class="form-control" id="zipcode4"  name="zipcode4" data-automation="zipcode4" value="<?=$_SESSION['user']['zipcode4']?>"  required />
                                                    </div><!-- End js-d-spinner -->

                                                        </div>
                                                </div>
                                            </div>
                        
                                    </div>

                                    </div><!-- End js-d-cep -->

                                            </div>
                                        


                                    
                                    <!-- End js-d-cep -->

                                    <br>

                                <div class="modal-footer">
                                                
                                                <button class="btn btn-success" name="save" type="submit">Update Profile</button>
                                </div>
                                </div>
                                <!--<button type="submit" class="btn" id="save" name="save"  style="height: 50px; width: 120px; left: 50; top: 50;" >Update Profile</button>-->
                                
                                </section>
                             </fieldset>
            </form>
	</div>
	
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