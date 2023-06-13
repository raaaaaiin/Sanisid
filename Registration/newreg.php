<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <style>
      /* Reset styles */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
      }
      /* Form styles */
      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      }
      h1 {
        text-align: center;
        margin-bottom: 20px;
      }
      input[type="text"],
      input[type="email"],
      input[type="password"],
      input[type="file"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: none;
        background-color: #f5f5f5;
      }
      input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        border-radius: 5px;
        border: none;
        background-color: #4caf50;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
      label {
        font-weight: bold;
      }
    </style>
    <link href="../style.css" rel="stylesheet">
   
  </head>
  <body style="font-family: Roboto, sans-serif !important; background: url('../asset/bg.jpg') no-repeat center calc(50% + 150px) fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

  <nav class="navtop navigationtop navigationtop-default navigationtop-fixed-top" style="">
          <div class="box boxattrib">
              <div class="navigationtop-nav navtopul">

                  <a class="navigationtop-brand navbrnad" href="/" style=""><strong class="navbrandgreen">San</strong>Isidro</a>
              </div>
              <div id="navigationtop navtopunique" class="navigationtop-collapse collapse" style="float:right">
                  <ul class="navigationtop-nav navtopul" style="font-size:16px">
                     
                      <li class="navtopli" style=""><a href="../index.php" class="navlabel" style="" target="_Parent">Home</a></li>
                      <li class="navtopli" style=""><a href="../index.php#section2" class="navlabel" style="" target="_Parent">About</a></li>

                      <li class="navtopli" style=""><a href="../index.php#loc" class="navlabel" style="" target="_Parent">Contact</a></li>
                       
                   
                      <?php

                      include('../db.php');

                      if (isset($_SESSION['id'])) {
                      echo ' <li class="navtopli" style=""><a href="../home.php" class="navlabel" style="" target="_Parent">Dashboard</a></li>
             <li class="navtopli" style=""><a href = "../accountLogout.php" target="_Parent" class="navlabel" style="">Log Out</a></li>';
 	            }
 	            else{

 		        echo '<li class="navtopli" style=""><a href="#" id="open" class="navlabel" style="" target="_Parent" >Register</a></li>';
 		        echo '<li class="navtopli" style=""><a href="../login.php" class="navlabel" style="">Log In</a></li>';
 	           }
                      ?>
                      </li>
                  </ul>
                  <ul class="navigationtop-nav navigationtop-right navtopul" style="">
                      <li class="navtopli" style="">
                      </li>
                      <li class="navtopli" style="">
                      </li>

                  </ul>
              </div>
              <!--/.nav-collapse -->
          </div>
      </nav>
  
  
  
  
  <div class="container" style="margin-top:150px;">
      <h1>Registration Form</h1>
      <form id="from" method="post"  onsubmit="return submit()">
        <label for="first">First Name:</label>
        <input type="text" name="first" id="first" placeholder="First Name" required>
    <label for="middle">Middle Name:</label>
    <input type="text" name="middle" id="middle" placeholder="Middle Name">

    <label for="last">Last Name:</label>
    <input type="text" name="last" id="last" placeholder="Last Name" required>

    <label for="email">Email Address:</label>
    <input type="email" name="email" id="email" placeholder="Email Address" required>

    <label for="user">Username:</label>
    <input type="text" name="user" id="user" placeholder="Username" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="Password" required>

    <label for="confirm">Confirm Password:</label>
    <input type="password" name="confirm" id="confirm" placeholder="Confirm Password" required>

    <label for="image">Proof of Identity (Valid ID):</label>
    <input type="file" name="image" id="image" required>

    <input type="submit" value="Register">
  </form>
</div>
   
    <script>
        let filename;
  const input = document.querySelector('#image');
  function uploadimage(){
      const formData = new FormData();
      formData.append("Action", "UploadFile");
      formData.append('images[]',  document.getElementById('image').files[0]);
      const request = new XMLHttpRequest();
      request.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              data = JSON.parse(this.responseText);
              alert(data[1]);
              filename = data[0];
          }
      };
      request.open("POST", "compose.php");
      request.send(formData);
  }
function register(){

    const formData = new FormData();
    formData.append("Action", "Register");
    formData.append("first", document.getElementsByName("first")[0].value);
    formData.append("middle", document.getElementsByName("middle")[0].value);
    formData.append("last", document.getElementsByName("last")[0].value);
    formData.append("email", document.getElementsByName("email")[0].value);
    formData.append("password", document.getElementsByName("password")[0].value);
    formData.append("confirm", document.getElementsByName("confirm")[0].value);
    formData.append("user", document.getElementsByName("user")[0].value);
    formData.append('file', filename);


    const request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            
           
            var obj = JSON.parse(this.responseText);
            alert(obj.message);
            if (obj.id == 0){

            }else{
                
            window.location = 'residentRegistration.php?ref='+obj.id;
            }
        }
    };
    request.open("POST", "compose.php");
    request.send(formData);
}

  document.getElementById("from").onsubmit = function(e) {
      e.preventDefault();
      register()
      console.log("form submission intercepted");
  };

  document.getElementById("image").onchange = function(e) {
      e.preventDefault();
      uploadimage();
      console.log("image selected");
  };

    </script>
    </body>
</html>