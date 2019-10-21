<?php
    //$con= new mysqli("localhost","root","","emadb");
    //$name = $_post['search'];
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";
include 'db.php';
//$name = $_POST['search'];
$search = [];
    // Check connection


    //if (mysqli_connect_errno())
//      {
      //echo "Failed to connect to MySQL: " . mysqli_connect_error();
      //}
      if (isset($_POST['search'])) {
        $name = $_POST['search'];
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
                  header('location: searchresult.php');
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