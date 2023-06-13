<html>
   s
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Announcements</title>
     
      <link href="css/index.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
     
   </head>
   <?php
      include ("connection.php");
      
      $announceId = $_GET["id"];
      session_start();
      $_SESSION['id' ] = $announceId ;
      
      
      $result = mysqli_query($db, "SELECT * FROM announce WHERE announceId = '$announceId'");
      
      while ($row = mysqli_fetch_assoc($result)) 
      {
      	?>	
   <body>
      <div class="cont">
         <div class="jumbotron">
            <?php  ?><br><br><br>
            <center>
               <h2>Edit An Announcement</h2>
               <div class="cls-3">
               </div>
               <div class="cls-7">
                  <form class="form-horizontal" action="edit_category1.php" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                        <label class="control-label cls-2" for="category">Category</label>
                        <div class="cls-10">
                           <select name="editCategory" value= "" class="form-control">
                              <option disabled=""><?php echo $row['category']; ?></option>
                              <?php
                                 $sql = mysqli_query($db, "SELECT * FROM ref_category");
                                 while($row1 = mysqli_fetch_assoc($sql))
                                 {
                                 ?>
                              <option><?php echo $row1['category']; ?></option>
                              <?php
                                 }
                                 ?>   
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label cls-2" for="Receiver">Receiver</label>
                        <div class="cls-10">
                           <select name="editReceiver" value= "" class="form-control">
                              <option disabled=""><?php echo $row['category']; ?></option>
                              <?php
                                 $sql = mysqli_query($db, "SELECT * FROM ref_position WHERE position_ID > 3");
                                 while($row2 = mysqli_fetch_assoc($sql))
                                 {
                                 ?>
                              <option><?php echo $row2['position_Name']; ?></option>
                              <?php
                                 }
                                 ?>   
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label cls-2" for="Statement">Statement</label>
                        <div class="cls-10"> 
                           <textarea name="editStatement" value= "" class="form-control"><?php echo $row['announcement'];?></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="cls-offset-2 cls-10">
                           <input type="submit" class="btn btn-default" value="Submmit">
                        </div>
                     </div>
                  </form>
               </div>
            </center>
         </div>
      </div>
      </div>
   </body>
   <?php
      }
      ?>
   </div>
   
</html>