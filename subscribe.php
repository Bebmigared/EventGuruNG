<?php

$url = $_SERVER['HTTP_REFERER'];

include 'db.php';
//$email=NULL;
//$msgowner =NULL;
$email = $_POST['email'];
$msgowner = $_POST['msgowner'];
	$query = "SELECT * FROM subscribers where email = '$email'"  ;
	$result = mysqli_query($db, $query);
  $subs = mysqli_fetch_assoc($result);
  if ($subs) { // if user exists
    if ($subs['email'] === $email) {
        
        
        
        echo "<script type='text/javascript'>alert('THANK YOU! The Email you entered is already on EventGuru.ng Subscribers List.')</script>";
        echo '<meta http-equiv="refresh" content="1;URL=' . $url . '">';
    }
  }
else {
$sql = "INSERT INTO subscribers (email, sentOn) VALUES ('$email',NOW())";
$results = mysqli_query($db, $sql);
if ($results) {
        //echo "<script type='text/javascript'>alert('You have successfully Subscribed to EventGuru.ng');</script>";
        require 'mailing.php'   ;
                                     $to = $email;
                                 $subject = "Successful Subscription to EventGuru";
                                 $msg = "
        <html>
        <head>
        <title>Welcome To EventGuru Subscribers List</title>
        </head>
        <body>
        <p>Hello there!</p>
        <p>Thanks for choosing <strong>EventGuru</strong>.</p>
        <p>Your email has been successfully added to EventGuru.ng Subscribers List.</p>
        <p>Welcome to the world of <strong>Unlimited Events</strong>.</p>
        <p><strong>From now, you will receive mails on recent events available around you</strong>.</p>
        <p>Best Regards,</p>
        <br><i>Admin,</i>
        <br><strong>EventGuru</strong>
        <br>info@eventguru.ng
        </body>
        </html>
        ";
        //$headers = "MIME-Version: 1.0" . "\r\n";
        //$headers = "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        //$headers = 'From: EventGuru Admin<info@eventguru.com>' . "\r\n";
        
		sendmail($to,$msg,$subject);
		
        echo "<script LANGUAGE='JavaScript'>window.alert('You have successfully Subscribed to EventGuru.ng. You will receieve a confirmation mail.');</script>";
        echo '<meta http-equiv="refresh" content="0;URL=' . $url . '">';
}
    else {
        echo "<script type='text/javascript'>alert('Submission Error!! Please try again later. ')</script>";
        echo '<meta http-equiv="refresh" content="0;URL=' . $url . '">';
    }
}
?>