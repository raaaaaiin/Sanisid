<!DOCTYPE html>
<html>
   <?php

      $imgContent = "";
      $First = $_POST['first'];
      $Middle = $_POST['middle'];
      $Last = $_POST['last'];
      $Email = $_POST['email'];
      $Password = $_POST['password'];
      $Confirm = $_POST['confirm'];
      if($Password == $Confirm){

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
          var_dump($_POST); var_dump($_FILES);
      $sql = "INSERT INTO request_acc(first_Name, middle_Name, last_Name, email_Add, `password`, proof) VALUES ('$First', '$Middle', '$Last', '$Email', '$Password','$imgContent')" or die("Errors");
          var_dump($sql);
      if ($db->query($sql) === TRUE)
      {



      	echo "<script>alert('Wait for your approval');</script>";
          echo "<script>window.location=\"index.php\";</script>";

      }
      }else{

      echo "<script>alert('Password doesnt match!');</script>";

          echo "<script>window.location=\"index.php\";</script>";
      }










      ?>
</html>