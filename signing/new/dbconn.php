<?php 
//include ('../index2.php');
//$servername = "127.0.0.1";
//session_start();
//$username = "username";
//$password = "";
//$dbname = "registration";
//$_SESSION['username'] = 'okay';


$conn = mysqli_connect("127.0.0.1", "root", "", "emadb") or DIE('Connection Not FOUND..!');
 if (!$conn) {
     die('connection error:' .mysqli_error($conn));
 }

 //if (isset($_SESSION['username'])) {

 
 $query = "SELECT * FROM registered WHERE username = '".$_SESSION['username']."'";
 $result = mysqli_query($conn, $query);

 //$username = $_POST['username']; 
//echo $username;
//return false();

 //$_SESSION['username'] = $username;
 //if ($rowval = mysqli_fetch_array($result))
if( $rowval = mysqli_fetch_array($result))
// if (mysqli_num_rows($result) != 0 ) 
 
  {
 
 $prefix= $rowval['prefix'];
 $firstname= $rowval['firstname'];
 $lastname= $rowval['lastname'];
 $suffix= $rowval['suffix'];
 $homephone= $rowval['homephone'];
 $cellphone= $rowval['cellphone'];
 $jobtitle= $rowval['jobtitle'];
 $company= $rowval['company'];
 $website= $rowval['website'];
 $blog= $rowval['blog'];
 $address1= $rowval['address1'];
 $address2= $rowval['address2'];
 $city= $rowval['city'];
 $state= $rowval['state'];
 $country= $rowval['country'];
 $zipcode= $rowval['zipcode'];
 $address3= $rowval['address3'];
 $address4= $rowval['address4'];
 $city2= $rowval['city2'];
 $state2= $rowval['state2'];
 $country2= $rowval['country2'];
 $zipcode2= $rowval['zipcode2'];
 $address5= $rowval['address5'];
 $address6= $rowval['address6'];
 $city3= $rowval['city3'];
 $state3= $rowval['state3'];
 $country3= $rowval['country3'];
 $zipcode3= $rowval['zipcode3'];
 $address7= $rowval['address7'];
 $address8= $rowval['address8'];
 $city4= $rowval['city4'];
 $state4= $rowval['state4'];
 $country4= $rowval['country4'];
 $zipcode4= $rowval['zipcode4'];

 //echo 'I am Found';
 //header ('location: profile.php');
 //header ('location: new/dbconn.php');
 } 
 else {
    echo 'Database not Found';
 }
 
 mysqli_close($conn);
 
//}
 
 ?>
 