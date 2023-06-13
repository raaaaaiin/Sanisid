
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
$lastName = $_GET["lastName"];
$orNumber = $_GET["orNumber"];
$ctcNumber = $_GET["ctcNumber"];
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
                BARANGAY CLEARANCE TREE CUTTING
            </div>

            <div id="par" style='font-family: Arial, Helvetica, sans-serif; font-size:16px;font-weight: 300;'>
TO WHOM IT MAY CONCERN:<br><br>
                "Barangay Clearance to Cut Tree

                This clearance is being issued to <?php echo $lastName?>, for the purpose of cutting [number of trees] trees located at [Location of Trees]. The trees being cut have been inspected and found to be [healthy/diseased].

                This clearance is granted under the following conditions:

                The cutting of trees shall be done in accordance with the relevant laws and regulations of the local government, including the proper disposal of the cut trees.

                The applicant shall take necessary measures to prevent soil erosion, landslides, and other environmental hazards that may arise as a result of the cutting of trees.

                The applicant shall be responsible for any damages or injuries that may occur as a result of the cutting of trees.

                This clearance is granted for a period of [number of days] days and is subject to revocation if the above conditions are not met.


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
                CTC NO. <span id="name-input"><?php echo $ctcNumber;?></span><br>
                ISSUED ON: <span id="name-input"><?php echo $datedate?></span><br>
                ISSUED AT: <span id="name-input"><?php echo $head_brgy_Name." ".$citymun_disp.","." ".$province_disp;?></span>.<br>
                O.R. NO. <span id="name-input"><?php echo $orNumber ;?></span><br>

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