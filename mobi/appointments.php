<?php
session_start();
include("../db.php");
@$position = $_SESSION['position'];
@$id = $_SESSION['id'] ? $_SESSION['id'] : '0';
if(isset($_POST['delete'])){
    if($_POST['status'] == 'Pending'){
        $value = $_POST['id'];
        $sql = "UPDATE appointments SET status='Deleted' WHERE id=$value" or die("Errors");
        if ($db->query($sql) === TRUE)
        {
            echo("<script>alert('Appointment updated succesfully!');window.location = 'appointmentBackup.php';</script>");
        }
    }else{

        echo("<script>alert('You cant update this appointment!');window.location = 'appointmentBackup.php';</script>");
    }


}
?>
<html>

<head>

<style>.ag-format-container {
  width: 1142px;
  margin: 0 auto;
}


body {
  background-color: #f5f5f5;
}
.ag-courses_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;

}
.ag-courses_item {
  -ms-flex-preferred-size: calc(33.33333% - 30px);
  flex-basis: calc(33.33333% - 30px);

  margin: 0 15px 30px;

  overflow: hidden;

  border-radius: 28px;
}
.ag-courses-item_link {
  display: block;
  padding: 30px 20px;
  background-color: #ffffff;

  overflow: hidden;

  position: relative;
}
.ag-courses-item_link:hover,
.ag-courses-item_link:hover .ag-courses-item_date {
  text-decoration: none;
  color: #232323;
}
.ag-courses-item_link:hover .ag-courses-item_bg {
  -webkit-transform: scale(10);
  -ms-transform: scale(10);
   transform: scale(10);
}
.ag-courses-item_title {
  min-height: 87px;
  margin: 0 0 25px;

  overflow: hidden;

  font-weight: bold;
  font-size: 30px;
  color: #232323;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date-box {
  font-size: 18px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date {
  font-weight: bold;
  color: lightgreen;

  -webkit-transition: color .5s ease;
  -o-transition: color .5s ease;
  transition: color .5s ease
}
.ag-courses-item_bg {
  height: 128px;
  width: 128px;
  background-color: lightgreen;

  z-index: 1;
  position: absolute;
  top: -75px;
  right: -75px;

  border-radius: 50%;

  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
}
.ag-courses_item:nth-child(2n) .ag-courses-item_bg {
  background-color: #3ecd5e;
}
.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
  background-color: #e44002;
}
.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
  background-color: #952aff;
}
.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
  background-color: #cd3e94;
}
.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
  background-color: #4c49ea;
}



@media only screen and (max-width: 979px) {
  .ag-courses_item {
    -ms-flex-preferred-size: calc(50% - 30px);
    flex-basis: calc(50% - 30px);
  }
  .ag-courses-item_title {
    font-size: 24px;
  }
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

}
@media only screen and (max-width: 639px) {
  .ag-courses_item {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
  }
  .ag-courses-item_title {
    min-height: 72px;
    line-height: 1;

    font-size: 24px;
  }
  .ag-courses-item_link {
    padding: 22px 40px;
  }
  .ag-courses-item_date-box {
    font-size: 16px;
  }
}

</style>
</head>
<body>

<h1> Appointments </h1>
<div class="ag-format-container">
  <div class="ag-courses_box">
    

   

    <?php

                        $sql_ret = "SELECT * FROM appointments where requester=$id order by id desc";
                        $result_ret = mysqli_query($db, $sql_ret);
                        $resultCheck_ret = mysqli_num_rows($result_ret);

                        if($resultCheck_ret > 0){
                            while($row_ret = mysqli_fetch_assoc($result_ret)){
                                ?>

                                 <div class="ag-courses_item">
      <div target='content' class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
         <?php echo $row_ret['purpose']?>
        </div>

        <div class="ag-courses-item_date-box">
        <span style="<?php if($row_ret['status'] == "Rejected" || $row_ret['status'] == "Deleted")
                                        {
                                            echo("color:red");
                                            $app = "Rejected";

                                        }elseif($row_ret['status'] == "Approved"){
                                            echo("color:green");
                                            $app = "Approved";
                                        }else{
                                            echo("color:gray");
                                            $app = "Pending";
                                        }

                                        ?>">Status: </span>
          <span class="ag-courses-item_date">
            <?php echo $app ?>
          </span>
          <br>
          <span style="<?php if($row_ret['status'] == "Rejected" || $row_ret['status'] == "Deleted")
                                        {
                                            echo("color:red");

                                        }elseif($row_ret['status'] == "Approved"){
                                            echo("color:green");
                                        }else{
                                            echo("color:gray");
                                        }

                                        ?>">Time: </span>
          <span class="ag-courses-item_date">
            <?php echo $row_ret['app_date'].' '.$row_ret['time']?>
          </span>
          <br>
          <span style="<?php if($row_ret['status'] == "Rejected" || $row_ret['status'] == "Deleted")
                                        {
                                            echo("color:red");

                                        }elseif($row_ret['status'] == "Approved"){
                                            echo("color:green");
                                        }else{
                                            echo("color:gray");
                                        }

                                        ?>">Remarks: </span>
          <span class="ag-courses-item_date">
            <?php echo $row_ret['purp']?>
          </span>

        </div>
      </div>
    </div>
                              

                                <?php
                            }
                        }else{
                        
                        ?><h1>Sorry you dont have any issued appointments<h1>

                        <?php } ?>
  </div>
</div>
</body>

</html>