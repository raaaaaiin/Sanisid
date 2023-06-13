<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Category Option</title>
      <link href="css/index.css" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
  
<style>
   .cont {
    width: 100%;
    height: 100%;
    background: #F5F5F5;
    padding: 10px;
    font-family: sans-serif;
   }
   .jumbotron {
    background: #FFFFFF;
    color: #303030;
    padding: 20px;
    border-radius: 10px;
   }
   h2 {
    font-size: 25px;
    color: #009688;
    margin-bottom: 30px;
   }
   table {
    width: 100%;
    margin-top: 20px;
   }
   th {
    background: #009688;
    color: #FFFFFF;
    font-size: 16px;
   }
   td {
    background: #FFFFFF;
    color: #303030;
    font-size: 14px;
    padding: 10px;
   }
   .cls-3 {
    width: 150px;
    text-align: center;
   }
   .btn-group > a {
    font-size: 12px;
    color: #FFFFFF;
    padding: 5px 10px;
    background: #009688;
    border-radius: 3px;
    text-decoration: none;
   }
   .btn-group > a:hover {
    background: #00796B;
    color: #FFFFFF;
   }
</style>

   <div class="cont">
      <div class="jumbotron">
         <center>
            <h2>Category</h2>
             <form class="form-inline" action="add_category.php" method="POST">
                     <label>Category Name: </label><input type="text" name="category" required> 
                     <input type="submit" value="ADD" <button class="btn btn-success"></button>
                  </form>
               <table class="table table-bordered" border="2px" width="20%">
                  <thead>
                     <tr>
                        <th class="text-center">CATEGORY NAME</th>
                        <th class="text-center cls-3">ACTION</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        include("connection.php");
                        
                            $res = mysqli_query($db, "SELECT * FROM ref_category");
                            while($row = mysqli_fetch_assoc($res))
                            {
                                if ($row['category'] != null)
                                {
                        ?>
                     <tr>
                        <td><?php echo $row['category'] ?></td>
                        <td class="text-center">
                           <div class="btn-group">
                              <a href="edit_category.php?id=<?php echo $row['id']; ?>" class="btn btn-success">EDIT</a>
                              <a href="delete_category1.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">DELETE</a>
                           </div>
                        </td>
                     </tr>
                     <?php } }?>
                  </tbody>
               </table>
         </center>
      </div>
   </div>
</html>