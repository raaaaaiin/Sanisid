<?php 
session_start(); 
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Announcements</title>

    <link rel="stylesheet" type="text/css" href=""css/index.css>

    <link href="css/index.css" rel="stylesheet">
    <link href="css/positioning.css" rel="stylesheet">


</head>

<body >
    <div class="cont">
        <div class="jumbotron">        
            <div class="address-bar"><h1><font color="green">Announcements</font></h1>
                <h3><font color="green">Let you see our important announcements</font></h3></div>

<?php

            $result = mysqli_query($db, "SELECT * FROM announce");
            while ($r = mysqli_fetch_assoc($result))
            {
?>
                <div class="r">
                    <div class="box">
                        <div class="clg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                    
                    <strong><?php echo $r['category'];?></strong>
                    </h2>
                    <hr>
                    <?php echo '<img class="img-responsive img-border img-left thumbnail" width="150" height="150" alt="Unable to View" src=' . $r["image"] . '>'?><hr class="visible-xs">
                    <b><p><span class="glyphicon glyphicon-time"></span><?php echo $r['date']; ?></p></b>
                    <p><?php echo $r['announcement']; ?></p>

                </div>
            </div>
        </div>
<?php

            }

    ?>



    
 

     </div>
</div>



</body>

</html>