<!DOCTYPE html>
<html>
  <body>
   <?php
   session_start()
   ?>
  <form action="addappointment.php" method="post" 
    enctype="multipart/form-data"> 
      <label id="first_label">Name</label>
      <input type="text" name="app_name" placeholder="Input your whole name" value="<?php echo $_SESSION['fullname']; ?>"/>
       <label id="second_label">Gender</label>
      <input type="text" name="app_gender"  placeholder="Male Female"/>
      <label id="second_label">Date of Birth</label>
      <input type="text" name="app_dob"  placeholder="Birthday"/>
      <label id="second_label">Date</label>
      <input type="text" name="app_date" placeholder="Date"/>
      <label id="second_label">Time</label>
      <input type="Datepicker" name="app_time" placeholder="Time"/>
      <label id="second_label">Purpose</label>
      <select name="app_purpose" id="second_label">

      <?php
      include("../db.php");
                                          $sql_ret = "SELECT clearance_form, purpose FROM finance_clearance_list
                                                       LEFT JOIN finance_clearance_set ON finance_clearance_list.clearance_id = finance_clearance_set.clearance_id";
                                          $result_ret = mysqli_query($db, $sql_ret);
                                          $resultCheck_ret = mysqli_num_rows($result_ret);

                                          if($resultCheck_ret > 0){
                                            while($row_ret = mysqli_fetch_assoc($result_ret)){
                                              ?>
                                              <option name="forms" value="<?php echo $row_ret['clearance_form'];?>"><?php echo $row_ret['clearance_form']." ".""." ".$row_ret['purpose'];?></option>
                                              <?php
                                            }
                                          }
                                          ?>
                                          <option name="forms" value="other">Other</option>
      </select>

      <button type="submit">Submit</button>

      </form>

  </body>
</html>