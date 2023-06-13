<!DOCTYPE>
<html>
  <head>
    <title>Brgy San Isidro</title>
    <style> .info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }
      
    
    </style>
    <link rel="stylesheet" href="style.css">
         <link href="Communication/css/index.css" rel="stylesheet">
      <link href="Communication/css/positioning.css" rel="stylesheet">
      <link href="Communication/css/style.css" rel="stylesheet">
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

                      session_start();
                      include('db.php');

                      if (isset($_SESSION['id'])) {
                      echo ' <li class="navtopli" style=""><a href="home.php" class="navlabel" style="" target="_Parent">Dashboard</a></li>
             <li class="navtopli" style=""><a href = "accountLogout.php" target="_Parent" class="navlabel" style="">Log Out</a></li>';
 	            }
 	            else{

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


      <section class="sanisid_imgs" style="margin-top:150px">
      <div class="cont">
        <div class="r">
          <div class="clg-8">
            <div class="all-sanisid_imgs">
              <div class="r">















                










                  <?php
                 $id = $_GET['id'];
                 if(ctype_alpha($id)){
                 $builder = "Where category = '$id'";
                 $limitbuilder = '';
                 }elseif(is_numeric($id)){
                 $builder = "Where announceId = $id";
                 $limitbuilder = 'Limit 3';
                 }else{
                 $builder = "";
                 $limitbuilder = "";
                 }

              
                          
                            $res = mysqli_query($db, "SELECT * FROM announce $builder ORDER BY date DESC  $limitbuilder");
                           while ($r = mysqli_fetch_assoc($res))
                           {
               ?>

               <div class="clg-12">
                  <div class="sanisids-post">
                    <div class="sanisids-thumb">
                      <img style="image-rendering: pixelated;width:730;height:400px;background: url(Communication/<?php echo "image/" . rawurlencode(basename($r["image"]));?>); background-size: cover;
    background-repeat: round;)"> 
                    </div>
                    <div class="down-content">
                      <span><?php echo $r["category"]; ?></span>
                      <h4><?php echo $r["title"]; ?></h4></a>
                      <ul class="isidro-info">
                        <li><a href="#"><?php echo $r["receiver"];?></a></li>
                        <li><a href="#"><?php echo date("M jS, Y", strtotime($r["date"]));?></a></li>
                      </ul>
                      <p><?php echo $r["announcement"]; ?></p>
                      <div class="isidro-options">
                        <div class="r">
                          <div class="c-6">
                            <ul class="isidro-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li>When:</li>
                              <li><?php echo $r["when"]; ?></li>
                            </ul>
                          </div>
                          <div class="c-6">
                            <ul class="isidro-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Where:</a>,</li>
                              <li><a href="#"> <?php echo $r["where"]; ?></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>



            




            <?php
               }
               
               
               ?>






               </div>
               </div>
               </div>
















               
























              



                <!--Side item -->
                <div class="clg-4"><div class="sidebar">
              <div class="r">
                <div class="clg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="clg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                      <?php
                       $res = mysqli_query($db, "SELECT * FROM announce ORDER BY announceid Desc LIMIT 3");
                           while ($r = mysqli_fetch_assoc($res))
                           { ?>
                                <li><a href='details.php?id=<?php echo $r["announceId"]?>' target="_Parent">
                                <h5><?php echo $r['title']; ?></h5>
                                <span><?php echo $r['date']; ?></span></a></li>
                                <?php
                            }
                      ?>
                        
                       
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="clg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>

                       <li><a href='details.php?id='>All</a></li>
                      <?php
                     $sql = mysqli_query($db, "SELECT * FROM ref_category");
                     while($r = mysqli_fetch_assoc($sql))
                     {
                     ?>
                     <li><a href='details.php?id=<?php echo $r['category']; ?>'><?php echo $r['category']; ?></a></li>
                
                  <?php
                     }
                     ?>   
                      
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
</html>