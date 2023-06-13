
<html>
<?php
if(isset($_POST['user_id'])){
    $user_id = $_POST['user_id'];
}else{
    $user_id ="";
}


$db_res_id = "No record";
$db_res_fname = "No record";
$db_res_mname = "No record";
$db_res_lname = "No record";
$db_res_bdate = "No record";
$db_res_civilstatus = "No record";
$db_res_gender = "No record";
$db_res_height = "No record";
$db_res_weight = "No record";
$db_res_religion = "No record";
$db_res_country = "No record";
$db_res_occust = "No record";
$db_res_occu = "No record";
$db_suffix_id = "No record";
$db_res_cnum = "No record";

$M_id = "No record";
$M_fName = "No record";
$M_mName = "No record";
$M_lName = "No record";
$M_Bday = "No record";
$M_res_religion = "No record";
$M_pic = "No record";
$M_religion = "No record";
$M_contact = "No record";

$P_id = "No record";
$P_fName = "No record";
$P_mName = "No record";
$P_lName = "No record";
$P_Bday = "No record";
$P_res_religion = "No record";
$P_pic = "No record";
$P_religion = "No record";
$P_contact = "No record";

?>
    <?php
include('connections.php');
    
   $user_id = $_REQUEST["id"];

    $db_mother_ID= $db_father_ID="";
?>
    
 <?php
include("connections.php");
 
$largestNumber= $rid= "";
                           $rowSQL = mysqli_query($db, "SELECT MAX( res_id ) AS max FROM `resident_detail`;" );
                                  $row = mysqli_fetch_array( $rowSQL );
                                  $largestNumber = $row['max'];
                                    $rid= $largestNumber+1;
                              
                                 

                                  ?>

    
<?php
include("connections.php");
$largest_death= $did= "";
                           $rowSQL = mysqli_query($db, "SELECT MAX( death_ID ) AS max FROM `resident_death`;" );
                                  $row = mysqli_fetch_array( $rowSQL );
                                  $largest_death= $row['max'];
                                    $did= $largest_death+1;
                                 

                                  ?>
    

<?php
    
    $res_idIN=$db_res_resu=$db_res_resu1=$db_res_resu2= $db_fam_tel=$db_fam_gender=  $db_fam_occu=$db_fam_gen=  $db_fam_occ= $db_res_resMo1= $db_res_resMo2=$db_res_resMo3=$db_fam_genMo=$db_fam_occMo=$db_fam_telMo= $db_fam_genderMo =$db_fam_occuMo= $res_idFa=$db_fam_genderFa=$db_fam_occuFa=$db_fam_telFa=$res_idMo="";
     if ($_SERVER["REQUEST_METHOD"]== "POST")
            $res_idIN=$_POST["ser"];
     
    
    if ($_SERVER["REQUEST_METHOD"]== "POST")
            $res_idFa=$_POST["fa"]; 
    ?>
    
   
    <?php
  
        
      $view_query = mysqli_query($db, "SELECT * FROM resident_detail where res_ID ='$res_idIN' ");
  while($row = mysqli_fetch_assoc($view_query)){
   $db_res_resu= $row["res_fName"];
      $db_res_resu1= $row["res_mName"];
       $db_res_resu2= $row["res_lName"];
       $db_fam_gen= $row["gender_ID"];
      $db_fam_occ= $row["occupation_ID"];

      
  }


    ?>


    <?php
    
   
    
      $view_query = mysqli_query($db, "SELECT * FROM resident_detail where res_ID ='$res_idFa' ");
  while($row = mysqli_fetch_assoc($view_query)){
   $db_res_resFa1= $row["res_fName"];
      $db_res_resFa2= $row["res_mName"];
       $db_res_resFa3= $row["res_lName"];
       $db_fam_genFa= $row["gender_ID"];
      $db_fam_occFa= $row["occupation_ID"];   
      
  }
    ?>
    
    
       <?php
      $view_query = mysqli_query($db, "SELECT * FROM ref_gender where gender_ID ='$db_fam_gen' ");
  while($row = mysqli_fetch_assoc($view_query)){
   $db_fam_gender= $row["gender_Name"];
     
  }
    ?>
    
 
     
    
      <?php
      $view_query = mysqli_query($db, "SELECT * FROM ref_occupation where occupation_ID ='$db_fam_occ' ");
  while($row = mysqli_fetch_assoc($view_query)){
   $db_fam_occu= $row["occupation_Name"];
     
  }
    ?>
    
  
   
    
    
    
    
    <?php
      $view_query = mysqli_query($db, "SELECT * FROM resident_contact where res_ID ='$res_idFa' ");
  while($row = mysqli_fetch_assoc($view_query)){
   $db_fam_telFa= $row["contact_telnum"];
     
      
      
  }
    ?>
    
      
    <?php
      $view_query = mysqli_query($db, "SELECT * FROM resident_contact where res_ID ='$res_idIN' ");
  while($row = mysqli_fetch_assoc($view_query)){
   $db_fam_tel= $row["contact_telnum"];
     
      
      
  }
    ?>
    
    
    
    <?php

    if ($_SERVER["REQUEST_METHOD"]== "POST"){
$cause=$_POST["cause"];
        }
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
$ddate=$_POST["ddate"];
        }
  
    ?>
    
    

    
   
<head>


    
    
    <style> .info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }
        
        
  input.hidden {
    position:static;
    left: -9999px;
}
        
        

#profile-image1 {
    cursor: pointer;
  
     width: 175px;
    height: 175px;
	border:2px solid #03b1ce ;}
	.tital{ font-size:16px; font-weight:500;}
	 .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}	
    </style>
</head>
    
    
    
    <body style="font-family: calibri; font-size: 18px;padding:0px;">
        <!-- ##################QUERY FOR RETRIEVING RESIDENT DETAILS###################### --> 
       
<?php
$today = date('Y-m-d');
  $view_query = mysqli_query($db, "SELECT * FROM resident_detail where res_ID=' $user_id'");

  while($row = mysqli_fetch_assoc($view_query)){
    
    $user_id = $row["res_ID"];

    $db_res_id = $row["res_ID"];
    $db_res_fname = $row["res_fName"];
    $db_res_mname = $row["res_mName"];
    $db_res_lname = $row["res_lName"];
    $db_res_bdate = $row["res_Bday"];
    $db_res_civilstatus = $row["marital_ID"];
    $db_res_gender = $row["gender_ID"];
    $db_res_height = $row["res_Height"];
    $db_res_weight = $row["res_Weight"];
    $db_res_religion = $row["religion_ID"];
    $db_res_country = $row["country_ID"];
    $db_res_occust = $row["occuStat_ID"];
    $db_res_occu = $row["occupation_ID"];
      $db_suffix_id = $row["suffix_ID"];
      
    
$diff = date_diff(date_create($db_res_bdate), date_create($today));
    
    $age= $diff->format('%y');
     }
              
        
?>






        <?php
        include("connections.php");

        $M_id = $M_fName = $M_mName = $M_lName = "";
        $getmom = mysqli_query($db, "SELECT * FROM resident_family WHERE res_ID='$user_id' and relType_ID = '4'");
        while ($row_edit = mysqli_fetch_assoc($getmom)){
            $M_id = $row_edit["family_res_ID"];
        }

        $get_record = mysqli_query($db, "SELECT * FROM resident_detail WHERE res_ID='$M_id'");
        while ($row_edit = mysqli_fetch_assoc($get_record)){



            $M_id = $row_edit["res_ID"];
            $M_fName = $row_edit["res_fName"];
            $M_mName = $row_edit["res_mName"];
            $M_lName = $row_edit["res_lName"];
            $M_Bday = $row_edit['res_Bday'];
            $M_res_religion = $row_edit['religion_ID'];
            $M_pic = $row_edit['res_Img'];
        }
        ?>


        <?php
        $view_query = mysqli_query($db, "SELECT * FROM ref_religion where religion_ID='$M_res_religion'");
        while($row = mysqli_fetch_assoc($view_query)){
            $M_religion = $row["religion_Name"];
        }
        ?>


        <?php
        include("connections.php");
        $M_contact ="";
        $get_contact = mysqli_query($db, "SELECT * FROM resident_contact WHERE res_ID='$M_id' ");
        while ($row_edit = mysqli_fetch_assoc($get_contact)){

            $M_contact = $row_edit["contact_telnum"];


        }


        $P_id = $P_fName = $P_mName = $P_lName = "";
        $getmom = mysqli_query($db, "SELECT * FROM resident_family WHERE res_ID='$user_id' and relType_ID = '3'");
        while ($row_edit = mysqli_fetch_assoc($getmom)){
            $P_id = $row_edit["family_res_ID"];
        }
        $get_record = mysqli_query($db, "SELECT * FROM resident_detail WHERE res_ID='$P_id'");
        while ($row_edit = mysqli_fetch_assoc($get_record)){



            $P_id = $row_edit["res_ID"];
            $P_fName = $row_edit["res_fName"];
            $P_mName = $row_edit["res_mName"];
            $P_lName = $row_edit["res_lName"];
            $P_Bday = $row_edit['res_Bday'];
            $P_res_religion = $row_edit['religion_ID'];
            $P_pic = $row_edit['res_Img'];
        }
        ?>


        <?php
        $view_query = mysqli_query($db, "SELECT * FROM ref_religion where religion_ID=' $P_res_religion '");
        while($row = mysqli_fetch_assoc($view_query)){
            $P_religion = $row["religion_Name"];
        }
        ?>


        <?php
        include("connections.php");
        $P_contact ="";
        $get_contact = mysqli_query($db, "SELECT * FROM resident_contact WHERE res_ID='$P_id'");
        while ($row_edit = mysqli_fetch_assoc($get_contact)){

            $P_contact = $row_edit["contact_telnum"];


        }



        ?>















        <?php
        $view_query = mysqli_query($db, "SELECT * FROM ref_suffixname where suffix_ID ='$db_suffix_id' ");
        while($row = mysqli_fetch_assoc($view_query)){
            $db_suffix_name= $row["suffix"];

        }
        ?>

        <?php
  $view_query = mysqli_query($db, "SELECT * FROM resident_family where res_ID=' $user_id' && relType_ID='4'");

  while($row = mysqli_fetch_assoc($view_query)){
    
   

    $db_mother_ID = $row["family_res_ID"];
   
     }
              
        
?>
        
        <?php
       
  $view_query = mysqli_query($db, "SELECT * FROM resident_detail where res_ID='$db_mother_ID'");

         $db_mother_fName ="No Data Recorded";
        $db_mother_mName =  $db_mother_lName = "";
  while($row = mysqli_fetch_assoc($view_query)){
    
   

    $db_mother_fName = $row["res_fName"];
   $db_mother_mName = $row["res_mName"];
      $db_mother_lName = $row["res_lName"];
     }
              
        
?>
        
        
        <?php
  $view_query = mysqli_query($db, "SELECT * FROM resident_family where res_ID=' $user_id' && relType_ID='3'");

  while($row = mysqli_fetch_assoc($view_query)){
    
   

    $db_father_ID = $row["family_res_ID"];
   
     }
              
        
?>
        
        <?php
       
  $view_query = mysqli_query($db, "SELECT * FROM resident_detail where res_ID='$db_father_ID'");

         $db_father_fName ="No Data Recorded";
         $db_father_mName =  $db_father_lName = "";
  while($row = mysqli_fetch_assoc($view_query)){
    
   

    $db_father_fName = $row["res_fName"];
   $db_father_mName = $row["res_mName"];
      $db_father_lName = $row["res_lName"];
     }
              
        
?>
        
        
         
<?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_marital_status where marital_ID='$db_res_civilstatus '");
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_mstat = $row["marital_Name"];
 }
?>
        
             
<?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_gender where gender_ID=' $db_res_gender '");
            while($row = mysqli_fetch_assoc($view_query)){
                    $db_res_gen = $row["gender_Name"];
    }
?>
         <!-- ##################QUERY FOR INITIALIATION & RETRIEVING RELIGION NAME ###################### -->
        
        <?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_religion where religion_ID=' $db_res_religion '");
            while($row = mysqli_fetch_assoc($view_query)){
                    $db_res_rel = $row["religion_Name"];
    }
?>
         <!-- ##################QUERY FOR INITIALIATION & RETRIEVING CITIZENSHIP###################### -->
              
        <?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_country where country_ID=' $db_res_country '");
            while($row = mysqli_fetch_assoc($view_query)){
                    $db_res_citi = $row["country_citizenship"];
    }
?>
           <!-- ##################QUERY FOR INITIALIATION & RETRIEVING OCCUPATION STATUS###################### -->
        
      <?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_occupation_status where occuStat_ID='$db_res_occust '");
   $db_res_ocst="Not Available/Unemployed";
        while($row = mysqli_fetch_assoc($view_query)){
    $db_res_ocst = $row["occuStat_Name"];
 }
?>
           <!-- ##################QUERY FOR INITIALIATION & RETRIEVING OCCUPATION NAME###################### -->
        
            <?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_occupation where occupation_ID='$db_res_occu '");
        $db_res_occ ="---";
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_occ = $row["occupation_Name"];
 }
?>
      
           <!-- ##################QUERY FOR  RETRIEVING CONTACT NUMBER###################### -->
        
<?php
  $view_query = mysqli_query($db, "SELECT * FROM resident_contact where res_ID='$user_id '");

  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_cnum = $row["contact_telnum"];
     }
    
?>
           <!-- ##################QUERY FOR RETRIEVING RESIDENT ADDRESS###################### -->
        
        <?php
  $view_query = mysqli_query($db, "SELECT * FROM resident_address where res_ID='$user_id '");

  while($row = mysqli_fetch_assoc($view_query)){
    

$db_res_unit = $row["address_Unit_Room_Floor_num"];
      $db_res_build = $row["address_BuildingName"];
      $db_res_lot = $row["address_Lot_No"];
      $db_res_block = $row["address_Block_No"];
      $db_res_phase = $row["address_Phase_No"];
        $db_res_house = $row["address_House_No"];
      $db_res_street = $row["address_Street_Name"];
      $db_res_sub = $row["address_Subdivision"];
      
      $db_res_purok = $row["purok_ID"];
     }
                    
?>
   
           <!-- ##################QUERY FOR INITIALIATION & RETRIEVING PUROK NAME###################### -->
        
            <?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_purok where purok_ID=' $db_res_purok '");
            while($row = mysqli_fetch_assoc($view_query)){
                    $db_res_pur = $row["purok_Name"];
    }
?>
        <?php

        $view_query = mysqli_query($db, "SELECT * FROM resident_death where res_ID='$user_id '");

        while($row = mysqli_fetch_assoc($view_query)){


            $death = $row["death_Date"];
            $cause = $row["death_Cost"];

        }
        ?>

         <?php
         

        if (@$_POST["cause"] && @$ddate=$_POST["ddate"]) {
        

            $did = $_POST["user_id"];
           
            if ($_POST["cause"] == "Mistake") {
    $query = "DELETE FROM resident_death WHERE res_ID = '$did'";
    mysqli_query($db, $query);
     echo "<script =type'text/javascript'>alert('User death details has been reset!')</script>";
} else {
    $query = "INSERT INTO resident_death (res_ID, death_Cost, death_Date) VALUES ('$did', '$cause', '$ddate') ON DUPLICATE KEY UPDATE death_Cost = VALUES(death_Cost), death_Date = VALUES(death_Date)";
    mysqli_query($db, $query);
     echo "<script =type'text/javascript'>alert('submitted successfully!')</script>";
}
           
 

        }

        ?>

        <style> .info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }
            .formdes-mb-5{margin-bottom:20px}.formdes-file-input input{opacity:0;position:absolute}.formdes-file-input label{height:100%;position:relative;border:3px dashed #c9d4e6;border-radius:6px;min-height:200px;display:flex;align-items:center;justify-content:center;padding:48px;text-align:center}.formdes-drop-file{display:block;font-weight:600;color:#07074d;font-size:20px;margin-bottom:8px}.formdes-or{font-weight:500;font-size:16px;color:#6b7280;display:block;margin-bottom:8px}body{background-color:#f9fafe!important}

        </style>
        <style type="text/css">
            @font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCwemc-NtvyoWOKrfbJJwSjZGs.woff2) format("woff2");unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCwehZQbSGeLTu6IhH00VRk2ws.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCweiyNCiQPWMSUbZmR9GEZ2io.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCwevfgCb1svrO3-Ym-Rpjvnho.woff2) format("woff2");unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCweteM9fzAXBk846EtUMhet0E.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2212,U+2215}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl03riJwOpk75o0mgXgmZkkog.woff2) format("woff2");unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl00yietQkaokDF8re1oCq3-U.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl053YFo3oYz9Qj7-_6Ux-KkY.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl02tASdhiysHpWmctaYEsrdw.woff2) format("woff2");unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl03XcDWh-RbO457623Zi1kyw.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2212,U+2215}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcrllaL-ufMOTUcv7jfgmuJg.woff2) format("woff2");unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcpsnFT_2ovhuEig4Dh-CBQw.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcnv4bDVR720piddN5sbmjzs.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcjrEaqfC9P2pvLXik1Kbr9s.woff2) format("woff2");unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcmaVI6zN22yiurzcBKxPjFE.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2212,U+2215}form{display:inline-block;margin:0;padding:0;width:100%}.form-section{display:inline-block;width:100%;margin:0 0 30px 0;padding:35px 40px;border-radius:4px;background:#fff;box-shadow:0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07)}@media screen and (max-width:480px){.form-section{padding:25px 15px;border-radius:0}}.form-section hr{float:left;display:inline;height:0;width:100%;padding:0;margin-top:20px;border:none;border-bottom:1px solid #dedede}.form-section__group{display:inline-block;margin:0;padding:0 0 25px 0;width:100%}.form-section__group .form-element.col-2{width:calc(50% - 10px)}.form-section__group .form-element.col-2:last-child{float:right}.form-section__content{float:left;display:inline;z-index:0;width:100%;margin:0;padding:0}.form__form-group{display:inline-block;width:100%}.form__form-group .col-1{width:100%}.form__form-group .col-2{width:50%}.form__form-row{display:inline-block;position:relative;width:100%;margin-bottom:10px}.form__form-row .form__form-group.col-2:nth-child(odd){padding-right:10px}.form__form-row .form__form-group.col-2:nth-child(even){padding-left:10px}.form__form-row .form-element.col-2:not(.gender):nth-child(odd){padding-right:10px}.form__form-row .form-element.col-2:nth-child(even){padding-left:10px}.form__form-row .form-element.col-2.gender{padding-left:10px}.form__form-row.col-2:nth-child(odd){padding-right:10px}.form__form-row.col-2:nth-child(even){padding-left:10px}.form__form-row--avatar{float:left;display:inline;position:relative;margin:3px 0 0 0;padding:10px;height:152px;width:152px;text-align:center;background:#f5f5f5;border-radius:3px;border:2px dotted #dddbdb;background-size:cover!important;transition:all .2s ease-in-out;box-shadow:0 0 3px 0 #d3cfcf}.form__form-row--avatar:hover{border:2px dotted #888}@media screen and (max-width:414px){.form__form-row--avatar{width:calc(50% - 10px)}}@media screen and (max-width:375px){.form__form-row--avatar{height:155px}}.form__form-row--avatar--label{top:0;padding-top:29px;width:100%;height:100%;cursor:pointer;position:relative;display:inline-block}.form__form-row--avatar--label .form__form-row--avatar--text{display:block;position:relative;top:10px;text-align:center;font-size:11px;color:#888}.form__form-row--avatar--label svg{fill:#888;height:55px;width:55px}.form__form-row--avatar-right{float:left;display:inline;margin:0;padding:0 0 0 20px;height:auto;width:calc(100% - 152px)}@media screen and (max-width:414px){.form__form-row--avatar-right{width:52%;padding-left:20px}}.form__form-row--avatar-right .form-element.col-1:first-child{margin-top:0}.form__form-row--avatar-right .form-element.col-1{margin-top:15px}.form__form-header header{float:left;display:inline;margin:0;padding:0;width:100%;border-bottom:1px solid #dedede;margin-bottom:25px}.form__form-header header h1{text-align:center;font-size:42px;margin:0;padding:0}.form__form-header header h2{float:left;display:inline;width:100%;text-align:left;font-size:22px;font-weight:600;margin:0;padding:0 0 12px 0}.form__element-spinner{position:absolute;right:10px;top:34px;background:#fff}.form__extra-options--slide{opacity:.75;padding-bottom:0}.form-section__add-extra-section .form-section__title-icon{float:left;display:none;width:40px;position:relative;top:5px}.form-section__add-extra-section .form-section__title-icon svg{height:34px;width:34px}.form-section__add-extra-section .form-element{width:calc(100% - 0px);padding:5px 0 5px 0}.form__extra-options{float:left;display:inline;position:absolute;bottom:0;left:0;height:96px;margin:-23px 0 0 0;padding:10px 0 0 0;width:100%;text-align:center;background:#fff;border-top:1px solid #e6e6e6;cursor:pointer;border-radius:0 6px}.form__extra-options svg{float:left;display:inline;height:32px;width:32px;width:100%;margin:10px 0 0 0;padding:0}.form__extra-options--label{float:left;display:inline;margin:-5px 0 0 0;padding:0;width:100%}.form-buttons{display:inline-block;width:100%;text-align:center;padding-bottom:50px}.form-element.col-1{width:100%}html[lang=it] .btn__large,html[lang=pl] .btn__large{min-width:280px}html[lang=fr] #app .btn__large{border-radius:40px}html[lang=fr] #app .btn__large.button--purple{background:#14aa6c}.btn__large{outline:0;position:relative;font-size:18px;padding:18px 20px 19px 0;display:inline-block;min-width:240px;border-radius:31px;border:none;cursor:pointer;font-weight:700}.btn__large .btn__arrow-right{position:absolute;top:11px;right:20px}.btn__large .btn__arrow-right svg{height:35px;width:35px}.btn__add-form-section{outline:0;position:relative;font-size:18px;padding:12px 0 18px 0;display:inline-block;text-align:center;width:calc(100% - 70px);width:100%;border-radius:6px;font-size:16px;border:none;cursor:pointer;color:#4c4c4c;background:#f1f1f1;transition:all .3s ease}.btn__add-form-section i{display:inline-block;position:absolute;top:15px;margin-left:-22px;height:25px;width:27px;opacity:1;transition:all .3s ease}.btn__add-form-section i svg{height:20px;width:20px}.btn__add-form-section:hover .btn__add-form-section--label{text-decoration:underline}.btn__add-form-section .btn__add-form-section--label{display:inline-block;position:relative;top:4px;left:5px;transition:all .3s ease}.btn__add-form-section:hover{background:#eaeaea}.btn__add-form-section:hover i{opacity:1}.btn__add-form-section:hover .btn__add-form-section--label{opacity:1}.button--purple{color:#fff;background:#14aa6c;transition:all .5s ease;border-radius:4px;box-shadow:0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08)}.button--purple:hover{text-decoration:underline}.button--purple:disabled{text-decoration:none;opacity:.75}.button--purple[disabled]{cursor:auto;text-decoration:none}html[lang=ar] #app:not(.app--ab) .button--purple,html[lang=cl] #app:not(.app--ab) .button--purple,html[lang=es] #app:not(.app--ab) .button--purple,html[lang=nl-BE] #app:not(.app--ab) .button--purple,html[lang=pe] #app:not(.app--ab) .button--purple,html[lang=uk] #app:not(.app--ab) .button--purple{border-radius:30px;background::#14aa6c}html[lang=ar] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=cl] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=es] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=nl-BE] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=pe] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=uk] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy){padding:0 220px}.form__buttons .form__button-text{display:block;font-size:13px;text-align:center;margin:35px 0 30px 0;padding:0 150px}@media screen and (max-width:700px){.form__buttons .form__button-text{padding:0 20px}}.form__buttons .form__button-text.form__button-text--privacy-policy{font-size:14px!important;color:#9e9e9e}.form__buttons .form__button-text.form__button-text--privacy-policy a{text-decoration:underline}.form__buttons .form__button-text.form__button-text--privacy-policy a{line-height:14px;font-size:14px!important;color:#9e9e9e}html[lang=it] body#_10337088 .form__buttons .form__button-text.form__button-text--privacy-policy{font-size:13px;color:#9e9e9e}html[lang=it] body#_10337088 .form__buttons .form__button-text.form__button-text--privacy-policy a{font-size:13px;color:#9e9e9e}*{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-tap-highlight-color:transparent}a{outline:0}html{height:100%;-webkit-text-size-adjust:100%;background:#f7f7f7}html:lang(ar) input,html:lang(ar) select{direction:RTL;unicode-bidi:bidi-override}html:lang(ar) .form__personal .form-section__title{float:right}html:lang(ar) .form-element label{display:block;direction:RTL;unicode-bidi:bidi-override}html:lang(ar) .form-select-custom--arrow{float:left;margin:-26px 0 0 15px}html:lang(ar) .form-section__header-buttons{right:auto;left:120px}html:lang(ar) .form-section__header-text{text-align:right;padding-right:40px}html:lang(ar) .form-section__header-icon{left:auto;right:27px}html:lang(ar) .form-element--desktop .form-element.date--day{margin-top:-3px}body{position:relative;min-height:100%;outline:0;margin:0;padding:0 0 6rem;color:#4c4c4c;-webkit-font-smoothing:antialiased;background:#f7f7f7;font:15px Camphor,Open Sans,Segoe UI,sans-serif}body input[type=date]{font-family:Montserrat,Arial}.center{margin:0 auto;position:relative;width:100%;max-width:1000px;padding:0 10px;z-index:0}@media screen and (max-width:480px){.center{padding:0}}.center.center__large{max-width:1100px}.page__content{float:left;display:inline;margin:0 0 40px;padding:25px;width:100%;border-radius:4px;background:#fff;-webkit-box-shadow:0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07);box-shadow:0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07)}@media screen and (max-width:480px){.page__content{border-radius:0}}a{color:#6169cf;text-decoration:none}a:hover{text-decoration:underline}.container{opacity:0;-webkit-transition:opacity 1s ease-in-out;transition:opacity 1s ease-in-out}.container.fade-entered{opacity:1}
        </style>
        <style type="text/css">
            .form-element{float:left;display:inline;position:relative;margin:0;padding:0}.form-element label{display:inline-block;padding:0 0 8px}.form-element input[type=date],.form-element input[type=password],.form-element input[type=text],.form-element select{width:100%;background-color:#fff;border:2px solid #eaeaea;border-radius:3px;padding:0 14px 1px;height:48px;font-size:16px;-webkit-appearance:none}.form-element input:-webkit-autofill{-webkit-box-shadow:0 0 0 30px #fff inset}.form-element input::-webkit-contacts-auto-fill-button{visibility:hidden;display:none!important;pointer-events:none;position:absolute;right:0}.form-element select:-moz-focusring{color:transparent;text-shadow:0 0 0 #000}.form-element input::-ms-clear,.form-element input::-ms-reveal,.form-element select::-ms-clear,.form-element select::-ms-expand{display:none}.form-element .form-select-custom{-webkit-box-shadow:none;box-shadow:none;-webkit-appearance:none;-moz-appearance:none;appearance:none;position:relative;background-color:transparent;background-image:none;padding-left:14px;border:2px solid #eaeaea;cursor:pointer;border-radius:3px;outline:0}.form-element .form-select-custom--arrow{width:0;height:0;float:right;display:inline;margin:-23px 13px 0 0;border-left:5px solid transparent;border-right:5px solid transparent;border-top:5px solid #4c4c4c}.form-element input[type=text]:disabled{cursor:not-allowed;opacity:.55;background:#f8f9fb}.form-element input:focus+.error-msg{display:inline;opacity:1;color:#ff5757}@media screen and (max-width:500px){.form-element input:focus+.error-msg{display:none}}.form-element input:focus{outline-color:#7eb7f6;border:1px solid #7eb7f6;-webkit-box-shadow:inset 0 2px 0 rgba(126,183,246,0);box-shadow:inset 0 2px 0 rgba(126,183,246,0)}.form-element select:focus{outline-color:#7eb7f6;border:2px solid rgba(137,193,255,.91);-webkit-box-shadow:inset 0 2px 0 rgba(126,183,246,.12);box-shadow:0 0 2px 1px rgba(126,183,246,.62)}button::-moz-focus-inner{border:0}

        </style>


       

            <div id="app" >
                <style>.info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }</style> <div class="info">
                    <p>&nbsp; <strong>Instruction!</strong> This page is used Check/View the information of the Resident
                        <br>&nbsp;<strong> First Step </strong> You can input a family background
                        <br>&nbsp;<strong> Second Step </strong> You can also declare a resident as dead.
                    </p></div>
                <div class="container fade fade-entered" style="display:flex">
                    <div class="main" style="margin:10px" >
                        <div class="wizard" >
                            <div class="page__header">
                                <header class="center"></header>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar__inner">
                                    <div class="progress-bar__bar">
                                        <div class="progress-bar__filler" style="width: 18%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard__inner">
                                <div class="form__personal">
                                    <div class="form-section" style="padding-top: 0px;">
                                        <div class="form-section__header">
                                            <h2 class="form-section__title">
                                                <i class="form-section__title-icon">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-person" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                                                    </svg>
                                                </i>Personal details  <?php  if(isset($cause)){
                                                    echo "<span style='color:red'>(DECEASED)</span>";}
                                                ?>
                                            </h2>
                                        </div>
                                        <hr style="margin-top: 0px; margin-bottom: 20px;">
                                        <div class="upload">
                                            <input type="file"  name="image" id="image" hidden onchange="imgonchange()">
                                        </div><br>
                                        <center>
                                            <div id="Changepic" style="background-color: #e7effc;width:300px;height:300px;" class="formdes-mb-5 formdes-file-input h-100">





                                                <label id="RemovePic" style="padding:0" for="file" class="h-100" id="bgClick" onclick="imgclick()">
                                                    <div id="change">
                                                        <?php
                                                        $query = "SELECT * FROM resident_detail where res_ID='$user_id'";
                                                        $result = mysqli_query($db, $query);
                                                        while($row = mysqli_fetch_array($result))
                                                        {
                                                            echo '<img style="width:100%;height:100%" src="../asset/requestImg/'.$row['res_Img'].'"  class="img-circle img-responsive"/>';

                                                        }
                                                        ?>
                                                    </div>
                                                </label>
                                            </div></center>
                                        <div class="form-section__content">
                                            <div class="form__form-group">
                                                <div class="form__form-row col-1">

                                                    <div class="form__form-row">

                                                        <div class="form-element col-1" name="position-lastName">
                                                            <label class="">Last name *</label>
                                                            <input type="text" tabindex="" class="data-hj-whitelist" value="<?php echo $db_res_fname ;?>&nbsp;<?php echo $db_res_mname ;?>&nbsp; <?php echo $db_res_lname ;?>" autocomplete="off" name="res_lname" placeholder="Last Name" required>
                                                          </div>
                                                    </div>
                                                </div>
                                                <div class="form__form-row col-1">
                                                    <div class="form-element col-2" name="position-meta.dateOfBirth">
                                                        <label class="">Date of birth *</label>
                                                        <input required type="date" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_bdate" id="res_bdate" value="<?php echo $db_res_bdate;?>">
                                                    </div>
                                                    <div class="form-element col-2" name="position-meta.phoneNumber">
                                                        <label class="">Phone number</label>
                                                        <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" value="<?php echo $db_res_cnum;?>" name="res_contactnum"  placeholder="Contact Number">
                                                    </div>
                                                </div>
                                                <div class="form__form-row col-1">
                                                    <div class="form__form-row col-1">
                                                        <div>
                                                            <div class="form-element col-2" name="position-meta.postalCode">
                                                                <label class="">Height</label>
                                                                <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" value="<?php echo  $db_res_height;?>" name="res_height" placeholder="Height">
                                                            </div>
                                                            <div class="form-element col-2" name="position-meta.city">
                                                                <label class="">Weight</label>
                                                                <input type="text" tabindex="" class="data-hj-whitelist" placeholder="Weight" value="<?php echo  $db_res_weight;?>" autocomplete="off" name="res_weight">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form__extra-options--slide" style="display: block; opacity: 1;">
                                                        <div class="form__form-row col-1">
                                                            <div class="form__form-row form-element--desktop col-1" style="margin-bottom: 0px;">
                                                                <div class="col-1">
                                                                    <div class="col-2 form-element form-element--desktop">
                                                                        <div class="form-element date--day" name="position-meta.dateOfBirthDay" style="width: 33%">
                                                                            <label class="">
                                                                                <div  >Suffix</div>
                                                                            </label>
                                                                            <select class="form-select-custom" name="res_suffix" style="width: 100%">
                                                                                <option value=""><?php echo $db_suffix_name; ?></option>
                                                                            </select>
                                                                            <i class="form-select-custom--arrow"></i>
                                                                        </div>
                                                                        <div class="form-element date--month" name="position-meta.dateOfBirthMonth" style="width: 33%">
                                                                            <label class="">
                                                                                <div  >Age</div>
                                                                            </label><br>
                                                                            <input type="text"  style="width: 100%" class="data-hj-whitelist" name="res_age" value="<?php echo $age;?>" id="res_age">


                                                                        </div>
                                                                        <div class="form-element date--year" name="position-meta.dateOfBirthYear" style="width: 33%">
                                                                            <label class="">Gender *</label><br>
                                                                            <select  style="width: 100%" required class="form-select-custom" name="res_gender">
                                                                            <option ><?php echo  $db_res_gen;?></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-element col-2" name="position-meta.placeOfBirth">
                                                                        <label class="">Religion *</label>
                                                                        <select required class="form-select-custom" name="res_religion">
                                                                            <option><?php echo $db_res_rel;?></option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form__form-row form-element--mobile col-1" style="margin-bottom: 0px;">
                                                                <div class="col-1">
                                                                    <div class="form-element col-2" name="position-meta.dateOfBirth">
                                                                        <label class="">Civil Status *</label>
                                                                        <select required class="form-select-custom" name="res_civilstatus">
                                                                            <option><?php echo $db_res_mstat;?></option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-element col-2" name="position-meta.placeOfBirth">
                                                                        <label class="">Citizenship *</label>
                                                                        <select required class="form-select-custom" name="res_citizenship">
                                                                            <option><?php echo $db_res_citi;?></option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form__form-row col-1">
                                                            <div>
                                                                <div class="form-element col-2" name="position-meta.drivingLicenses">
                                                                    <label class="">
                                                                        <div  >Occupation Status</div>
                                                                    </label>
                                                                    <select class="form-select-custom" name="res_occupationstatus">
                                                                        <option value=""><?php echo $db_res_ocst;?></option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-element col-2 gender" name="position-meta.gender">
                                                                    <label class="">
                                                                        <div  >Occupation</div>
                                                                    </label>
                                                                    <select class="form-select-custom" name="res_occupation">
                                                                        <option value=""><?php echo $db_res_occ;?></option>
                                                                    </select>
                                                                    <i class="form-select-custom--arrow"></i>
                                                                </div>













                                                            </div>
                                                        </div>

                                                        <div class="form__form-row col-1">
                                                            <div>
                                                                <div class="form-element col-1" name="position-meta.drivingLicenses">
                                                                    <label class="">
                                                                        <div  >Address</div>
                                                                    </label>
                                                                    <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" value="<?php echo $db_res_unit .", ".$db_res_build.", L".$db_res_lot.", BLK".$db_res_block.", PH".$db_res_phase.", ".$db_res_house .", ".$db_res_street." Street, ".$db_res_sub.", ".$db_res_pur." , San isidro, Antipolo Rizal";?>" placeholder="Please Specify Occupation">

                                                                </div>
















                                                            </div>
                                                        </div>








                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <iframe name="hidden-frame" style="display:none;"></iframe>
                    
                        <
                </div>
            </div>




       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        
        
</body>

</html>