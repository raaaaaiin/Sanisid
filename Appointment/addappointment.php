<!DOCTYPE html>
<html>







   <?php
      session_start();
      include("../db.php");
      $imgContent = "";
      $aname = $_POST['app_name'];
      $agend = $_POST['app_gender'];
      $adob = $_POST['app_dob'];
      $adate = $_POST['app_date'];
      $atim = $_POST['app_time'];
      $apurp = $_POST['app_purpose'];
       $id = $_SESSION['id'];
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
           
             
            
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 

      $sql = "INSERT INTO appointments(Name, gender, dob, app_date, `time`, purpose,proof,requester) VALUES ('$aname', '$agend', '$adob', '$adate', '$atim', '$apurp','$imgContent','$id')" or die("Errors");
      if ($db->query($sql) === TRUE) 
      {
      
      
      	
      	echo "<script>alert('You successfully added Appointment');</script>";
          
      	
      }
      
      
      else if ($rece != "Residents")
      {
      	
      	echo "<script>alert('You successfully added Appointment');</script>";
         
      	
      }
      
      
      
     
      
      ?>
</html>