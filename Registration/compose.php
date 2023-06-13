<?php
session_start();
include("../db.php");
@$Action = "";
$Action = $_POST['Action'];

if ($Action == "Register")
{
    $id = 0;
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
        $response = array("message" => "Username already exist", "id" => $id);
    }else if($EmailresultCheck_info != 0){
        
        $response = array("message" => "Email already exist", "id" => $id);
    }else{
        if ($Password == $Confirm)
{
$sql = "INSERT INTO request_acc(first_Name, middle_Name, last_Name, email_Add, password, proof,user_name) VALUES ('$First', '$Middle', '$Last', '$Email', '$Password','$imgContent','$User')" or die("Errors");
if ($db->query($sql) === true)
{
$id = $db->insert_id; // get the auto-generated id
$response = array("message" => "Wait for your confirmation email", "id" => $id);
$sqle = "INSERT INTO accounts (ID, Fullname, last_name, middle_name, first_name, Username, Emailaddress, device_Id, Password, Position, Committee, position_id, status)
        VALUES ('$id', '$First $Middle $Last', '$Last', '$Middle', '$First', '$User', '$Email', '', '$Password', 'Resident', 'none', '0', '0')";

if ($db->query($sqle) === true) {
} else {
    $response = array("message" => "Please Re-try your registration", "id" => 0);
}
}else{
    
    $response = array("message" => "Please Re-try your registration", "id" => 0);

}
}else{
    $response = array("message" => "Password Not Matched", "id" => 0);

}
    }


    
    echo json_encode($response);

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
                    move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "../asset/requestImg/" . $newfilename );
                }
                array_push($returndata,$newfilename,'Uploaded Successfully');

            }else{
                array_push($returndata,'null','This is not an image');
            }



        }


    echo json_encode($returndata);



}

?>
