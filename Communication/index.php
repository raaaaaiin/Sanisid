<!DOCTYPE html>
<html lang="en">
   <?php
      include("connection.php");
      session_start();
      
      if (isset($_SESSION['receiver']))
      {
               $receiver  = $_SESSION['receiver'];
               // $position = $_SESSION['position'];
      
      
      }  
      
      ?>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Announcements</title>
      <link href="css/index.css" rel="stylesheet">
      <link href="css/positioning.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
     
   </head>
   <body style="background-color:#f9fafe !important">
     

      <section class="sanisid_imgs">
      <div class="cont">
          <style>.info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }</style> <style>.info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }</style> <div class="info">
              <p>&nbsp <strong>Instruction!</strong> This page is used to Create a new event so that resident may see the latest happening in our area
                  <br>&nbsp if you click the <strong>Home</strong> it will re-direct you to public viewing of events
                  <br>&nbsp if you click the <strong>Add Event</strong> it will re-direct you creation of new events
                  <br>&nbsp if you click the <strong>Add category</strong> it will re-direct you to add new category of an event
          </div>
          <br>
        <div class="r">
          <div class="clg-8">
            <div class="all-sanisid_imgs">
              <div class="r">















                










                  <?php
               $position = $_SESSION['position'];
               
                       if (true) 
                       {
                          
                            $res = mysqli_query($db, "SELECT * FROM announce ORDER BY announceid Desc");
                           while ($r = mysqli_fetch_assoc($res))
                           {
               ?>

               <div class="clg-12">
                  <div class="sanisids-post">
                    <div class="sanisids-thumb">
                    <img style="image-rendering: pixelated;width:730;height:300px;background: url(<?php echo "image/" . rawurlencode(basename($r["image"]));?>); background-size: cover;
    background-repeat: round;)"> 
                    </div>
                    <div class="down-content">
                      <span><?php echo $r['category']; ?></span>
                      <a href='../details.php?id=<?php echo $r["announceId"]?>' target="_Parent"><h4><?php echo $r['title']; ?></h4></a>
                      <ul class="isidro-info">
                        <li><a href="#"><?php echo $r['receiver'];?></a></li>
                        <li><a href="#"><?php echo date("M jS, Y", strtotime($r['date']));?></a></li>
                      </ul>
                      <p><?php echo $r['announcement']; ?></p>
                      <div class="isidro-options">
                        <div class="r">
                          <div class="c-6">
                            <ul class="isidro-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li>When:</li>
                              <li><?php echo $r['when']; ?></li>
                            </ul>
                          </div>
                          <div class="c-6">
                            <ul class="isidro-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Where:</a>,</li>
                              <li><a href="#"> <?php echo $r['where']; ?></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>



            




            <?php
               }
               
               }
               
               else
               {
               
               $result = mysqli_query($db, "SELECT * FROM announce");
               while($r = mysqli_fetch_assoc($result))
               {
               
               ?>
            
            <?php
               }
               }
               ?>






               </div>
               </div>
               </div>
















               






























                <!--Side item -->
                <div class="clg-4"><div class="sidebar">
              <div class="r">
                 <div class="clg-12">
                  <div class="sidebar-item recent-posts" style="margin-top:0px">
                    <div class="sidebar-heading">
                      <h2>Settings</h2>
                    </div>
                    <div class="content">
                      <ul>
                      
                                <li><a href="dashboard.php">
                                <h5>+ Home</h5>
                                </a></li>
                                <li><a href="add.php">
                                <h5>+ Add Event</h5>
                                </a></li>
                                <li><a href="category_option.php">
                                <h5>+ Add Category</h5>
                                </a></li>
                                
                      
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="clg-12">
                  <div class="sidebar-item tags">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


     
                      








   </body>
</html>