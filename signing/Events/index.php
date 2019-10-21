<?php
session_start();
if(!isset($_SESSION['user'])){ //if login in session is not set
	header("Location: ../index.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
}
?>
<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>EventGuru - View my created events </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
<link href="main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>  
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <!--<input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>-->
                        </div>
                        <button class="close"></button>
                    </div>       
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <!--ERROR START-->
                            <?php if(isset($_SESSION['user']) && count($_SESSION['user']) > 0) {?>
                            <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a type="button" tabindex="0" class="dropdown-item">My Events</a>
                                            <a type="button" tabindex="0" class="dropdown-item">Profile</a>
                                            <a type="button" tabindex="0" class="dropdown-item">Help</a>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a href="../logout.php" type="button" tabindex="0" class="dropdown-item">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                    <?=$_SESSION['user']['firstname']?>
                                    </div>
                                    <div class="widget-subheading">
                                    <a href="signing/logout.php"> <i class="fa fa-lock"></i> Logout </a>
                                    </div>
                                </div>
                                
                                
						
						<?php }else { ?>
									<a href="signing/index.php?location=" . urlencode($_SERVER['REQUEST_URI'])); $_SESSION['current_page'] = $_SERVER['REQUEST_URI']; class="buy-ticket">LOGIN/SIGN UP </a> 
						<?php } ?>
						
                                </div>
                            </div>
                        </div>
                </div>        
                </div>
                </div>
        </div>          
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading"><a href="index.php">Dashboard</a></li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Events
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="create.php">
                                                <i class="metismenu-icon"></i>
                                                Create Event
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-dropdowns.html">
                                                <i class="metismenu-icon">
                                                </i>Edit Event Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Manage My Event
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="components-tabs.html">
                                                <i class="metismenu-icon">
                                                </i>Manage My Events
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-accordions.html">
                                                <i class="metismenu-icon">
                                                </i>My Managed Event
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-notifications.html">
                                                <i class="metismenu-icon">
                                                </i>Edit My Managed Event Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                                    <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                    <?php include ('../new/myeve.php'); ?>
                       
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Events Created</div>
                                            <div class="widget-subheading">All my events</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo count($myeve); ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Events Reach</div>
                                            <div class="widget-subheading">Total Number of attendees</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>568</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Followers</div>
                                            <div class="widget-subheading">People Interested</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>46%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-premium-dark">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Products Sold</div>
                                            <div class="widget-subheading">Revenue streams</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning"><span>$14M</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">All Events Created
                                        <!--<div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Last Week</button>
                                                <button class="btn btn-focus">All Month</button>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">S/No</th>
                                                <th>Event Name</th>
                                                <th class="text-center">Location</th>
                                                <th class="text-center">Registered Users</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            for ($row = 0; $row < count($myeve); $row++) {
                                                ?>


                                            <tr>
                                                <td class="text-center text-muted"><?php echo $row ?></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="<?php echo $myeve[$row]['flyer'] ?>" alt="flyer">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading"><?php echo $myeve[$row]['eventname'] ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                

                                                <? echo $msg;?>
                                                <td class="text-center"><?php echo $myeve[$row]['venue'] ?> &nbsp;<?php echo $myeve[$row]['locations'] ?> </td>
                                                <?php
                                                include '../../db.php';
                                                //$uid = $_SESSION['user']['id'];
                                                $ueve = $myeve[$row]['id'];
                                                
                                                $myevent = [];
                                                //$data = "SELECT * FROM eregistered WHERE eventname = $ueve";
                                                $data = "SELECT COUNT(*) FROM eregistered where eventname =$ueve";
                                                //$data = "SELECT events.eventname, events.venue, events.locations FROM events INNER JOIN eregistered on events.id = eregistered.eventname where eventname <> $ueve";
                                                //$data = "SELECT COUNT(*) TotalCount, events.eventname, events.venue, events.locations FROM events INNER JOIN eregistered on events.id = eregistered.eventname where eventname <> $ueve";
                                                //print_r ($data);
                                                //return false;
                                                
                                                $result = mysqli_query($db, $data) or  mysqli_connect_error($data);
                                                //if (!$result || mysqli_num_rows($result) != 0){
                                                //print_r ($result);
                                                //return false;
                                                
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $myevent = $row;
                                                        //print_r ($row);
                                                //return false;
                                                        //echo count($myevent);
                                                        //return false;
                                                    }         
                                                                                         
                                                    count($myevent);
                                                    
                                                    //$counts = array_count_values($myevent);
                                                    print_r ($myevent);
                                                    return false;      
                                                }
                                                else {
                                                    $msg="";
                                                    $msg = "NO Records";
                                                }
                                                $db->close();
                                                ?>
                                                <td class="text-center">
                                                    <div class="badge badge-warning"><?php print_r ($myevent); ?></div>
                                                </td>
                                                <td class="text-center">
                                                    <a type="submit" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</a>
                                                </td>
                                            </tr>
                                             <?php }?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-block text-center card-footer">
                                        <!--<button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>  -->  
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="assets/scripts/main.js"></script></body>

</html>
