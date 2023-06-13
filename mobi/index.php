<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
        background: linear-gradient(to top, #0e3309, green);
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100vh;
      }
      img {
      width:150px;
      height:150px;
        margin-top: 50px;
      }
      form {
        margin-top: 50px;
      }
      input[type="text"], input[type="password"] {
        padding: 10px;
        width: 90%;
        margin-top: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 18px;
      }
      input[type="submit"] {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: white;
        border-radius: 5px;
        border: none;
        font-size: 18px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <img src="..\asset\logo.png" alt="Logo">
    <form method="POST">
    <input type="text" name="username" required autofocus placeholder="Enter Username or Email address">
			<input type="password" name="password" required autofocus placeholder="Enter Password">
            <input type="Submit" name="submit" value="Enter">
            <script>
            function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "Passwordrd";
    }
}
</script>
            </script>
    </form>
  </body>


<?php
include('../db.php');

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$qry = mysqli_query($db, "SELECT
accounts.ID,
accounts.Fullname,
accounts.last_name,
accounts.middle_name,
accounts.first_name,
accounts.Username,
accounts.Emailaddress,
accounts.device_Id,
accounts.`Password`,
accounts.Position,
accounts.Committee,
accounts.position_id,
accounts.status,
resident_detail.res_Bday,
ref_gender.gender_Name
FROM
accounts
LEFT JOIN resident_detail ON accounts.ID = resident_detail.res_ID
LEFT JOIN ref_gender ON resident_detail.gender_ID = ref_gender.gender_ID
WHERE Username ='$username' OR Emailaddress ='$username'");
	$count = mysqli_num_rows($qry);

	if ($count > 0) {
		$accnt = mysqli_fetch_array($qry);
		$pass=$accnt['Password'];

		
		$_SESSION['id'] = $accnt['ID'];


		if($pass==$password && $username==$username){
                $pos = $accnt['position_id'];
				$position=$accnt['Position'];
				$committee=$accnt['Committee'];
				$fullname = $accnt['Fullname'];
				$_SESSION['LOGIN_STATUS'] = true;
				$_SESSION['position'] = $position;
				$_SESSION['USER'] = $username;
				$_SESSION['first_name'] = $accnt['first_name'];
				$_SESSION['middle_name'] = $accnt['middle_name'];
				$_SESSION['last_name'] = $accnt['last_name'];
				$_SESSION['committee'] = $committee;
				$_SESSION['password'] = $password;
				$_SESSION['emailaddress'] = $accnt['Emailaddress'];
				$_SESSION['device_Id'] = $count['Position'];
				$_SESSION['positionID'] = $pos;
				$_SESSION['fullname'] = $fullname;
				$_SESSION['position_id'] = $accnt['position_id'];
				$_SESSION['gender'] = $accnt['gender_Name'];
				$_SESSION['bod'] = $accnt['res_Bday'];
				$_SESSION['status'] = $accnt['status'];
                $id = $_SESSION['id'];
                if($_SESSION['status'] == '0'){
                   
                  header('location:home.php');
                }else{
                    header('location:home.php');
                }

		}
		else {
		echo "<script>alert('Incorrect Password.');</script>";
		}

	}
	else {
	echo "<script>alert('Invalid username.');</script>";
	}

} 
?>
</html>