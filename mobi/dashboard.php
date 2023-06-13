<!DOCTYPE html>
<html lang="en">
   <?php
      include("connection.php");
      session_start();
      
if(!isset($_SESSION['id'])) {
    // Redirect to index.php
    header("Location: index.php");
    exit();
  }
      if (isset($_SESSION['receiver'])) {
          $receiver  = $_SESSION['receiver'];
      }
      ?>
   <head>
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Announcements</title>

      <style>
   body {
      font-family: 'Roboto', sans-serif;
      color: #1c1e21;
      background-color: #f0f2f5;
   }
   .cont {
      width: 100%;
   }
   .sanisid_imgs {
   }
   .info {
      padding: 15px;
      font-size: 14px;
      margin-bottom: 20px;
      border-radius: 4px;
   }
   .r {
      display: flex;
      flex-wrap: wrap;
   }
   .clg-8 {
      flex: 0 0 100%;
      max-width: 100%;
   }
   .clg-12 {
      flex: 0 0 100%;
      max-width: 100%;
   }
   .sanisids-post {
      background-color: #fff;
      border: 1px solid #dddfe2;
      border-radius: 4px;
      margin-bottom: 15px;
      overflow: hidden;
   }
   .sanisids-thumb img {
   width: 100%;
   height: 300px;
   object-fit: cover;
}
   .down-content {
      padding: 15px;
   }
   .category {
      font-size: 12px;
      font-weight: 600;
      color: #1877f2;
      text-transform: uppercase;
   }
   .title {
      font-size: 24px;
      font-weight: bold;
      margin: 10px 0;
   }
   .isidro-info {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      color: #606770;
      list-style-type: none;
      padding: 0;
      margin: 0 0 15px;
   }
   hr {
      border: 0;
      border-top: 1px solid #e5e5e5;
      margin: 15px 0;
   }
   .description {
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 15px;
   }
   .isidro-options {
      font-size: 12px;
      color: #606770;
   }
   .isidro-tags,
   .isidro-share {
      display: flex;
      align-items: center;
      list-style-type: none;
      padding: 0;
      margin: 0;
      
   }
   .isidro-tags li,
   .isidro-share li {
      margin-right: 5px;
   }
   .c-6 {
      flex: 0 0 50%;
      max-width: 50%;
   }
</style>

   </head>
   
   <body style="background-color:#f9fafe !important">
   <div style="display: flex; justify-content: space-around; align-items: center; padding: 10px; background-color: rgba(0, 0, 0, 0.05); font-family: Arial, sans-serif;">
    <a href="dashboard.php?filter=CurrentEvent" style="background-color: rgba(255, 255, 255, 0.8); color: #333; font-size: 16px; border: none; cursor: pointer; padding: 8px 16px; border-radius: 20px; transition: all 0.3s ease; text-decoration: none;"
       onmouseover="this.style.backgroundColor='#fff'; this.style.transform='scale(1.1)';"
       onmouseout="this.style.backgroundColor='rgba(255, 255, 255, 0.8)'; this.style.transform='scale(1)';">
        CurrentEvent
    </a>
    <a href="dashboard.php?filter=VisitBrgy" style="background-color: rgba(255, 255, 255, 0.8); color: #333; font-size: 16px; border: none; cursor: pointer; padding: 8px 16px; border-radius: 20px; transition: all 0.3s ease; text-decoration: none;"
       onmouseover="this.style.backgroundColor='#fff'; this.style.transform='scale(1.1)';"
       onmouseout="this.style.backgroundColor='rgba(255, 255, 255, 0.8)'; this.style.transform='scale(1)';">
        VisitBrgy
    </a>
    <a href="dashboard.php?filter=SideNews" style="background-color: rgba(255, 255, 255, 0.8); color: #333; font-size: 16px; border: none; cursor: pointer; padding: 8px 16px; border-radius: 20px; transition: all 0.3s ease; text-decoration: none;"
       onmouseover="this.style.backgroundColor='#fff'; this.style.transform='scale(1.1)';"
       onmouseout="this.style.backgroundColor='rgba(255, 255, 255, 0.8)'; this.style.transform='scale(1)';">
        SideNews
    </a>
</div>

      <section class="sanisid_imgs">
         <div class="cont">
            <style>.info {
               color: rgba(29, 33, 36, 0.76);
               background-color: #e7f3fe;
               border-left: 6px solid #2196F3;
               }</style>
            
            <br>
            <div class="r" style="
    width: 100%!important;    justify-content: center;
">
               <div class="clg-8">
                  <div class="all-sanisid_imgs">
                     <div class="r" style="flex-direction: column;">
                        <?php
                           $position = $_SESSION['position'];
                           
                           if (true) {
                            @$car = $_GET['filter'];
                              $res = mysqli_query($db, "SELECT * FROM announce where category = '$car' ORDER BY announceid Desc ");
                              $num_rows = mysqli_num_rows($res);
                              if($num_rows==0){
                                $res = mysqli_query($db, "SELECT * FROM announce ORDER BY announceid Desc ");
                              }else{
                                
                              }
                              while ($r = mysqli_fetch_assoc($res)) {
                           ?>
                        <div class="clg-12">
                           <div class="sanisids-post">
                              <div class="sanisids-thumb">
                                 <img style="background: url(../communication/image/<?php echo rawurlencode(basename($r["image"]))?>); background-size: cover;
                                    background-repeat: round;"> 
                              </div>
                              <div class="down-content">
                                 <span class="category"><?php echo $r['category']; ?></span>
                                 <h4 class="title"><?php echo $r['title']; ?></h4>
                                 <ul class="isidro-info">
                                    <li class="applicable"><?php echo $r['receiver'];?></li>
                                    <li class="date"><?php echo date("M jS, Y", strtotime($r['date']));?></li>
                                 </ul>
                                 <hr>
                                 <p class="description"><?php echo $r['announcement']; ?></p>
                                 <hr>
                                 <div class="isidro-options">
                                    <div class="r">
                                       <div class="c-6">
                                          <ul class="isidro-tags">
                                             <li><i class="fa fa-tags"></i></li>
                                             <li class="when">When:</li>
                                             <li class="when2"><?php echo $r['when']; ?></li>
                                          </ul>
                                       </div>
                                       <div class="c-6">
                                          <ul class="isidro-share" style="float:right">
                                             <li><i class="fa fa-share-alt"></i></li>
                                            
                                             <li class="where">Where:</li>
                                             <li class="where2"><?php echo $r['where']; ?></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php
                           }
                           } else {
                              $result = mysqli_query($db, "SELECT * FROM announce");
                              while($r = mysqli_fetch_assoc($result)) {
                           ?>
                        <?php
                              }
                           }
                           ?>
                     </div>
                  </div>
               </div>
               <!-- Side item -->
            </div>
         </div>
      </section>
   </body>
</html>
