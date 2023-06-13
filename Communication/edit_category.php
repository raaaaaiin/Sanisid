<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Announcements</title>
      <link rel="stylesheet" type="text/css" href=""css/index.css>
      
     
      <link href="css/index.css" rel="stylesheet">

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
      
   <body>
      <h2 style="float: right">
      <div class="btn-group">
         <a href="index.php" class="btn btn-success btn-lg">HOME</a>
         <a href="category_option.php" class="btn btn-success btn-lg">Category Option</a>
         <a href="add.php" class="btn btn-success btn-lg">+ Add Announcement</a>
      </div>
      <br>
      <div class="cont">
         <div class="jumbotron">
            <h2>Edit A Category</h2>
            <?php
               include("connection.php");
                $id = $_GET['id'];
               
               
                $sql = mysqli_query($db, "SELECT * FROM ref_category WHERE id = '$id'");
                $row = mysqli_fetch_assoc($sql);
               
               
               
                session_start();
                $_SESSION['id'] = $id;
               
               ?>
         </div>
      </div>
   </body>
   <div class="cls-3"></div>
   <div class="cls-6">
      <form class="form-horizontal" action="edit_category1.php" method="POST" enctype="multipart/form-data">
         <div class="form-group">
            <label class="control-label cls-4" for="email">Category</label>
            <div class="cls-10">
               <input type="text" name="editCategory" class="form-control"  value= "<?php echo $row['category']; ?>">
            </div>
         </div>
         <div class="form-group">
            <div class="cls-offset-2 cls-10">
               <input type="submit" class="btn btn-default" value="SUBMIT">
            </div>
         </div>
      </form>
   </div>
   <div class="cls-3"></div>