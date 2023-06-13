
<?php
include('connections.php');

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
$db_res_contactnumber  = "No record";
$db_res_contactType ="No record";

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

$user_id = $_REQUEST["id"];


$user_id;

include("connections.php");

$get_record = mysqli_query($db, "SELECT * FROM resident_detail WHERE res_ID='$user_id'");
$db_res_suffixname =$db_res_occuStat= $db_res_occupation ="";

?>


<?php
include("connections.php");
$largestocc= $oid= "";
                           $rowSQL = mysqli_query($db, "SELECT MAX( occupation_ID ) AS max FROM `ref_occupation`;" );
                                  $row = mysqli_fetch_array( $rowSQL );
                                  $largestocc = $row['max'];
                                    $oid= $largestocc+1;
                              

                                  ?>

<?php

while ($row_edit = mysqli_fetch_assoc($get_record)){


  $db_res_fName = $row_edit["res_fName"];
    $db_res_mName = $row_edit["res_mName"];
    $db_res_lName = $row_edit["res_lName"];
    $db_suffix_ID = $row_edit["suffix_ID"];
    $db_gender_ID = $row_edit["gender_ID"];
    $db_res_Bday = $row_edit["res_Bday"];
    $db_marital_ID = $row_edit["marital_ID"];
     $db_country_ID = $row_edit["country_ID"];
        $db_res_Height = $row_edit["res_Height"];
    $db_res_Weight = $row_edit["res_Weight"];
    $db_religion_ID = $row_edit["religion_ID"];
    $db_occupation_ID = $row_edit["occupation_ID"];
    $db_occuStat_ID = $row_edit["occuStat_ID"];
    $db_res_image = $row_edit["res_Img"];
  }
    
?>




<?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_suffixname where suffix_ID=' $db_suffix_ID '");
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_suffixname = $row["suffix"];
 }
?>

<?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_gender where gender_ID=' $db_gender_ID '");
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_gender = $row["gender_Name"];
 }
?>

<?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_marital_status where marital_ID=' $db_marital_ID '");
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_marital = $row["marital_Name"];
 }
?>

<?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_religion where religion_ID=' $db_religion_ID '");
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_religion = $row["religion_Name"];
 }
?>

<?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_occupation_status where occuStat_ID=' $db_occuStat_ID'");
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_occuStat = $row["occuStat_Name"];
 }
?>

<?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_occupation where occupation_ID='$db_occupation_ID'");
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_occupation = $row["occupation_Name"];
 }
?>

<?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_country where country_ID=' $db_country_ID'");
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_citizenship = $row["country_citizenship"];
 }
?>


<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $isuffix=$_POST["res_suffix"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $suffix= "";
                        $rows = mysqli_query($db, "SELECT * FROM `ref_suffixname` where suffix = '$isuffix';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $suffix = $row['suffix_ID'];
             $res_suffix=$suffix;
        }
?>




<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $igender=$_POST["new_gender"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $gender= "";
                        $rows = mysqli_query($db, "SELECT gender_ID  FROM `ref_gender` where gender_Name = '$igender';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $gender = $row['gender_ID'];
             $res_gender=$gender;
        }
?>


<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $imarital=$_POST["new_marital"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $marital= "";
                        $rows = mysqli_query($db, "SELECT * FROM `ref_marital_status` where marital_Name = '$imarital';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $marital = $row['marital_ID'];
             $res_marital=$marital;
        }
?>


<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $icountry=$_POST["res_citizenship"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $countryID= "";
                        $rows = mysqli_query($db, "SELECT * FROM `ref_country` where country_citizenship = '$icountry';" );
                                  $row = mysqli_fetch_array( $rows );
                                   $countryID = $row['country_ID'];
             $res_countryID= $countryID;
        }
?>

<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $ictype=$_POST["res_contacttype"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $contacttype= "";
                        $rows = mysqli_query($db, "SELECT * FROM `ref_contact` where contactType_Name = '$ictype';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $contacttype= $row['contactType_ID'];
             $res_ctype=$contacttype;
        }
?>


<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $irel=$_POST["res_religion"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $religion= "";
                        $rows = mysqli_query($db, "SELECT * FROM `ref_religion` where religion_Name = '$irel';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $religion= $row['religion_ID'];
             $res_religion= $religion;
        }
?>


<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $ioccStat=$_POST["new_occuStat"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $occStatus= "";
                        $rows = mysqli_query($db, "SELECT * FROM `ref_occupation_status` where occuStat_Name = '$ioccStat';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $occStatus= $row['occuStat_ID'];
             $res_occuStat=  $occStatus;
        }
?>

<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $iocc=$_POST["res_occupation"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $occ= "";
                        $rows = mysqli_query($db, "SELECT * FROM `ref_occupation` where occupation_Name = '$iocc';" );
                                  $row = mysqli_fetch_array( $rows );
                                  @$occ= $row['occupation_ID'];
             $res_occu=  $occ;
        }
?>


<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $ipurok=$_POST["new_purok"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $purokname= "";
                        $rows = mysqli_query($db, "SELECT * FROM `ref_purok` where purok_Name = '$ipurok';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $purokname= $row['purok_ID'];
             $res_purokname=  $purokname;
        }
?>





<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $iaddress=$_POST["new_address"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $raddressType= "";
                        $rows = mysqli_query($db, "SELECT * FROM `ref_address` where addressType_Name = '$iaddress';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $raddressType= $row['addressType_ID'];
             $res_addressname=  $raddressType;
        }
?>

<?php
if (!empty($_FILES['image']['name'])){
 $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
}
?>


<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
 $nStatus = 'Active';
}
?>



<?php
  $view_query = mysqli_query($db, "SELECT * FROM resident_address where res_ID=' $user_id'");

  while($row = mysqli_fetch_assoc($view_query)){
    
    
 $db_res_unit = $row["address_Unit_Room_Floor_num"];
         $db_res_build = $row["address_BuildingName"];
      $db_res_lot = $row["address_Lot_No"];
      $db_res_block = $row["address_Block_No"];
    $db_res_phase = $row["address_Phase_No"];
      $db_res_house = $row["address_House_No"];
      $db_res_street = $row["address_Street_Name"];
      $db_res_sub = $row["address_Subdivision"];
    $db_res_brgy = $row["brgy_ID"];
      $db_res_purok = $row["purok_ID"];
      $db_res_addtype= $row["addressType_ID"];
   
     }
       
?>


<?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_purok where purok_ID=' $db_res_purok'");
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_brgypurok = $row["purok_Name"];
 }
?>

<?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_brgy where brgy_ID='$db_res_brgy'");
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_barangay = $row["brgy_Name"];
 }
?>

<?php
  $view_query = mysqli_query($db, "SELECT * FROM ref_address where addressType_ID=' $db_res_addtype'");
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_addressType = $row["addressType_Name"];
 }
?>







    <?php
  $view_query = mysqli_query($db, "SELECT * FROM resident_contact where res_ID=' $user_id'");

  while($row = mysqli_fetch_assoc($view_query)){
    
    

    $db_res_contactnumber = $row["contact_telnum"];
      $db_res_contactType = $row["contactType_ID"];
  
    
     }

?>
<?php
if (isset($db_res_contactType)) {
 $view_query = mysqli_query($db, "SELECT * FROM ref_contact where contactType_ID='$db_res_contactType'");
  while($row = mysqli_fetch_assoc($view_query)){
    $db_res_contype = $row["contactType_Name"];
 }
}
  
?>

<?php
$res_trabaho="";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Management Information System</title>
    <link href="css/css/mis.css" rel="stylesheet">
</head>
<body style="font-family: calibri; font-size: 18px; padding:0px;">

<style type="text/css">
    @font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCwemc-NtvyoWOKrfbJJwSjZGs.woff2) format("woff2");unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCwehZQbSGeLTu6IhH00VRk2ws.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCweiyNCiQPWMSUbZmR9GEZ2io.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCwevfgCb1svrO3-Ym-Rpjvnho.woff2) format("woff2");unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCweteM9fzAXBk846EtUMhet0E.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2212,U+2215}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl03riJwOpk75o0mgXgmZkkog.woff2) format("woff2");unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl00yietQkaokDF8re1oCq3-U.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl053YFo3oYz9Qj7-_6Ux-KkY.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl02tASdhiysHpWmctaYEsrdw.woff2) format("woff2");unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl03XcDWh-RbO457623Zi1kyw.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2212,U+2215}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcrllaL-ufMOTUcv7jfgmuJg.woff2) format("woff2");unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcpsnFT_2ovhuEig4Dh-CBQw.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcnv4bDVR720piddN5sbmjzs.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcjrEaqfC9P2pvLXik1Kbr9s.woff2) format("woff2");unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcmaVI6zN22yiurzcBKxPjFE.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2212,U+2215}form{display:inline-block;margin:0;padding:0;width:100%}.form-section{display:inline-block;width:100%;margin:0 0 30px 0;padding:35px 40px;border-radius:4px;background:#fff;box-shadow:0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07)}@media screen and (max-width:480px){.form-section{padding:25px 15px;border-radius:0}}.form-section hr{float:left;display:inline;height:0;width:100%;padding:0;margin-top:20px;border:none;border-bottom:1px solid #dedede}.form-section__group{display:inline-block;margin:0;padding:0 0 25px 0;width:100%}.form-section__group .form-element.col-2{width:calc(50% - 10px)}.form-section__group .form-element.col-2:last-child{float:right}.form-section__content{float:left;display:inline;z-index:0;width:100%;margin:0;padding:0}.form__form-group{display:inline-block;width:100%}.form__form-group .col-1{width:100%}.form__form-group .col-2{width:50%}.form__form-row{display:inline-block;position:relative;width:100%;margin-bottom:10px}.form__form-row .form__form-group.col-2:nth-child(odd){padding-right:10px}.form__form-row .form__form-group.col-2:nth-child(even){padding-left:10px}.form__form-row .form-element.col-2:not(.gender):nth-child(odd){padding-right:10px}.form__form-row .form-element.col-2:nth-child(even){padding-left:10px}.form__form-row .form-element.col-2.gender{padding-left:10px}.form__form-row.col-2:nth-child(odd){padding-right:10px}.form__form-row.col-2:nth-child(even){padding-left:10px}.form__form-row--avatar{float:left;display:inline;position:relative;margin:3px 0 0 0;padding:10px;height:152px;width:152px;text-align:center;background:#f5f5f5;border-radius:3px;border:2px dotted #dddbdb;background-size:cover!important;transition:all .2s ease-in-out;box-shadow:0 0 3px 0 #d3cfcf}.form__form-row--avatar:hover{border:2px dotted #888}@media screen and (max-width:414px){.form__form-row--avatar{width:calc(50% - 10px)}}@media screen and (max-width:375px){.form__form-row--avatar{height:155px}}.form__form-row--avatar--label{top:0;padding-top:29px;width:100%;height:100%;cursor:pointer;position:relative;display:inline-block}.form__form-row--avatar--label .form__form-row--avatar--text{display:block;position:relative;top:10px;text-align:center;font-size:11px;color:#888}.form__form-row--avatar--label svg{fill:#888;height:55px;width:55px}.form__form-row--avatar-right{float:left;display:inline;margin:0;padding:0 0 0 20px;height:auto;width:calc(100% - 152px)}@media screen and (max-width:414px){.form__form-row--avatar-right{width:52%;padding-left:20px}}.form__form-row--avatar-right .form-element.col-1:first-child{margin-top:0}.form__form-row--avatar-right .form-element.col-1{margin-top:15px}.form__form-header header{float:left;display:inline;margin:0;padding:0;width:100%;border-bottom:1px solid #dedede;margin-bottom:25px}.form__form-header header h1{text-align:center;font-size:42px;margin:0;padding:0}.form__form-header header h2{float:left;display:inline;width:100%;text-align:left;font-size:22px;font-weight:600;margin:0;padding:0 0 12px 0}.form__element-spinner{position:absolute;right:10px;top:34px;background:#fff}.form__extra-options--slide{opacity:.75;padding-bottom:0}.form-section__add-extra-section .form-section__title-icon{float:left;display:none;width:40px;position:relative;top:5px}.form-section__add-extra-section .form-section__title-icon svg{height:34px;width:34px}.form-section__add-extra-section .form-element{width:calc(100% - 0px);padding:5px 0 5px 0}.form__extra-options{float:left;display:inline;position:absolute;bottom:0;left:0;height:96px;margin:-23px 0 0 0;padding:10px 0 0 0;width:100%;text-align:center;background:#fff;border-top:1px solid #e6e6e6;cursor:pointer;border-radius:0 6px}.form__extra-options svg{float:left;display:inline;height:32px;width:32px;width:100%;margin:10px 0 0 0;padding:0}.form__extra-options--label{float:left;display:inline;margin:-5px 0 0 0;padding:0;width:100%}.form-buttons{display:inline-block;width:100%;text-align:center;padding-bottom:50px}.form-element.col-1{width:100%}html[lang=it] .btn__large,html[lang=pl] .btn__large{min-width:280px}html[lang=fr] #app .btn__large{border-radius:40px}html[lang=fr] #app .btn__large.button--purple{background:#14aa6c}.btn__large{outline:0;position:relative;font-size:18px;padding:18px 20px 19px 0;display:inline-block;min-width:240px;border-radius:31px;border:none;cursor:pointer;font-weight:700}.btn__large .btn__arrow-right{position:absolute;top:11px;right:20px}.btn__large .btn__arrow-right svg{height:35px;width:35px}.btn__add-form-section{outline:0;position:relative;font-size:18px;padding:12px 0 18px 0;display:inline-block;text-align:center;width:calc(100% - 70px);width:100%;border-radius:6px;font-size:16px;border:none;cursor:pointer;color:#4c4c4c;background:#f1f1f1;transition:all .3s ease}.btn__add-form-section i{display:inline-block;position:absolute;top:15px;margin-left:-22px;height:25px;width:27px;opacity:1;transition:all .3s ease}.btn__add-form-section i svg{height:20px;width:20px}.btn__add-form-section:hover .btn__add-form-section--label{text-decoration:underline}.btn__add-form-section .btn__add-form-section--label{display:inline-block;position:relative;top:4px;left:5px;transition:all .3s ease}.btn__add-form-section:hover{background:#eaeaea}.btn__add-form-section:hover i{opacity:1}.btn__add-form-section:hover .btn__add-form-section--label{opacity:1}.button--purple{color:#fff;background:#14aa6c;transition:all .5s ease;border-radius:4px;box-shadow:0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08)}.button--purple:hover{text-decoration:underline}.button--purple:disabled{text-decoration:none;opacity:.75}.button--purple[disabled]{cursor:auto;text-decoration:none}html[lang=ar] #app:not(.app--ab) .button--purple,html[lang=cl] #app:not(.app--ab) .button--purple,html[lang=es] #app:not(.app--ab) .button--purple,html[lang=nl-BE] #app:not(.app--ab) .button--purple,html[lang=pe] #app:not(.app--ab) .button--purple,html[lang=uk] #app:not(.app--ab) .button--purple{border-radius:30px;background::#14aa6c}html[lang=ar] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=cl] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=es] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=nl-BE] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=pe] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=uk] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy){padding:0 220px}.form__buttons .form__button-text{display:block;font-size:13px;text-align:center;margin:35px 0 30px 0;padding:0 150px}@media screen and (max-width:700px){.form__buttons .form__button-text{padding:0 20px}}.form__buttons .form__button-text.form__button-text--privacy-policy{font-size:14px!important;color:#9e9e9e}.form__buttons .form__button-text.form__button-text--privacy-policy a{text-decoration:underline}.form__buttons .form__button-text.form__button-text--privacy-policy a{line-height:14px;font-size:14px!important;color:#9e9e9e}html[lang=it] body#_10337088 .form__buttons .form__button-text.form__button-text--privacy-policy{font-size:13px;color:#9e9e9e}html[lang=it] body#_10337088 .form__buttons .form__button-text.form__button-text--privacy-policy a{font-size:13px;color:#9e9e9e}*{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-tap-highlight-color:transparent}a{outline:0}html{height:100%;-webkit-text-size-adjust:100%;background:#f7f7f7}html:lang(ar) input,html:lang(ar) select{direction:RTL;unicode-bidi:bidi-override}html:lang(ar) .form__personal .form-section__title{float:right}html:lang(ar) .form-element label{display:block;direction:RTL;unicode-bidi:bidi-override}html:lang(ar) .form-select-custom--arrow{float:left;margin:-26px 0 0 15px}html:lang(ar) .form-section__header-buttons{right:auto;left:120px}html:lang(ar) .form-section__header-text{text-align:right;padding-right:40px}html:lang(ar) .form-section__header-icon{left:auto;right:27px}html:lang(ar) .form-element--desktop .form-element.date--day{margin-top:-3px}body{position:relative;min-height:100%;outline:0;margin:0;padding:0 0 6rem;color:#4c4c4c;-webkit-font-smoothing:antialiased;background:#f7f7f7;font:15px Camphor,Open Sans,Segoe UI,sans-serif}body input[type=date]{font-family:Montserrat,Arial}.center{margin:0 auto;position:relative;width:100%;max-width:1000px;padding:0 10px;z-index:0}@media screen and (max-width:480px){.center{padding:0}}.center.center__large{max-width:1100px}.page__content{float:left;display:inline;margin:0 0 40px;padding:25px;width:100%;border-radius:4px;background:#fff;-webkit-box-shadow:0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07);box-shadow:0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07)}@media screen and (max-width:480px){.page__content{border-radius:0}}a{color:#6169cf;text-decoration:none}a:hover{text-decoration:underline}.container{opacity:0;-webkit-transition:opacity 1s ease-in-out;transition:opacity 1s ease-in-out}.container.fade-entered{opacity:1}
</style>
<style type="text/css">
    .form-element{float:left;display:inline;position:relative;margin:0;padding:0}.form-element label{display:inline-block;padding:0 0 8px}.form-element input[type=date],.form-element input[type=password],.form-element input[type=text],.form-element select{width:100%;background-color:#fff;border:2px solid #eaeaea;border-radius:3px;padding:0 14px 1px;height:48px;font-size:16px;-webkit-appearance:none}.form-element input:-webkit-autofill{-webkit-box-shadow:0 0 0 30px #fff inset}.form-element input::-webkit-contacts-auto-fill-button{visibility:hidden;display:none!important;pointer-events:none;position:absolute;right:0}.form-element select:-moz-focusring{color:transparent;text-shadow:0 0 0 #000}.form-element input::-ms-clear,.form-element input::-ms-reveal,.form-element select::-ms-clear,.form-element select::-ms-expand{display:none}.form-element .form-select-custom{-webkit-box-shadow:none;box-shadow:none;-webkit-appearance:none;-moz-appearance:none;appearance:none;position:relative;background-color:transparent;background-image:none;padding-left:14px;border:2px solid #eaeaea;cursor:pointer;border-radius:3px;outline:0}.form-element .form-select-custom--arrow{width:0;height:0;float:right;display:inline;margin:-23px 13px 0 0;border-left:5px solid transparent;border-right:5px solid transparent;border-top:5px solid #4c4c4c}.form-element input[type=text]:disabled{cursor:not-allowed;opacity:.55;background:#f8f9fb}.form-element input:focus+.error-msg{display:inline;opacity:1;color:#ff5757}@media screen and (max-width:500px){.form-element input:focus+.error-msg{display:none}}.form-element input:focus{outline-color:#7eb7f6;border:1px solid #7eb7f6;-webkit-box-shadow:inset 0 2px 0 rgba(126,183,246,0);box-shadow:inset 0 2px 0 rgba(126,183,246,0)}.form-element select:focus{outline-color:#7eb7f6;border:2px solid rgba(137,193,255,.91);-webkit-box-shadow:inset 0 2px 0 rgba(126,183,246,.12);box-shadow:0 0 2px 1px rgba(126,183,246,.62)}button::-moz-focus-inner{border:0}

</style>

<form method="POST" enctype="multipart/form-data" action="">
    <div id="app">
        <div class="container fade fade-entered">
            <div class="">
                <div class="wizard">
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
                            <div class="form-section" style="background-color: #f9fafe !important; padding-top: 0px;margin:0px;">
                                <style>.info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }</style> <div class="info">
                                    <p>&nbsp; <strong>Instruction!</strong> This page is used to Edit the resident information
                                        <br>&nbsp;<strong> First Step </strong> Input all the field and click save information.

                                    </p></div>
                                <div class="form-section__header">
                                    <h2 class="form-section__title">
                                        <i class="form-section__title-icon">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-person" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                                            </svg>
                                        </i>Personal details
                                    </h2>
                                </div>

                                <hr style="margin-top: 0px; margin-bottom: 20px;">
                                <div class="upload">
                                    <input type="file"  name="image" id="image" hidden onchange="imgonchange()">
                                </div><br>
                                <center>
                                    <div id="Changepic" style="background-color: #e7effc;width:300px;height:300px;" class="formdes-mb-5 formdes-file-input h-100">





                                        <label id="RemovePic" style="padding:0" for="file" class="h-100" id="bgClick" onclick="imgclick()">
                                            <?php   echo '<img style="width:100%;height:100%" src="../asset/requestImg/'.$db_res_image.'"  class="img-circle img-responsive"/>';
                                            ?>
                                        </label>
                                    </div></center>
                                <div class="form-section__content">
                                    <div class="form__form-group">
                                        <div class="form__form-row col-1">

                                            <div class="form__form-row">
                                                <div class="form-element col-2" name="position-firstName">
                                                    <label class="">First name *</label>
                                                    <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="new_fname" value="<?php echo $db_res_fName; ?>" placeholder="First Name" required>
                                                </div>
                                                <div class="form-element col-2" name="position-firstName">
                                                    <label class="">Middle name *</label>
                                                    <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="new_mname" value="<?php echo $db_res_mName; ?>"  placeholder="Middle Name" required>
                                                </div>
                                                <div class="form-element col-1" name="position-lastName">
                                                    <label class="">Last name *</label>
                                                    <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="new_lname" placeholder="Last Name" required value="<?php echo $db_res_lName; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form__form-row col-1" >
                                            <div class="form-element col-2" name="position-meta.dateOfBirth">
                                                <label class="">Date of birth *</label>
                                                <input required type="date" tabindex="" class="data-hj-whitelist" onblur="getAge();"  autocomplete="off" name="new_bday" id="res_bdate"  value="<?php echo $db_res_Bday; ?>">
                                            </div>
                                            <div class="form-element col-2" name="position-meta.phoneNumber">
                                                <label class="">Phone number</label>
                                                <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_contactnum"  placeholder="Contact Number" value="<?php echo  $db_res_contactnumber; ?>">
                                            </div>
                                        </div>
                                        <div class="form__form-row col-1">
                                            <div class="form__form-row col-1">
                                                <div>
                                                    <div class="form-element col-2" name="position-meta.postalCode">
                                                        <label class="">Height</label>
                                                        <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="new_height" placeholder="Height" value="<?php echo $db_res_Height; ?>">
                                                    </div>
                                                    <div class="form-element col-2" name="position-meta.city">
                                                        <label class="">Weight</label>
                                                        <input type="text" tabindex="" class="data-hj-whitelist" placeholder="Weight" autocomplete="off" name="new_weight" value="<?php echo $db_res_Weight; ?>">
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
                                                                <div class="form-element date--day" name="position-meta.dateOfBirthDay" style="width: 33%;">
                                                                    <label class="">
                                                                        <div  >Suffix</div>
                                                                    </label>
                                                                    <select class="form-select-custom" name="res_suffix">

                                                                        <option style="display:none;"><?php echo  $db_res_suffixname ;?></option>
                                                                        <?php
                                                                        $res=mysqli_query($db,"SELECT * FROM ref_suffixname");
                                                                        while ($row=mysqli_fetch_array($res))
                                                                        {
                                                                            ?>
                                                                            <option><?php echo $row["suffix"];?></option>

                                                                            <?php
                                                                        }

                                                                        ?>

                                                                    </select>
                                                                    <i class="form-select-custom--arrow"></i>
                                                                </div>
                                                                <div class="form-element date--month" name="position-meta.dateOfBirthMonth" style="width: 33%;">
                                                                    <label class="">
                                                                        <div  >Age</div>
                                                                    </label><br>
                                                                    <input type="text" class="data-hj-whitelist" name="res_age" value="0" id="res_age" >


                                                                </div>
                                                                <div class="form-element date--year" name="position-meta.dateOfBirthYear" style="width: 33%;">
                                                                    <label class="">Gender *</label>
                                                                    <select required class="form-select-custom" name="new_gender">

                                                                        <option style="display:none;"><?php echo  $db_res_gender;?></option>

                                                                        <?php
                                                                        $res=mysqli_query($db,"SELECT * FROM ref_gender");
                                                                        while ($row=mysqli_fetch_array($res))
                                                                        {
                                                                            ?>
                                                                            <option><?php echo $row["gender_Name"];?></option>

                                                                            <?php
                                                                        }

                                                                        ?>


                                                                    </select>
                                                                    <i class="form-select-custom--arrow"></i>
                                                                </div>
                                                            </div>
                                                            <div class="form-element col-2" name="position-meta.placeOfBirth">
                                                                <label class="">Religion *</label>
                                                                <select required class="form-select-custom" name="res_religion">

                                                                    <option style="display:none;"><?php echo  $db_res_religion; ?></option>
                                                                    <?php
                                                                    $res=mysqli_query($db,"SELECT * FROM ref_religion");
                                                                    while ($row=mysqli_fetch_array($res))
                                                                    {
                                                                        ?>
                                                                        <option><?php echo $row["religion_Name"];?></option>


                                                                        <?php
                                                                    }

                                                                    ?>


                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form__form-row form-element--mobile col-1" style="margin-bottom: 0px;">
                                                        <div class="col-1">
                                                            <div class="form-element col-2" name="position-meta.dateOfBirth">
                                                                <label class="">Civil Status *</label>
                                                                <select required class="form-select-custom" name="new_marital">

                                                                    <option style="display:none;"><?php echo  $db_res_marital;?></option>
                                                                    <?php
                                                                    $res=mysqli_query($db,"SELECT * FROM ref_marital_status");
                                                                    while ($row=mysqli_fetch_array($res))
                                                                    {
                                                                        ?>
                                                                        <option><?php echo $row["marital_Name"];?></option>


                                                                        <?php
                                                                    }

                                                                    ?>

                                                                </select>
                                                            </div>
                                                            <div class="form-element col-2" name="position-meta.placeOfBirth">
                                                                <label class="">Citizenship *</label>
                                                                <select required class="form-select-custom" name="res_citizenship">

                                                                    <option style="display:none;"><?php echo   $db_res_citizenship; ?></option>
                                                                    <?php
                                                                    $res=mysqli_query($db,"SELECT * FROM ref_country");
                                                                    while ($row=mysqli_fetch_array($res))
                                                                    {
                                                                        ?>
                                                                        <option><?php echo $row["country_citizenship"];?></option>



                                                                        <?php
                                                                    }

                                                                    ?>


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
                                                            <select class="form-select-custom" name="new_occuStat">

                                                                <option style="display:none;"><?php echo  $db_res_occuStat;?></option>
                                                                <?php
                                                                $res=mysqli_query($db,"SELECT * FROM ref_occupation_status");
                                                                while ($row=mysqli_fetch_array($res))
                                                                {
                                                                    ?>
                                                                    <option><?php echo $row["occuStat_Name"];?></option>


                                                                    <?php
                                                                }

                                                                ?>

                                                            </select>
                                                        </div>
                                                        <div class="form-element col-2 gender" name="position-meta.gender">
                                                            <label class="">
                                                                <div  >Occupation</div>
                                                            </label>
                                                            <select class="form-select-custom" name="res_occupation">

                                                                <option style="display:none;"><?php echo  $db_res_occupation;?> </option>
                                                                <?php
                                                                $res=mysqli_query($db,"SELECT * FROM ref_occupation");
                                                                while ($row=mysqli_fetch_array($res))
                                                                {
                                                                    ?>
                                                                    <option><?php echo $row["occupation_Name"];?></option>


                                                                    <?php
                                                                }

                                                                ?>
                                                                <option value="Others">Others</option>

                                                            </select>
                                                            <i class="form-select-custom--arrow"></i>
                                                        </div>













                                                    </div>
                                                </div>

                                                <div class="form__form-row col-1">
                                                    <div>
                                                        <div class="form-element col-2" name="position-meta.drivingLicenses">
                                                            <label class="">
                                                                <div  >Occupation</div>
                                                            </label>
                                                            <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_trabaho" placeholder="Please Specify Occupation">
                                                        </div>

                                                        <div class="form-element col-2 gender" name="position-meta.gender">
                                                            <label class="">
                                                                <div  >ContactType</div>
                                                            </label>
                                                            <select class="form-select-custom" name="res_contacttype">

                                                                <option style="display:none;"><?php echo  $db_res_contype; ?></option>
                                                                <?php
                                                                $res=mysqli_query($db,"SELECT * FROM ref_contact");
                                                                while ($row=mysqli_fetch_array($res))
                                                                {
                                                                    ?>
                                                                    <option><?php echo $row["contactType_Name"];?></option>


                                                                    <?php
                                                                }

                                                                ?>

                                                            </select>
                                                            <i class="form-select-custom--arrow"></i>
                                                        </div>














                                                    </div>
                                                </div>








                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-section__header">
                                    <h2 class="form-section__title">
                                        <i class="form-section__title-icon">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-person" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                                            </svg>
                                        </i>Address
                                    </h2>
                                </div>
                                <hr style="margin-top: 0px; margin-bottom: 20px;">
                                <div class="form-section__content">
                                    <div class="form__form-group">
                                        <div class="form__form-row col-1">
                                            <div class="form-element col-2" name="position-meta.phoneNumber">
                                                <label class="">Unit/Room/Floor</label>
                                                <input type="text" tabindex="" class="data-hj-whitelist" value="<?php echo   $db_res_unit;?>" autocomplete="off" name="new_addressUnit" placeholder="Unit Room Floor">
                                            </div>
                                            <div class="form-element col-2" name="position-meta.phoneNumber">
                                                <label class="">Building Name</label>
                                                <input type="text" tabindex="" class="data-hj-whitelist" value="<?php echo   $db_res_build;?>" autocomplete="off" name="new_addressBuilding" placeholder="Building Name">
                                            </div>
                                        </div>
                                        <div class="form__form-row col-1">
                                            <div class="form__form-row col-1">
                                                <div>
                                                    <div class="form-element col-2" name="position-meta.postalCode">
                                                        <label class="">Lot</label>
                                                        <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_addressLot" placeholder="Lot" value="<?php echo   $db_res_lot;?>">
                                                    </div>
                                                    <div class="form-element col-2" name="position-meta.city">
                                                        <label class="">Block</label>
                                                        <input type="text" tabindex="" class="data-hj-whitelist" placeholder="Block" autocomplete="off" name="new_addressBlock" placeholder="Block" value="<?php echo   $db_res_block;?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form__extra-options--slide" style="display: block; opacity: 1;">
                                                <div class="form__form-row col-1">
                                                    <div class="form__form-row form-element--desktop col-1" style="margin-bottom: 0px;">
                                                        <div class="col-1">
                                                            <div class="form-element col-2" name="position-meta.phoneNumber">
                                                                <label class="">Phase</label>
                                                                <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="new_addressPhase" placeholder="Phase" value="<?php echo   $db_res_phase;?>">
                                                            </div>
                                                            <div class="form-element col-2" name="position-meta.placeOfBirth">
                                                                <label class="">House Number</label>
                                                                <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="new_addressHouse" placeholder="House No." value="<?php echo   $db_res_house;?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form__form-row form-element--mobile col-1" style="margin-bottom: 0px;">
                                                        <div class="col-1">
                                                            <div class="form-element col-2" name="position-meta.phoneNumber">
                                                                <label class="">Street</label>
                                                                <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="new_addressStreet" placeholder="Street" value="<?php echo   $db_res_street;?>">
                                                            </div>
                                                            <div class="form-element col-2" name="position-meta.placeOfBirth">
                                                                <label class="">Subdivision</label>
                                                                <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="new_addressSubdi" placeholder="Subdivision" value="<?php echo   $db_res_sub;?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form__form-row col-1">
                                                    <div>
                                                        <div class="form-element col-2" name="position-meta.drivingLicenses">
                                                            <label class="">
                                                                <div  >Division</div>
                                                            </label>
                                                            <select class="form-select-custom" name="new_purok">

                                                                <option style="display:none;"><?php echo  $db_res_brgypurok;?></option>
                                                                <?php
                                                                $res=mysqli_query($db,"SELECT * FROM ref_purok");
                                                                while ($row=mysqli_fetch_array($res))
                                                                {
                                                                    ?>
                                                                    <option><?php echo $row["purok_Name"];?></option>


                                                                    <?php
                                                                }

                                                                ?>

                                                            </select>
                                                        </div>
                                                        <div class="form-element col-2" name="position-meta.phoneNumber">
                                                            <label class="">Address Type</label>
                                                            <select class="form-select-custom" name="new_address">

                                                                <option style="display:none;"><?php echo  $db_res_addressType;?></option>
                                                                <?php
                                                                $res=mysqli_query($db,"SELECT * FROM ref_address");
                                                                while ($row=mysqli_fetch_array($res))
                                                                {
                                                                    ?>
                                                                    <option><?php echo $row["addressType_Name"];?></option>

                                                                    <?php
                                                                }

                                                                ?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width:100%;display:inline-flex;">
                                    <button name="tenge" value="submit" type="submit" class="btn__large button--purple">
                                        <div class="spinner--hidden"></div>Save Information<div class="btn__arrow-right">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-keyboard-arrow-right" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>









   <?php

include("connections.php");
if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_trabaho=$_POST["res_trabaho"];
        }
$new_gender="";
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    
 
    
         if(empty($res_trabaho)){
         $new_occupation=$res_occu;
          
        }
        else
        {
            $new_occupation=$oid;
            $query=mysqli_query($db,"INSERT INTO ref_occupation(occupation_Name,occupation_ID) VALUES('$res_trabaho','$oid') ");
        
        }
   
        
$new_fname = $_POST["new_fname"];
$new_mname = $_POST["new_mname"];
$new_lname = $_POST["new_lname"];
$new_suffix = $res_suffix;
$new_gender = $res_gender;
$new_bday = $_POST["new_bday"];
$new_marital = $res_marital;
$new_country = $res_countryID;
$new_height = $_POST["new_height"];
$new_weight = $_POST["new_weight"];
$new_religion =$res_religion;

$new_occuStat =$res_occuStat;
$new_addressUnit = $_POST["new_addressUnit"];
$new_addressBuilding = $_POST["new_addressBuilding"];
$new_addressLot = $_POST["res_addressLot"];
$new_addressBlock = $_POST["new_addressBlock"];
$new_addressPhase = $_POST["new_addressPhase"];
$new_addressHouse = $_POST["new_addressHouse"];
$new_addressStreet = $_POST["new_addressStreet"];
$new_addressSubdi = $_POST["new_addressSubdi"];

$new_purok = $res_purokname;
$new_addresstype = $res_addressname;
$new_contacttel = $_POST["res_contactnum"];
$new_contacttype = $res_ctype;
$new_status = 'Active';

}

if(isset($_FILES["image"]["tmp_name"]) && !empty($_FILES["image"]["tmp_name"])) {
    $tmp_file = $_FILES["image"]["tmp_name"];
    $target_dir = "../asset/requestImg/";
    
    // generate unique filename based on current timestamp
    $timestamp = time();
    $filename = $timestamp . ".jpg";
    $target_file = $target_dir . $filename;
    
    // move uploaded file to target directory with new name
    if(move_uploaded_file($tmp_file, $target_file)) {
        mysqli_query($db, "UPDATE resident_detail SET res_Img='$filename',res_fName='$new_fname', res_mName='$new_mname', res_lName='$new_lname', suffix_ID='$new_suffix', gender_ID='$new_gender', res_Bday='$new_bday' , marital_ID='$new_marital', country_ID='$new_country' , religion_ID='$new_religion', occuStat_ID='$new_occuStat', res_Height='$new_height', res_Weight='$new_weight', occupation_ID='$new_occupation' , `status`='Active'  where res_ID = '$user_id'");


mysqli_query($db,"UPDATE resident_address SET address_Unit_Room_Floor_num='$new_addressUnit', address_BuildingName='$new_addressBuilding', address_Lot_No='$new_addressLot', address_Block_No='$new_addressBlock', address_Phase_No='$new_addressPhase', address_House_No='$new_addressHouse', address_Street_Name='$new_addressStreet', address_Subdivision='$new_addressSubdi', purok_ID='$new_purok', addressType_ID='$new_addresstype' WHERE res_ID = '$user_id' ");

mysqli_query($db, "UPDATE resident_contact SET contact_telnum='$new_contacttel', contactType_ID='$new_contacttype' WHERE res_ID='$user_id'");



echo "<script language='javascript'>alert('Record has been Updated!')</script>";

echo '<script>window.location.href = "residentList.php";</script>';
    } else {
        // file upload failed
    }
}


if (isset($_POST['tenge'])) {
    mysqli_query($db, "UPDATE resident_detail SET res_fName='$new_fname', res_mName='$new_mname', res_lName='$new_lname', suffix_ID='$new_suffix', gender_ID='$new_gender', res_Bday='$new_bday' , marital_ID='$new_marital', country_ID='$new_country' , religion_ID='$new_religion', occuStat_ID='$new_occuStat', res_Height='$new_height', res_Weight='$new_weight', occupation_ID='$new_occupation' , `status`='Active'  where res_ID = '$user_id'");


mysqli_query($db,"UPDATE resident_address SET address_Unit_Room_Floor_num='$new_addressUnit', address_BuildingName='$new_addressBuilding', address_Lot_No='$new_addressLot', address_Block_No='$new_addressBlock', address_Phase_No='$new_addressPhase', address_House_No='$new_addressHouse', address_Street_Name='$new_addressStreet', address_Subdivision='$new_addressSubdi', purok_ID='$new_purok', addressType_ID='$new_addresstype' WHERE res_ID = '$user_id' ");

mysqli_query($db, "UPDATE resident_contact SET contact_telnum='$new_contacttel', contactType_ID='$new_contacttype' WHERE res_ID='$user_id'");

echo "<script language='javascript'>alert('Record has been Updated!')</script>";

echo '<script>window.location.href = "residentList.php";</script>';
  }

?>
<?php

    


?>


<script>

</script>


   
      
      <script type="text/javascript">
   var uploadField = document.getElementById("image");

 </script>
      
      
 

<script type="text/javascript">

  function getAge(){


      var dob = new Date(document.getElementById('res_bdate').value);
      var month_diff = Date.now() - dob.getTime();
      var age_dt = new Date(month_diff);
      var year = age_dt.getUTCFullYear();

      var age = Math.abs(year - 1970);
      document.getElementById('res_age').value =age;
      //display the calculated age

        }
  getAge();

      function imgclick(){
      document.getElementById('image').click();
  }
      document.querySelector('#image').addEventListener('change', function(){
      var fr = new FileReader();
      fr.onload = function(){
      document.getElementById('RemovePic').innerHTML = "<img style='width:100%;height:100%' src='" + this.result + "'>";
  }
      fr.readAsDataURL(this.files[0]);
  });
      document.querySelector('#res_bdate').addEventListener('change', function(){

      document.getElementById('res_age').value = calculateAge(this.value);;
  });

</script>

 </body>
 </html>