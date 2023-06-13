
<?php
include_once '../connection.php';
$sql_Problema = "SELECT brgy_Name, citymun_Name, province_Name
                  FROM brgy_address_info";
$result_Problema = mysqli_query($db, $sql_Problema);
$resultCheck_Problema = mysqli_num_rows($result_Problema);

if($resultCheck_Problema >0){
    while($row = mysqli_fetch_assoc($result_Problema)){
        $head_brgy_Name = $row['brgy_Name'];
        $citymun_disp = $row['citymun_Name'];
        $province_disp =$row ['province_Name'];
    }
}
?>
<?php

$ctcNo = $_GET['crc'];
$orNo = $_GET['or'];
$res_ID = $_GET['res_ID'];
$sqlget_info = "SELECT * FROM resident_detail
                	LEFT JOIN resident_address ON resident_detail.res_ID = resident_address.res_ID
                    LEFT JOIN ref_marital_status ON resident_detail.marital_ID = ref_marital_status.marital_ID
                    LEFT JOIN ref_country ON resident_detail.country_ID = ref_country.country_ID
                    LEFT JOIN ref_gender ON resident_detail.gender_ID = ref_gender.gender_ID
                    LEFT JOIN ref_religion ON resident_detail.religion_ID = ref_religion.religion_ID
                    LEFT JOIN ref_brgy ON resident_address.brgy_ID = ref_brgy.brgy_ID
                    LEFT JOIN ref_citymun ON resident_address.citymun_ID = ref_citymun.citymun_ID
                    LEFT JOIN ref_province ON resident_address.province_ID = ref_province.province_ID
                    WHERE resident_detail.res_ID = '$res_ID'";

$result_info = mysqli_query($db, $sqlget_info);
$resultCheck_info = mysqli_num_rows($result_info);

if($resultCheck_info > 0){
    while($row = mysqli_fetch_assoc($result_info)){
        $hN= $row['address_Unit_Room_Floor_num'];
        $first= $row['res_fName'];
        $middleName = $row['res_mName'];
        $lastName = $row['res_lName'];
        $civilStatus = $row['marital_Name'];
        $house_No = $row['address_House_No'];
        $street_Name = $row['address_Street_Name'];
        $phase_No = $row['address_Phase_No'];
        $subd_Name = $row['address_Subdivision'];

    }
}
include_once "OfficialsModel.php";



?>

<!--logo-->

<!DOCTYPE>
<html>
<header>
    <title>Barangay Clearance</title>
    <meta http-equiv="Content-Type" content ="text/html"; charset="utf-8" />
    <script type="text/javascript" src="../js/jspdf.min.js"></script>
    <script type="text/javascript" src="../js/html2canvas.js"></script>
    <script type="text/javascript">
        function genPDF() {
            html2canvas(document.getElementById('main-container')).then(function(canvas) {
                scale: 1;

                var img = canvas.toDataURL('image/png', 1.0);
                if(canvas.width > canvas.height){
                    doc = new jsPDF('l', 'mm', [canvas.width, canvas.height]);
                }
                else{
                    doc = new jsPDF('p', 'mm', [canvas.height, canvas.width]);
                }

                doc.addImage(img, 'JPEG',-4, 20, canvas.width, canvas.height);
                doc.save('BarangayClearance.pdf'); 
 pdfData = doc.output('blob'); 
 const formData = new FormData(); 
 formData.append('pdfdata', pdfData); 
  formData.append('Created_at',' <?php echo $_GET['created'] ?>'); 
 formData.append('Res_id','<?php echo  $_GET['resId']?>'); 
 var xhr = new XMLHttpRequest(); 
 xhr.onreadystatechange = function() { 
     if (xhr.readyState === 4 && xhr.status === 200) { 
 alert(xhr.responseText); 
 }}; 
 xhr.open('POST', 'savepdf.php', true); 
 xhr.send(formData);
            });﻿
        }
    </script>
    <style> .info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }

    <?php

    include_once "OfficialsDesign.css";

    ?>

    </style>
</header>
<body>


<div id="main-container">

    <div class="logo-holder">
        <?php
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultlogo['logo_img'] ).'"/>';
        ?>
    </div>
    <div class="logo-holder1">
        <?php
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultlogo1['logo_img'] ).'"/>';
        ?>
    </div>

    <div class="header" style='font-family: "Times New Roman", Times, serif;'>
        Republic of the Philippines<br/>
        Province of <?php echo $province_disp;?><br/>
        <b>CITY OF <?php echo $citymun_disp;?></b><br/>

    </div>


    <div class="header tag" style="font-size:25px;">
        <span id="" style='font-family: "Times New Roman", Times, serif;'>BARANGAY <?php echo $head_brgy_Name;?></span><br>
        OFFICE OF THE SANGGUNIANG BARANGAY
    </div>

    <div class="c-wrapper" style="
    display: flex;
">
        <?php

        include_once "OfficialsTable.php";

        ?>
        <div class="content" style="
    width: 70%;
    padding-top:0px;
">
            <div class="header tag1">
                BARANGAY CLEARANCE
            </div>

            <div id="par" style='font-family: Arial, Helvetica, sans-serif; font-size:16px;font-weight: 300;'>
TO WHOM IT MAY CONCERN:<br><br>
                &emsp;&emsp;&emsp;This is to certify that Mr. / Mrs. <span id="name-input"><?php echo $first." ".$middleName." ".$lastName; ?></span> of legal age,
                <span id="name-input"><?php echo $civilStatus?></span> is a bonafide resident of Barangay <span id="name-input">
              <?php echo $head_brgy_Name." ".$citymun_disp.","." ".$province_disp;?></span>.<br><br>

                &emsp;&emsp;&emsp;This certify further that he / she is a known to be a person of good moral character, law abiding
                citizen and has not been involved nor convicted in any crime.<br><br>

                &emsp;&emsp;&emsp;This certfication is issued upon the request of the aforementioned person for any legal purposes or
                intent may serve him / her best.  <br><br>

                &emsp;&emsp;&emsp;Issued this <span id="name-input"><?php echo $datedate?></span> at <span id="name-input"><?php echo $head_brgy_Name." ".$citymun_disp.",".$province_disp;?></span>.

            </div>

            <div class="signature signline center margint120">APPLICANT'S SIGNATURE</div>
            <div class="thumb-container" style="display:flex;flex-direction: column;align-items: center;">
                <div id="thumb">
                </div>
                <div id="thumb-caption" class="center">
                    Right Thumb Mark
                </div>
            </div>
            <br><br><br>

            <div class="ctc">
                CTC NO. <span id="name-input"><?php echo $ctcNo;?></span><br>
                ISSUED ON: <span id="name-input"><?php echo $datedate?></span><br>
                ISSUED AT: <span id="name-input"><?php echo $head_brgy_Name." ".$citymun_disp.","." ".$province_disp;?></span>.<br>
                O.R. NO. <span id="name-input"><?php echo $orNo;?></span><br>

                </div>
            <div class="puno">
                <span id="name-input"><?php echo $capfName." ".$capmInitial."."." ".$caplName;?></span><br>
                &emsp;PUNONG BARANGAY
            </div>
            <!--<div class = "ctrl">Control #: <?php /*echo $ctrlout;*/?>
            </div>-->
            <center><div class="seal">
                <i>NOTE: not valid without a seal</i>
            </div></center>

        </div>
        </div>
    </div>
    <div>


    <h3><a href="javascript:genPDF();" data-html2canvas-ignore="true">Approve and Download PDF</a><h3>


</body>

</html>