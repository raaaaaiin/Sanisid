<?php
session_start();
include("db.php");
@$Action = "";
$Action = $_POST['Action'];

if ($Action == "Register")
{
    $imgContent =$_POST['file'];
    $_FILES = $_POST['file'];
    $First = $_POST['first'];
    $Middle = $_POST['middle'];
    $Last = $_POST['last'];
    $Email = $_POST['email'];
    $User = $_POST['user'];
    $Password = $_POST['password'];
    $Confirm = $_POST['confirm'];
    $verifyusername = "SELECT * FROM `accounts` where Username = '$User'";
    $Userresult_info = mysqli_query($db, $verifyusername);
    $UserresultCheck_info = mysqli_num_rows($Userresult_info);
    $verifyEmail = "SELECT * FROM `accounts` where Emailaddress = '$Email'";
    $Emailresult_info = mysqli_query($db, $verifyEmail);
    $EmailresultCheck_info = mysqli_num_rows($Emailresult_info);
    if($UserresultCheck_info != 0){
        echo "Username already exist";
    }else if($EmailresultCheck_info != 0){
        echo "Email already exist";
    }else{
        if ($Password == $Confirm)
        {
            $sql = "INSERT INTO request_acc(first_Name, middle_Name, last_Name, email_Add, `password`, proof,user_name) VALUES ('$First', '$Middle', '$Last', '$Email', '$Password','$imgContent','$User')" or die("Errors");
            if ($db->query($sql) === true)
            {
                echo "Wait for your confirmation email";
            }else{
                echo "Please Re-try your registration";
            }
        }else{
            echo "Password Not Matched";
        }
    }




}

if ($Action == "UploadFile")
{
$returndata = array();
        foreach ($_FILES["images"]["error"] as $key => $error) {
            $finfo 		= finfo_open(FILEINFO_MIME_TYPE);
            $file_type  = finfo_file($finfo, $_FILES["images"]["tmp_name"][$key]);
            if($file_type == "image/jpg" || $file_type == "image/jpeg"){
                if ($error == UPLOAD_ERR_OK) {
                    $temp = explode(".", $_FILES["images"]["name"][$key]);
                    $newfilename = round(microtime(true)) . '.' . 'jpg';
                    move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "asset/requestImg/" . $newfilename );
                }
                array_push($returndata,$newfilename,'Uploaded Successfully');

            }else{
                array_push($returndata,'null','This is not an image');
            }



        }


    echo json_encode($returndata);



}

?>
