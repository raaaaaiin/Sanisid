<!DOCTYPE>
<html>
  <head>
    <title><?php
echo phpversion();
session_start();
?></title>
    <style> .info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }
      .main{
  width: 100%;
  height: 100vh;
  text-align: center;
}

.main div{
  width: 400px;
  height: 800px;
  margin:0 auto;
  text-align: center;

}
.main div button{
  top: 500px;
  height: 30px;
  margin: 0 auto;
}


.container{
  display: none;
  width: 100%;
  height: 100vh;
  position: fixed;
  opacity: 0.9;
  background: #222;
  z-index: 40000;
  top:0;
  left: 0;
  overflow: hidden;

  animation-name: fadeIn_Container;
  animation-duration: 1s;
  
}

.modal{
  display:none;
  top: 0;
  min-width: 250px;
  width: 80%;
  height: 800px;
  margin: 0 auto;
  position: fixed;
  z-index: 40001;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #000;
  margin-top: 30px;
  margin-left: 10%;

  animation-name: fadeIn_Modal;
  animation-duration: 0.8s;
 
}

.header{
  width: 100%;
  height: 70px;
  border-radius: 10px 10px 0px 0px;
  border-bottom: 2px solid #ccc;
}

.header a{
  text-decoration: none;
  float: right;
  line-height: 70px;
  margin-right: 20px;
  color: #aaa;
}

.content{
  width: 100%;
  height: 500px;
}

form{
    margin-top: 20px;
}

form label{
  display: block;
  margin-left: 12%;
  margin-top: 10px;
  font-family: sans-serif;
  font-size: 1rem;
}

form input{
  display: block;
  width: 75%;
  margin-left: 10%;
  margin-top: 10px;
  border-radius: 3px;
  font-family: sans-serif;
}
form select{
  display: block;
  width: 75%;
  margin-left: 10%;
  margin-top: 10px;
  border-radius: 3px;
  font-family: sans-serif;
}

#first_label{
  padding-top: 30px;
}

#second_label{
  padding-top: 25px;
}


.footer{
  width: 100%;
  height: 80px;
  border-radius: 0px 0px 10px 10px;
  border-top: 2px solid #ccc;
}

.fotter button{
  float: right;
  margin-right: 10px;
  margin-top: 18px;
  text-decoration: none; 
}

/****MEDIA QUERIES****/

@media screen and (min-width: 600px){

  .modal{
    width: 500px;
    height: 550px;
    margin-left: calc(50vw - 250px);
    margin-top: calc(50vh - 350px);
  }


  .header{
    width: 100%;
    height: 40px;
  }

  .header a{
    line-height: 40px;
    margin-right: 10px;
  }

  .content{
    width: 100%;
    height: 450px;
  }

  form label{
    margin-left: 10%;
    margin-top: 10px;
  }

  form input{
    width: 75%;
    margin-left: 10%;
    margin-top: 10px;
  }

  #first_label{
  padding-top: 0px;
  }

  #second_label{
    padding-top: 0px;
  }

  .footer{
    width: 100%;
    height: 70px;   
  }

  .footer button{
    float: right;
    margin-right: 10px;
    margin-top: 10px;
  }

}

/*LARGE SCREEN*/
@media screen and (min-width: 1300px){

}

/****ANIMATIONS****/

@keyframes fadeIn_Modal {
  from{
    opacity: 0;
  }
  to{
    opacity: 1;
  }
}

@keyframes fadeIn_Container {
  from{
    opacity: 0;
  }
  to{
    opacity: 0.9;
  }
}

    
    </style>
    <link rel="stylesheet" href="style.css">
    

    <link href="css/positioning.css" rel="stylesheet">
    <style type="text/css">
                  
                 
    </style>
  </head>
  <body style="">

      <nav class="navtop navigationtop navigationtop-default navigationtop-fixed-top" style="">
          <div class="box boxattrib">
              <div class="navigationtop-nav navtopul">

                  <a class="navigationtop-brand navbrnad" href="/" style=""><strong class="navbrandgreen">San</strong>Isidro</a>
              </div>
              <div id="navigationtop navtopunique" class="navigationtop-collapse collapse" style="float:right">
                  <ul class="navigationtop-nav navtopul" style="font-size:16px">
                     
                      <li class="navtopli" style=""><a href="index.php" class="navlabel" style="" target="_Parent">Home</a></li>
                      <li class="navtopli" style=""><a href="index.php#section2" class="navlabel" style="" target="_Parent">About</a></li>

                      <li class="navtopli" style=""><a href="index.php#loc" class="navlabel" style="" target="_Parent">Contact</a></li>
                       
                   
                      <?php

                      include('db.php');

                      if (isset($_SESSION['id'])) {
                      echo ' <li class="navtopli" style=""><a href="home.php" class="navlabel" style="" target="_Parent">Dashboard</a></li>
             <li class="navtopli" style=""><a href = "accountLogout.php" target="_Parent" class="navlabel" style="">Log Out</a></li>';
 	            }
 	            else{

 		        echo '<li class="navtopli" style=""><a href="registration/newreg.php" id="open" class="navlabel" style="" target="_Parent" >Register</a></li>';
 		        echo '<li class="navtopli" style=""><a href="login.php" class="navlabel" style="">Log In</a></li>';
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

     
<div class="container" id="a">
  
</div>
<div class="modal" id="b">
  <div class="header">
  <span style="margin:25px;margin-top:25px;height:40px;line-height: 40px;">Residents Registration</span>
    <a href="#" class="cancel">X</a>
  </div>
  <div class="content">
    <form id="from" method="post"  onsubmit="return submit()">
      <label id="first_label">First Name</label>
      <input type="text" name="first" placeholder="First Name" required/>
       <label id="second_label">Middle Name</label>
      <input type="text" name="middle"  placeholder="Middle Name" />
      <label id="second_label">Last Name</label>
      <input type="text" name="last"  placeholder="Last Name" required/>
      <label id="second_label">Email Addresss</label>
      <input type="email" name="email" placeholder="Email Addresss" required/>
        <label id="second_label">Username</label>
        <input type="ext" name="user" placeholder="Username" required/>
      <label id="second_label">Password</label>
      <input type="password" name="password" placeholder="Password" required/>
      <label id="second_label">Confirm Password</label>
     <input type="password" name="confirm" placeholder="Confirm Password" required/>
      <label id="second_label">Proof of Identity (Valid Id)</label>
      <input id="image" type="file" name="image" required/>
  
  </div>
  
  <div class="footer">
    <button type="submit" id="login">Register</button>
  </div>
</div>
  </form>

      <div id="section1" style="width:100vw; -webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;height:75vh; background:url('img/body1.jpg')no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">

          <div class="box boxattrib">
             
              <div class="sec1div" style="">
                  <h1 class="sec1h1">


                      Barangay <span class="sec1h1span">San Isidro</span>
                  </h1>
                  <p class="sec1h1desc">
                      All of the most recent news events and basic information<br class="sec1h1deschighlight">
                      on Brgy. San Isidro Antipolo, Rizal can be found here.
                  </p>
                  <p style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin:0 0 10px;margin-bottom:15px;font-size:21px;font-weight:200;">
                  </p>
              </div>
          </div>
          <!-- /box -->
      </div>
      <div id="section2" style="">
          <div class="line section2line" style="">
              <div class="section2linetext" style="">
                  <h4 class="section2linetexth4" style="">Current Events</h4>
              </div>
          </div>
          <div class="box boxattrib">
              <div class="line boxboxatribdiv" style="">



                 



                  <?php
                  
                   $res = mysqli_query($db, "SELECT * FROM announce WHERE category = 'CurrentEvent' ORDER BY announceId DESC LIMIT 3");
                           while ($r = mysqli_fetch_assoc($res))
                           {
                           
                           ?>
                            <div class="medr section2box boxboxatribsecion boxboxatribsecion">
                            <img src='Communication/<?php echo $r["image"]?>' class="uppercenterimg">
                            <h3 class="sec2h3">
                          <?php echo $r["title"]?>
                                </h3>
                                <p class="uppercenterdesc"><?php echo substr($r["announcement"],0,350);?><a href="#" style="" class="sideviewnow">Read More..</a></p>
                                <a href='details.php?id=<?php echo $r["announceId"]?>'  style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;color:#337ab7;text-decoration:none;color:#29d846;"><button class="sec2h3but">Take me to the link</button></a>
                            </div>
                           
                           
                           <?php
                           
                           }

                  ?>













              </div>
          </div>
          <div class="line navtop-attrib">
              <div class="box boxattrib">
                  <hr class="horiline">
                  <div class="smallo section2box boxboxatribsecion">
                      <div class="line navtop-attrib">
                          <h1 class="horiline">Visit Barangay San Isidro</h1>
                          <p class="sidedesc">San Isidro, formerly Poblacion, is a barangay in the city of Antipolo, in the province of Rizal. Its population as determined by the 2020 Census was 65,530. This represented 7.38% of the total population of Antipolo.</p>


                          <div class="line" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin-right:-15px;margin-left:-15px;background:#eee;padding-bottom:10px;">








                             





                              <?php
                  
                   $res = mysqli_query($db, "SELECT * FROM announce WHERE category = 'VisitBrgy' ORDER BY announceId DESC LIMIT 3");
                           while ($r = mysqli_fetch_assoc($res))
                           {
                           
                           ?>
                           <div class="medr centerdiv">
                                  <h3 class="centertitle"><?php$r['title']?></h3>
                                  <img src='Communication/<?php echo $r["image"]?>' class="centerimg">
                                  <a href='details.php?id=<?php echo $r["announceId"]?>'  style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;color:#337ab7;text-decoration:none;color:#29d846;"><button class="sec2h3but2">View more</button></a>
                              </div>




                            
                           
                           
                           <?php
                           
                           }

                  ?>














                             
                          </div>
                          <hr class="horiline">
                          <h1 class="horiline" >Location</h1>
                          <div id="loc" class="line" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin-right:-15px;margin-left:-15px;background:#eee;padding-bottom:10px;margin-top:15px;">
                              <div class="medqw section2box boxboxatribsecion">
                                  <iframe style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2295.567200501462!2d121.18207106568074!3d14.617952968527614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bf26009d1665%3A0xffd4c0eded3a7bf!2sBrgy. San Isidro Hall!5e0!3m2!1sen!2sph!4v1652738637838!5m2!1sen!2sph" width="100%" height="600" frameborder="0" allowfullscreen=""></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="mede section2box" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:relative;min-height:1px;padding-right:15px;padding-left:15px;padding-left:40px;">



                      <div style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding-left:10px;">
                          
                      
                      
                     
                         



                            <?php
                  
                   $res = mysqli_query($db, "SELECT * FROM announce WHERE category = 'SideNews' ORDER BY announceId DESC LIMIT 3");
                           while ($r = mysqli_fetch_assoc($res))
                           {
                           
                           ?>
                           <h2 class="sidetitle"><?php echo $r["title"]?></h2>
                          <p class="sidedesc"><?php echo substr($r["announcement"],0,150);?></P>
                          <a href='details.php?id=<?php echo $r["announceId"]?>' style="" class="sideviewnow"> View Now</a> </p>
                          <img src='Communication/<?php echo $r["image"]?>' style="" class="sideimg">




                            
                           
                           
                           <?php
                           
                           }

                  ?>














                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div id="footer" class="line navtop-attrib">
          <div class="line" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin-right:-15px;margin-left:-15px;background:#29d846;">
              <div class="box" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;margin-top:50px;">
                  <div class="mede section2box boxboxatribsecion">
                  </div>
              </div>
              <div class="line navtop-attrib">
                  <p style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin:0 0 10px;text-align:center;color:#fff;margin-top:20px;">© Brgy San Isidro | Contact us at Sanisidro@Antipolo.gov</p>
              </div>
          </div>
      </div>
  </body>
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
            alert(this.responseText);
            if(this.responseText == "Wait for your confirmation email"){
                window.location = 'index.php';
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
</html>