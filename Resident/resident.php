<?php
session_start();
 
include('connections.php');
 
$query ="SELECT * FROM resident_detail ORDER BY res_ID DESC";  
$result = mysqli_query($db, $query);  
 
 
$largestNumber= $rid= "";
                           $rowSQL = mysqli_query($db, "SELECT MAX( res_ID ) AS max FROM `resident_detail`;" );
                                  $row = mysqli_fetch_array( $rowSQL );
                                  $largestNumber = $row['max'];
                                    $rid= $largestNumber+1;
 
 
$largestocc= $oid= "";
                           $rowSQL = mysqli_query($db, "SELECT MAX( occupation_ID ) AS max FROM `ref_occupation`;" );
                                  $row = mysqli_fetch_array( $rowSQL );
                                  $largestocc = $row['max'];
                                    $oid= $largestocc+1;
                              
 
$largest_address= $aid= "";
                           $rowSQL = mysqli_query($db, "SELECT MAX( address_ID ) AS max FROM `resident_address`;" );
                                  $row = mysqli_fetch_array( $rowSQL );
                                  $largest_address= $row['max'];
                                    $aid= $largest_address+1;
                                 
 
$largest_contact= $cid= "";
                           $rowSQL = mysqli_query($db, "SELECT MAX( contact_ID ) AS max FROM `resident_contact`;" );
                                  $row = mysqli_fetch_array( $rowSQL );
                                  $largest_contact= $row['max'];
                                    $cid= $largest_contact+1;
                                 
 
$res_fname = $res_mname = $res_lname = $res_suffix = $res_gender = $res_bdate = $res_bdate = $res_civilstatus= $res_contactnum =$res_id = $res_contacttype = $res_religion = $res_occupationstatus= $res_occupation =$res_height= $res_weight= $res_citizenship=  $res_houseno=   $res_purokno= $res_region= $res_address= $res_brgy="" ;

 $res_building= $res_lot= $res_block= $res_phase=$res_street =$res_subd= "";

 $res_unit=  "0";     

$isuffix= $igender= $icstatus = $ictype= $irel= $ioccst= $iocc= $iciti= $ipurok=$iadd= $ibrgy="" ;



  if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_fname=$_POST["res_fname"];
        }
        

 if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_mname=$_POST["res_mname"];
        }
        

 if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_lname=$_POST["res_lname"];
        }


 if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $isuffix=$_POST["res_suffix"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $suffix= "";
                        $rows = mysqli_query($db, "SELECT suffix_ID  FROM `ref_suffixname` where suffix = '$isuffix';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $suffix = $row['suffix_ID'];
             $res_suffix=$suffix;
        }





if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $igender=$_POST["res_gender"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $gender= "";
                        $rows = mysqli_query($db, "SELECT gender_ID  FROM `ref_gender` where gender_Name = '$igender';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $gender = $row['gender_ID'];
             $res_gender=$gender;
        }


 if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_bdate=$_POST["res_bdate"];
        }
 

if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $icstatus=$_POST["res_civilstatus"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $cstatus= "";
                        $rows = mysqli_query($db, "SELECT marital_ID  FROM `ref_marital_status` where marital_Name = '$icstatus';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $cstatus = $row['marital_ID'];
             $res_civilstatus=$cstatus;
        }



 if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_contactnum=$_POST["res_contactnum"];
        }

if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $ictype=$_POST["res_contacttype"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $ctype= "";
                        $rows = mysqli_query($db, "SELECT contactType_ID  FROM `ref_contact` where contactType_Name = '$ictype';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $ctype = $row['contactType_ID'];
             $res_contacttype=$ctype;
        }


 
if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $irel=$_POST["res_religion"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $relig= "";
                        $rows = mysqli_query($db, "SELECT religion_ID  FROM `ref_religion` where religion_name = '$irel';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $relig = $row['religion_ID'];
             $res_religion= $relig;
        }


if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $ioccst=$_POST["res_occupationstatus"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $occst= "";
                        $rows = mysqli_query($db, "SELECT occuStat_ID  FROM `ref_occupation_status` where occuStat_Name = '$ioccst';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $occst = $row['occuStat_ID'];
             $res_occupationstatus=$occst;
        }


if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $iocc=$_POST["res_occupation"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
            
          
            $res_occupation=$oid;
            
           
                        $rows = mysqli_query($db, "SELECT occupation_ID  FROM `ref_occupation` where occupation_Name = '$iocc';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $occ = $row['occupation_ID'];
            
             $res_occupation=$occ;
        }


 if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_height=$_POST["res_height"];
        }
        if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_age=$_POST["res_age"];
        }

 if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_weight=$_POST["res_weight"];
        }


if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $iciti=$_POST["res_citizenship"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $citi= "";
                        $rows = mysqli_query($db, "SELECT country_ID  FROM `ref_country` where country_citizenship = '$iciti';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $citi= $row['country_ID'];
             $res_citizenship= $citi;
        }


  if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_unit=$_POST["res_unit"];
        }
        


if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_building=$_POST["res_building"];
        }
        

 if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_lot=$_POST["res_lot"];
        }
        

 if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_block=$_POST["res_block"];
        }


 if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_phase=$_POST["res_phase"];
        }
    
if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_houseno=$_POST["res_houseno"];
        } 


if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_street=$_POST["res_street"];
        }
        

 if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_subd=$_POST["res_subd"];
        }

if ($_SERVER["REQUEST_METHOD"]== "POST"){
$res_trabaho=$_POST["res_trabaho"];
        }


if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $ipurok=$_POST["res_purokno"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $purok= "";
             $region= "";
                        $rows = mysqli_query($db, "SELECT purok_ID,region_Code  FROM `ref_purok` where purok_Name = '$ipurok';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $purok = $row['purok_ID'];
                                  $region = $row['region_Code'];
            
             $res_purokno=$purok;
            
             $res_region=$region;
        }



if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $iadd=$_POST["res_address"];
       }

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
             $address= "";
                        $rows = mysqli_query($db, "SELECT addressType_ID  FROM `ref_address` where addressType_Name = '$iadd';" );
                                  $row = mysqli_fetch_array( $rows );
                                  $address= $row['addressType_ID'];
             $res_address= $address;
        }





if ($_SERVER["REQUEST_METHOD"]== "POST"){
 $file = addslashes((file_get_contents($_FILES["image"]["tmp_name"])));
}
?>

<?php
  

       
   
 
If($rid && $res_fname  && $res_lname  && $res_gender && $res_bdate && $res_civilstatus  && $res_religion  && $res_citizenship){
  
    
     if($res_trabaho){
         $res_occupation=$oid;
          $query=mysqli_query($db,"INSERT INTO ref_occupation(occupation_Name,occupation_ID) VALUES('$res_trabaho','$oid') ");
     }
    
        $query=mysqli_query($db,"INSERT INTO resident_detail(res_ID,res_Img, res_fName, res_mName,res_lName,suffix_ID, gender_ID, res_Bday, marital_ID,religion_ID,res_Height,res_Weight, occuStat_ID,occupation_ID,country_ID,Status,res_Age) VALUES('$rid','$file','$res_fname','$res_mname','$res_lname','$res_suffix','$res_gender','$res_bdate','$res_civilstatus','$res_religion','$res_height', '$res_weight','$res_occupationstatus','$res_occupation','$res_citizenship','Active','$res_age') ");

     if($query){
         header('Location:profile.php');
     }else{
         var_dump($query);
     }
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    

        if ($rid  && $res_citizenship){
             $query=mysqli_query($db,"INSERT INTO resident_contact(contact_ID,contact_telnum,res_ID,contactType_ID,country_ID) VALUES('$cid','$res_contactnum','$rid','$res_contacttype','$res_citizenship') ");
            
        }
    
          if ( $rid && $res_houseno && $res_purokno && $res_address){
             $query=mysqli_query($db,"INSERT INTO resident_address(address_ID,address_Unit_Room_Floor_num,res_ID,address_BuildingName,address_Lot_No,address_Block_No,address_Phase_No,address_House_No,address_Street_Name,address_Subdivision,country_ID,purok_ID,region_ID,addressType_ID) VALUES('$aid','$res_unit','$rid','$res_building',' $res_lot',' $res_block','$res_phase','$res_houseno','$res_street','$res_subd','$res_citizenship','$res_purokno','$res_region','$res_address') ");

        }

       
    }



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Management Information System</title>



      <style> .info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }
          .formdes-mb-5{margin-bottom:20px}.formdes-file-input input{opacity:0;position:absolute}.formdes-file-input label{height:100%;position:relative;border:3px dashed #c9d4e6;border-radius:6px;min-height:200px;display:flex;align-items:center;justify-content:center;padding:48px;text-align:center}.formdes-drop-file{display:block;font-weight:600;color:#07074d;font-size:20px;margin-bottom:8px}.formdes-or{font-weight:500;font-size:16px;color:#6b7280;display:block;margin-bottom:8px}body{background-color:#f9fafe!important}

      </style>
      
      </head>
  <body style="background-color: #f9fafe !important;font-family: calibri; font-size: 18px;padding:0px ">






















  <style type="text/css">
      @font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCwemc-NtvyoWOKrfbJJwSjZGs.woff2) format("woff2");unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCwehZQbSGeLTu6IhH00VRk2ws.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCweiyNCiQPWMSUbZmR9GEZ2io.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCwevfgCb1svrO3-Ym-Rpjvnho.woff2) format("woff2");unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:local("Montserrat Medium"),local("Montserrat-Medium"),url(https://fonts.gstatic.com/s/montserrat/v12/BYPM-GE291ZjIXBWrtCweteM9fzAXBk846EtUMhet0E.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2212,U+2215}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl03riJwOpk75o0mgXgmZkkog.woff2) format("woff2");unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl00yietQkaokDF8re1oCq3-U.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl053YFo3oYz9Qj7-_6Ux-KkY.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl02tASdhiysHpWmctaYEsrdw.woff2) format("woff2");unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:local("Montserrat SemiBold"),local("Montserrat-SemiBold"),url(https://fonts.gstatic.com/s/montserrat/v12/q2OIMsAtXEkOulLQVdSl03XcDWh-RbO457623Zi1kyw.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2212,U+2215}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcrllaL-ufMOTUcv7jfgmuJg.woff2) format("woff2");unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcpsnFT_2ovhuEig4Dh-CBQw.woff2) format("woff2");unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcnv4bDVR720piddN5sbmjzs.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcjrEaqfC9P2pvLXik1Kbr9s.woff2) format("woff2");unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;src:local("Montserrat Bold"),local("Montserrat-Bold"),url(https://fonts.gstatic.com/s/montserrat/v12/IQHow_FEYlDC4Gzy_m8fcmaVI6zN22yiurzcBKxPjFE.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2212,U+2215}form{display:inline-block;margin:0;padding:0;width:100%}.form-section{display:inline-block;width:100%;margin:0 0 30px 0;padding:35px 40px;border-radius:4px;background:#fff;box-shadow:0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07)}@media screen and (max-width:480px){.form-section{padding:25px 15px;border-radius:0}}.form-section hr{float:left;display:inline;height:0;width:100%;padding:0;margin-top:20px;border:none;border-bottom:1px solid #dedede}.form-section__group{display:inline-block;margin:0;padding:0 0 25px 0;width:100%}.form-section__group .form-element.col-2{width:calc(50% - 10px)}.form-section__group .form-element.col-2:last-child{float:right}.form-section__content{float:left;display:inline;z-index:0;width:100%;margin:0;padding:0}.form__form-group{display:inline-block;width:100%}.form__form-group .col-1{width:100%}.form__form-group .col-2{width:50%}.form__form-row{display:inline-block;position:relative;width:100%;margin-bottom:10px}.form__form-row .form__form-group.col-2:nth-child(odd){padding-right:10px}.form__form-row .form__form-group.col-2:nth-child(even){padding-left:10px}.form__form-row .form-element.col-2:not(.gender):nth-child(odd){padding-right:10px}.form__form-row .form-element.col-2:nth-child(even){padding-left:10px}.form__form-row .form-element.col-2.gender{padding-left:10px}.form__form-row.col-2:nth-child(odd){padding-right:10px}.form__form-row.col-2:nth-child(even){padding-left:10px}.form__form-row--avatar{float:left;display:inline;position:relative;margin:3px 0 0 0;padding:10px;height:152px;width:152px;text-align:center;background:#f5f5f5;border-radius:3px;border:2px dotted #dddbdb;background-size:cover!important;transition:all .2s ease-in-out;box-shadow:0 0 3px 0 #d3cfcf}.form__form-row--avatar:hover{border:2px dotted #888}@media screen and (max-width:414px){.form__form-row--avatar{width:calc(50% - 10px)}}@media screen and (max-width:375px){.form__form-row--avatar{height:155px}}.form__form-row--avatar--label{top:0;padding-top:29px;width:100%;height:100%;cursor:pointer;position:relative;display:inline-block}.form__form-row--avatar--label .form__form-row--avatar--text{display:block;position:relative;top:10px;text-align:center;font-size:11px;color:#888}.form__form-row--avatar--label svg{fill:#888;height:55px;width:55px}.form__form-row--avatar-right{float:left;display:inline;margin:0;padding:0 0 0 20px;height:auto;width:calc(100% - 152px)}@media screen and (max-width:414px){.form__form-row--avatar-right{width:52%;padding-left:20px}}.form__form-row--avatar-right .form-element.col-1:first-child{margin-top:0}.form__form-row--avatar-right .form-element.col-1{margin-top:15px}.form__form-header header{float:left;display:inline;margin:0;padding:0;width:100%;border-bottom:1px solid #dedede;margin-bottom:25px}.form__form-header header h1{text-align:center;font-size:42px;margin:0;padding:0}.form__form-header header h2{float:left;display:inline;width:100%;text-align:left;font-size:22px;font-weight:600;margin:0;padding:0 0 12px 0}.form__element-spinner{position:absolute;right:10px;top:34px;background:#fff}.form__extra-options--slide{opacity:.75;padding-bottom:0}.form-section__add-extra-section .form-section__title-icon{float:left;display:none;width:40px;position:relative;top:5px}.form-section__add-extra-section .form-section__title-icon svg{height:34px;width:34px}.form-section__add-extra-section .form-element{width:calc(100% - 0px);padding:5px 0 5px 0}.form__extra-options{float:left;display:inline;position:absolute;bottom:0;left:0;height:96px;margin:-23px 0 0 0;padding:10px 0 0 0;width:100%;text-align:center;background:#fff;border-top:1px solid #e6e6e6;cursor:pointer;border-radius:0 6px}.form__extra-options svg{float:left;display:inline;height:32px;width:32px;width:100%;margin:10px 0 0 0;padding:0}.form__extra-options--label{float:left;display:inline;margin:-5px 0 0 0;padding:0;width:100%}.form-buttons{display:inline-block;width:100%;text-align:center;padding-bottom:50px}.form-element.col-1{width:100%}html[lang=it] .btn__large,html[lang=pl] .btn__large{min-width:280px}html[lang=fr] #app .btn__large{border-radius:40px}html[lang=fr] #app .btn__large.button--purple{background:#14aa6c}.btn__large{outline:0;position:relative;font-size:18px;padding:18px 20px 19px 0;display:inline-block;min-width:240px;border-radius:31px;border:none;cursor:pointer;font-weight:700}.btn__large .btn__arrow-right{position:absolute;top:11px;right:20px}.btn__large .btn__arrow-right svg{height:35px;width:35px}.btn__add-form-section{outline:0;position:relative;font-size:18px;padding:12px 0 18px 0;display:inline-block;text-align:center;width:calc(100% - 70px);width:100%;border-radius:6px;font-size:16px;border:none;cursor:pointer;color:#4c4c4c;background:#f1f1f1;transition:all .3s ease}.btn__add-form-section i{display:inline-block;position:absolute;top:15px;margin-left:-22px;height:25px;width:27px;opacity:1;transition:all .3s ease}.btn__add-form-section i svg{height:20px;width:20px}.btn__add-form-section:hover .btn__add-form-section--label{text-decoration:underline}.btn__add-form-section .btn__add-form-section--label{display:inline-block;position:relative;top:4px;left:5px;transition:all .3s ease}.btn__add-form-section:hover{background:#eaeaea}.btn__add-form-section:hover i{opacity:1}.btn__add-form-section:hover .btn__add-form-section--label{opacity:1}.button--purple{color:#fff;background:#14aa6c;transition:all .5s ease;border-radius:4px;box-shadow:0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08)}.button--purple:hover{text-decoration:underline}.button--purple:disabled{text-decoration:none;opacity:.75}.button--purple[disabled]{cursor:auto;text-decoration:none}html[lang=ar] #app:not(.app--ab) .button--purple,html[lang=cl] #app:not(.app--ab) .button--purple,html[lang=es] #app:not(.app--ab) .button--purple,html[lang=nl-BE] #app:not(.app--ab) .button--purple,html[lang=pe] #app:not(.app--ab) .button--purple,html[lang=uk] #app:not(.app--ab) .button--purple{border-radius:30px;background::#14aa6c}html[lang=ar] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=cl] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=es] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=nl-BE] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=pe] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy),html[lang=uk] #app:not(.app--ab) .form__button-text:not(.form__button-text--privacy-policy){padding:0 220px}.form__buttons .form__button-text{display:block;font-size:13px;text-align:center;margin:35px 0 30px 0;padding:0 150px}@media screen and (max-width:700px){.form__buttons .form__button-text{padding:0 20px}}.form__buttons .form__button-text.form__button-text--privacy-policy{font-size:14px!important;color:#9e9e9e}.form__buttons .form__button-text.form__button-text--privacy-policy a{text-decoration:underline}.form__buttons .form__button-text.form__button-text--privacy-policy a{line-height:14px;font-size:14px!important;color:#9e9e9e}html[lang=it] body#_10337088 .form__buttons .form__button-text.form__button-text--privacy-policy{font-size:13px;color:#9e9e9e}html[lang=it] body#_10337088 .form__buttons .form__button-text.form__button-text--privacy-policy a{font-size:13px;color:#9e9e9e}*{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-tap-highlight-color:transparent}a{outline:0}html{height:100%;-webkit-text-size-adjust:100%;background:#f7f7f7}html:lang(ar) input,html:lang(ar) select{direction:RTL;unicode-bidi:bidi-override}html:lang(ar) .form__personal .form-section__title{float:right}html:lang(ar) .form-element label{display:block;direction:RTL;unicode-bidi:bidi-override}html:lang(ar) .form-select-custom--arrow{float:left;margin:-26px 0 0 15px}html:lang(ar) .form-section__header-buttons{right:auto;left:120px}html:lang(ar) .form-section__header-text{text-align:right;padding-right:40px}html:lang(ar) .form-section__header-icon{left:auto;right:27px}html:lang(ar) .form-element--desktop .form-element.date--day{margin-top:-3px}body{position:relative;min-height:100%;outline:0;margin:0;padding:0 0 6rem;color:#4c4c4c;-webkit-font-smoothing:antialiased;background:#f7f7f7;font:15px Camphor,Open Sans,Segoe UI,sans-serif}body input[type=date]{font-family:Montserrat,Arial}.center{margin:0 auto;position:relative;width:100%;max-width:1000px;padding:0 10px;z-index:0}@media screen and (max-width:480px){.center{padding:0}}.center.center__large{max-width:1100px}.page__content{float:left;display:inline;margin:0 0 40px;padding:25px;width:100%;border-radius:4px;background:#fff;-webkit-box-shadow:0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07);box-shadow:0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07)}@media screen and (max-width:480px){.page__content{border-radius:0}}a{color:#6169cf;text-decoration:none}a:hover{text-decoration:underline}.container{opacity:0;-webkit-transition:opacity 1s ease-in-out;transition:opacity 1s ease-in-out}.container.fade-entered{opacity:1}
  </style>
  <style type="text/css">
      .form-element{float:left;display:inline;position:relative;margin:0;padding:0}.form-element label{display:inline-block;padding:0 0 8px}.form-element input[type=date],.form-element input[type=password],.form-element input[type=text],.form-element select{width:100%;background-color:#fff;border:2px solid #eaeaea;border-radius:3px;padding:0 14px 1px;height:48px;font-size:16px;-webkit-appearance:none}.form-element input:-webkit-autofill{-webkit-box-shadow:0 0 0 30px #fff inset}.form-element input::-webkit-contacts-auto-fill-button{visibility:hidden;display:none!important;pointer-events:none;position:absolute;right:0}.form-element select:-moz-focusring{color:transparent;text-shadow:0 0 0 #000}.form-element input::-ms-clear,.form-element input::-ms-reveal,.form-element select::-ms-clear,.form-element select::-ms-expand{display:none}.form-element .form-select-custom{-webkit-box-shadow:none;box-shadow:none;-webkit-appearance:none;-moz-appearance:none;appearance:none;position:relative;background-color:transparent;background-image:none;padding-left:14px;border:2px solid #eaeaea;cursor:pointer;border-radius:3px;outline:0}.form-element .form-select-custom--arrow{width:0;height:0;float:right;display:inline;margin:-23px 13px 0 0;border-left:5px solid transparent;border-right:5px solid transparent;border-top:5px solid #4c4c4c}.form-element input[type=text]:disabled{cursor:not-allowed;opacity:.55;background:#f8f9fb}.form-element input:focus+.error-msg{display:inline;opacity:1;color:#ff5757}@media screen and (max-width:500px){.form-element input:focus+.error-msg{display:none}}.form-element input:focus{outline-color:#7eb7f6;border:1px solid #7eb7f6;-webkit-box-shadow:inset 0 2px 0 rgba(126,183,246,0);box-shadow:inset 0 2px 0 rgba(126,183,246,0)}.form-element select:focus{outline-color:#7eb7f6;border:2px solid rgba(137,193,255,.91);-webkit-box-shadow:inset 0 2px 0 rgba(126,183,246,.12);box-shadow:0 0 2px 1px rgba(126,183,246,.62)}button::-moz-focus-inner{border:0}

  </style>


  <style>.info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }</style> <div class="info">
      <p>&nbsp; <strong>Instruction!</strong> This page will let you create a resident profiling, just fill all the important requirement to process a resident detail.
      <br><strong>NOTE IMPORTANT!</strong> Make sure to verify all input since on early development it will show an error of an array offset due to incompatible value of inputs and make sure to input an image maximum of 1080p image</p></div>
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
                                          <div id="change">
                                              <span id="first" class="formdes-drop-file"> Resident Picture </span>
                                              <span id="second" class="formdes-or"> Click to insert picture </span>
                                          </div>
                                      </label>
                                  </div></center>
                                  <div class="form-section__content">
                                      <div class="form__form-group">
                                          <div class="form__form-row col-1">

                                              <div class="form__form-row">
                                                  <div class="form-element col-2" name="position-firstName">
                                                      <label class="">First name *</label>
                                                      <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_fname" value="" placeholder="First Name" required>
                                                  </div>
                                                  <div class="form-element col-2" name="position-firstName">
                                                      <label class="">Middle name *</label>
                                                      <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_mname" value=""  placeholder="Middle Name">
                                                  </div>
                                                  <div class="form-element col-1" name="position-lastName">
                                                      <label class="">Last name *</label>
                                                      <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_lname" placeholder="Last Name" required>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form__form-row col-1">
                                              <div class="form-element col-2" name="position-meta.dateOfBirth">
                                                  <label class="">Date of birth *</label>
                                                  <input required type="date" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_bdate" id="res_bdate" value="">
                                              </div>
                                              <div class="form-element col-2" name="position-meta.phoneNumber">
                                                  <label class="">Phone number</label>
                                                  <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_contactnum"  placeholder="Contact Number">
                                              </div>
                                          </div>
                                          <div class="form__form-row col-1">
                                              <div class="form__form-row col-1">
                                                  <div>
                                                      <div class="form-element col-2" name="position-meta.postalCode">
                                                          <label class="">Height</label>
                                                          <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_height" placeholder="Height">
                                                      </div>
                                                      <div class="form-element col-2" name="position-meta.city">
                                                          <label class="">Weight</label>
                                                          <input type="text" tabindex="" class="data-hj-whitelist" placeholder="Weight" autocomplete="off" name="res_weight">
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
                                                                  <div class="form-element date--day" name="position-meta.dateOfBirthDay">
                                                                      <label class="">
                                                                          <div  >Suffix</div>
                                                                      </label>
                                                                      <select class="form-select-custom" name="res_suffix">
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
                                                                  <div class="form-element date--month" name="position-meta.dateOfBirthMonth">
                                                                      <label class="">
                                                                          <div  >Age</div>
                                                                      </label><br>
                                                                      <input type="text" style="width:90px;" class="data-hj-whitelist" name="res_age" value="0" id="res_age">


                                                                  </div>
                                                                  <div class="form-element date--year" name="position-meta.dateOfBirthYear">
                                                                      <label class="">Gender *</label>
                                                                      <select required class="form-select-custom" name="res_gender">

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
                                                                  <select required class="form-select-custom" name="res_civilstatus">
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
                                                                      <?php
                                                                      $res=mysqli_query($db,"SELECT * FROM ref_country where country_ID=169");
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
                                                              <select class="form-select-custom" name="res_occupationstatus">
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
                                                                  <?php
                                                                  $res=mysqli_query($db,"SELECT * FROM ref_occupation");
                                                                  while ($row=mysqli_fetch_array($res))
                                                                  {
                                                                      ?>
                                                                      <option><?php echo $row["occupation_Name"];?></option>

                                                                      <?php
                                                                  }

                                                                  ?>
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
                                                  <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_unit" placeholder="Unit Room Floor">
                                              </div>
                                              <div class="form-element col-2" name="position-meta.phoneNumber">
                                                  <label class="">Building Name</label>
                                                  <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_building" placeholder="Building Name">
                                              </div>
                                          </div>
                                          <div class="form__form-row col-1">
                                              <div class="form__form-row col-1">
                                                  <div>
                                                      <div class="form-element col-2" name="position-meta.postalCode">
                                                          <label class="">Lot</label>
                                                          <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_lot" placeholder="Lot">
                                                      </div>
                                                      <div class="form-element col-2" name="position-meta.city">
                                                          <label class="">Block</label>
                                                          <input type="text" tabindex="" class="data-hj-whitelist" placeholder="Block" autocomplete="off" name="res_block" placeholder="Block">
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
                                                                  <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_phase" placeholder="Phase">
                                                              </div>
                                                              <div class="form-element col-2" name="position-meta.placeOfBirth">
                                                                  <label class="">House Number</label>
                                                                  <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_houseno" placeholder="House No.">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="form__form-row form-element--mobile col-1" style="margin-bottom: 0px;">
                                                          <div class="col-1">
                                                              <div class="form-element col-2" name="position-meta.phoneNumber">
                                                                  <label class="">Street</label>
                                                                  <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_street" placeholder="Street">
                                                              </div>
                                                              <div class="form-element col-2" name="position-meta.placeOfBirth">
                                                                  <label class="">Subdivision</label>
                                                                  <input type="text" tabindex="" class="data-hj-whitelist" autocomplete="off" name="res_subd" placeholder="Subdivision" >
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
                                                              <select class="form-select-custom" name="res_purokno">
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
                                                              <select class="form-select-custom" name="res_address">
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
                                  <button type="submit" class="btn__large button--purple">
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

















<script>
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
    function calculateAge(age){
        var dob = new Date(age);
        var month_diff = Date.now() - dob.getTime();
        var age_dt = new Date(month_diff);
        var year = age_dt.getUTCFullYear();

        var age = Math.abs(year - 1970);

        //display the calculated age
        return age;
    }

</script>
  </body>  
</html>