<?php 
include 'db.php';

 if(isset($_POST['submit'])){
    $pics       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    $fullname = $_POST["fullname"];
    $profession = $_POST["profession"];
    $company = $_POST["company"];
    $position = $_POST["position"];
    $eventname = $_POST["eventname"];
    $linkedin = $_POST["linkedin"];
    $facebook = $_POST["facebook"];
    $twitter = $_POST["twitter"];
    $instagram = $_POST["instagram"];
    $lastid = $_POST["lastid"];
    $id = $_POST["id"];
    
                //echo $lastid;
                //return false;
    if(isset($pics)){
        if(!empty($pics)){      
            $location = 'uploads/';  
            //$data = "SELECT id FROM events where eventname = $eventname";
            //$result = $db->query($data);
            //while ($result->fetch_assoc()){
            $sql = "INSERT INTO speakers (eventname, fullname, profession, company, position, linkedin, facebook, twitter, instagram, s_image) 
            VALUES (,'".$eventname."' ,'".$fullname."' ,'".$profession."' ,'".$company."' ,'".$position."' ,'".$linkedin."' ,'".$facebook."' ,'".$twitter."' ,'".$instagram."', '".$location.$name."')";
            //$sql = "UPDATE events SET flyer ='$location.$pics', comment = '$comment', uploaded_on = NOW() WHERE id='$lastid' ";
            if (mysqli_query($db, $sql)) {
                //echo $id;
                echo "New record created successfully";

            }else{ 
                mysqli_error($db); 
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
            }
        
            if(move_uploaded_file($temp_name, $location.$pics)){
                header ('location: preview.php');
                //echo $event;
                //echo $comment;
                //echo $location.$name;       
                //echo 'File uploaded successfully';
                //echo "The file ".$name. " has been uploaded successfully.";
                //<php <a href="">Preview Event Details</a> >
                //echo "Preview Event Details";
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}
?>