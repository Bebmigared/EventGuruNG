<?php
//session_start();
//$username = "";
//$email = "";
//$errors = array();
//
////Connect to the database
//$db = mysqli_connect('127.0.0.1', 'root', '', 'emadb');
//
//if the register button is clicked
//if (isset($_POST['register'])) {
//	
//	
//	$query = "SELECT * FROM events where eventname = '" . $_POST["eventname"] . "'";
//    
//    $_SESSION['eventname']=$eventname;
//
//}
//$servername = 'localhost';
//$username = 'root';
//$password = '';
//$dbname = 'emadb';

//$conn = mysqli_connect($servername, $username, $password, $dbname);

include ('db.php');

if (!$conn)
{
die('connection error:'. mysqli_connect_error);
}
$events = $_POST['eventname'];
$connectdb=mysqli_select_db($conn, 'emadb');

$result=mysqli_query($conn, 'select * from events where eventname = $events');

while($row=mysqli_fetch_array($result))
{
    $_SESSION['eventdisp']=$row['eventname'];
    $_SESSION['eventdisp']=$row['eventtype'];
    
}

?>