
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
$Grantedto = $_GET['Grantedto'];
$infrastracture = $_GET['infrastracture'];
$Description = $_GET['Description'];
$Location = $_GET['Location'];
$Tct = $_GET['Tct'];
$Survey = $_GET['Survey'];
$Pin = $_GET['Pin'];
$Arpn = $_GET['Arpn'];
$area = $_GET['area'];
$Purpose = $_GET['Purpose'];
$Issued = $_GET['Issued'];
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
 formData.append('Res_id',  "<?php echo $_GET['resId'] ?>"); 
 formData.append('Created_at', "<?php echo $_GET['created'] ?>"); 
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
                BARANGAY CLEARANCE BUILDING
            </div>

            <div id="par" style='font-family: Arial, Helvetica, sans-serif; font-size:16px;font-weight: 300;'>
TO WHOM IT MAY CONCERN:<br><br>
                Clearance is hereby granted to <strong><?php echo $Grantedto; ?></strong>
                who will construct a <?php echo $infrastracture; ?> located at <?php echo $Location; ?>
                w/TCT No. <?php echo $Tct; ?>, Survey No. <?php echo $Survey; ?>, PIN: <?php echo $Pin; ?>, ARPN <?php echo $Arpn; ?> with a total lot area of <?php echo $area; ?> sqm.
                <br><br>Clearance is being issued based on the submitted
                required documents of <strong><?php echo $Grantedto; ?></strong> for the purpose of securing the <?php echo $Purpose; ?> and/or building permit from the City Engineer/Building Officials.
                <br><br>
                &nbsp Issued this <span id="name-input"><?php echo $datedate?></span> at <span id="name-input"><?php echo $head_brgy_Name." ".$citymun_disp.",".$province_disp;?></span>.

            </div>

            <br><br><br>

            <br><br><br>

            <div class="ctc">
                ISSUED ON: <span id="name-input"><?php echo $datedate?></span><br>
                ISSUED AT: <span id="name-input"><?php echo $head_brgy_Name." ".$citymun_disp.","." ".$province_disp;?></span>.<br>

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