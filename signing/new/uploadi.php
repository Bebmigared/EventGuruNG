<?php 
//$db = mysqli_connect('127.0.0.1', 'root', '', 'emadb');
include ('../../db.php');
 if(isset($_POST['upload'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    $comment = $_POST["comment"];
    $lastid = $_POST["lastid"];
    $eventname = $_POST["eventname"];
    $id = $_POST["id"];
    
    //if (!$db) {
    //die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
                //echo $lastid;
                //return false;
    if(isset($name)){
        if(!empty($name)){      
            $location = 'uploads/';  
            //$data = "SELECT id FROM events where eventname = $eventname";
            //$result = $db->query($data);
            //while ($result->fetch_assoc()){
            //$sql = "INSERT INTO events (flyer, comment, uploaded_on) VALUES ('".$location.$name."','".$comment."', NOW())";
            $sql = "UPDATE events SET flyer ='$location.$name', comment = '$comment', uploaded_on = NOW() WHERE id=$lastid ";
             //$result = mysqli_query($db, $sql) ;
             
if (mysqli_query($db, $sql)) {
             //if ($result){
                //echo $id;
                //echo "New record created successfully";
                if(move_uploaded_file($temp_name, $location.$name)){
                //echo $event;
                //echo $comment;
                //echo $location.$name;       
                //echo 'File uploaded successfully';
                //echo "The file ".$name. " has been uploaded successfully.";
                //<php <a href="">Preview Event Details</a> >
                //echo "Preview Event Details";
                header ('location: preview.php');
            }
            }else{ 
                //mysqli_error($db); 
                echo "Error: " .mysqli_error($db);
            }
        
            
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}
?>