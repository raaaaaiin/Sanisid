<htmk>
<body>
Appointments are:
<hr>
 <?php
 include("../db.php");
              $sql_ret = "SELECT * FROM appointments";
              $result_ret = mysqli_query($db, $sql_ret);
              $resultCheck_ret = mysqli_num_rows($result_ret);

             if($resultCheck_ret > 0){
             while($row_ret = mysqli_fetch_assoc($result_ret)){
              ?>
              <span>Name: <?php echo $row_ret['Name']?></span><br>
              <span>Gender: <?php echo $row_ret['gender']?></span><br>
              <span>Date of Birth: <?php echo $row_ret['dob']?></span><br>
              <span>Appointment Date: <?php echo $row_ret['app_date']?></span><br>
              <span>Time: <?php echo $row_ret['time']?></span><br>
              <span>Purpose: <?php echo $row_ret['purpose']?></span><br>
              <img style="
                object-fit: contain;
  width: 250px;
  height: 250px;
              "src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row_ret['proof']); ?>" /> 
              <hr>
                <?php
               }
               }
               ?>
               
</body>
</html>