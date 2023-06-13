<?php
require_once('db.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Barangay Officials</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <style> .info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }</style>
    <link rel="stylesheet" type="text/css" href="resources\css\custom_2.css">
    <style type="text/css">
        .col-sm-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        table,tr,td,th{

            border:solid 1px;
            padding: 5px;
            text-align: center;

        }
        h4{
            padding:10px;
            margin:0px!important;;
        }
        p{
            padding:10px;
            margin:0px!important;;
        }
        .card {

            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 200px !important;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
            padding: 2px 16px;
        }
    </style>

</head>

<body style="font-family: Century Gothic">
<div style="display:flex" >
   <div style="width:38%;height:100%">
        <h2>Head Officials</h2>
        <?php

        $sql_capt = mysqli_query($db,"SELECT rd.res_Img, rd.res_fName, rd.res_mName, rd.res_lName, rs.suffix, rg.gender_Name, bod.official_Start, bod.official_End, rp.position_Name FROM resident_detail rd INNER JOIN brgy_official_detail bod ON rd.res_ID = bod.res_ID INNER JOIN ref_suffixname rs ON rd.suffix_ID = rs.suffix_ID INNER JOIN ref_gender rg on rd.gender_ID = rg.gender_ID INNER JOIN ref_position rp ON rd.position_ID = rp.position_ID WHERE rp.position_ID = 2 ORDER BY bod.official_ID DESC LIMIT 1");

        $sql_sec = mysqli_query($db,"SELECT rd.res_Img, rd.res_fName, rd.res_mName, rd.res_lName, rs.suffix, rg.gender_Name, bod.official_Start, bod.official_End, rp.position_Name FROM resident_detail rd INNER JOIN brgy_official_detail bod ON rd.res_ID = bod.res_ID INNER JOIN ref_suffixname rs ON rd.suffix_ID = rs.suffix_ID INNER JOIN ref_gender rg on rd.gender_ID = rg.gender_ID INNER JOIN ref_position rp ON rd.position_ID = rp.position_ID WHERE rp.position_ID = 3 ORDER BY bod.official_ID DESC LIMIT 1");

        $sql_tr = mysqli_query($db,"SELECT rd.res_Img, rd.res_fName, rd.res_mName, rd.res_lName, rs.suffix, rg.gender_Name, bod.official_Start, bod.official_End, rp.position_Name FROM resident_detail rd INNER JOIN brgy_official_detail bod ON rd.res_ID = bod.res_ID INNER JOIN ref_suffixname rs ON rd.suffix_ID = rs.suffix_ID INNER JOIN ref_gender rg on rd.gender_ID = rg.gender_ID INNER JOIN ref_position rp ON rd.position_ID = rp.position_ID WHERE rp.position_ID = 4 ORDER BY bod.official_ID DESC LIMIT 1");

        $sql_k = mysqli_query($db,"SELECT rd.res_Img, rd.res_fName, rd.res_mName, rd.res_lName, rs.suffix, rg.gender_Name, bod.official_Start, bod.official_End, rp.position_Name FROM resident_detail rd INNER JOIN brgy_official_detail bod ON rd.res_ID = bod.res_ID INNER JOIN ref_suffixname rs ON rd.suffix_ID = rs.suffix_ID INNER JOIN ref_gender rg on rd.gender_ID = rg.gender_ID INNER JOIN ref_position rp ON rd.position_ID = rp.position_ID WHERE rp.position_Name != 'Barangay Captain' and rp.position_Name != 'Barangay Treasurer' and rp.position_Name != 'Barangay Secretary' GROUP BY rp.position_Name");


        ?>

        <div style="display:flex;flex-direction: column;height:100%;justify-content: space-between;">
            <div style="width:100% ;display:flex;justify-content: center;height:400px;">
        <?php

        while($row = mysqli_fetch_array($sql_capt))

        {

            ?>
            <?php
            $image_data = $row['res_Img'];

            if ($image_data == null) {
                $encoded_image = "../asset/requestImg/{$encoded_image}";
                $img = "<img src='$encoded_image' style='width:200px; height:200px'></img>";
            }
            else{
                $encoded_image = $image_data;
                $img = "<img src='../asset/requestImg/{$encoded_image}' style='width:200px; height:200px;'></img>";
            }

            ?>


            <div class="card" style="height:339px;">
                <?PHP

                echo $img;

                ?>
                <div style="background-color:#14aa6c;color:white;height:139px">
                    <h4><b><?php
                            echo  $row['res_fName']." ".$row['res_mName']." ".$row['res_lName']." ".$row['suffix'];
                            ?></b></h4>
                    <p><?php echo $row['position_Name'];?></p>
                </div>
                <div style="text-align:center;background-color :#14aa6c;color:white;">
                    <a href="updatenew.php<?php echo '?pos='.$row['position_Name'];?>" style="font-size:14px; color:red">Replace Personnel</a></div>
            </div>


            <?php
        }
        ?>
            </div>
            <div style="width:100% ;display:flex;justify-content: space-around;height:400px;">

        <?php

        while($row = mysqli_fetch_array($sql_sec))

        {

            ?>
            <?php
            $image_data = $row['res_Img'];

            if ($image_data == null) {
                $encoded_image = "images/default.png";
                $img = "<img src='$encoded_image' style='width:200px; height:200px'></img>";
            }
            else{
                $encoded_image = base64_encode($image_data);
                $img = "<img src='data:image/jpeg;base64,{$encoded_image}' style='width:200px; height:200px;'></img>";
            }

            ?>

            <div class="card" style="height:339px;">
                <?PHP

                echo $img;

                ?>
                <div style="background-color:#14aa6c;color:white;height:139px"">
                    <h4><b><?php
                            echo  $row['res_fName']." ".$row['res_mName']." ".$row['res_lName']." ".$row['suffix'];
                            ?></b></h4>
                    <p><?php echo $row['position_Name'];?></p>
                </div>
                <div style="text-align:center; background-color:#14aa6c;color:white;">
                <a href="updatenew.php<?php echo '?pos='.$row['position_Name'];?>" style="font-size:14px; color:red">Replace Personnel</a>
                </div>
            </div>


            <?php
        }
        ?>


        <?php

        while($row = mysqli_fetch_array($sql_tr))

        {

            ?>
            <?php
            $image_data = $row['res_Img'];

            if ($image_data == null) {
                $encoded_image = "images/default.png";
                $img = "<img src='$encoded_image' style='width:200px; height:200px'></img>";
            }
            else{
                $encoded_image = base64_encode($image_data);
                $img = "<img src='data:image/jpeg;base64,{$encoded_image}' style='width:200px; height:200px;'></img>";
            }

            ?>
            <div class="card" style="height:339px;">
                <?PHP

                echo $img;

                ?>
                <div style="background-color:#14aa6c;color:white;height:139px"">
                    <h4><b><?php
                            echo  $row['res_fName']." ".$row['res_mName']." ".$row['res_lName']." ".$row['suffix'];
                            ?></b></h4>
                    <p><?php echo $row['position_Name'];?></p>


                </div>
            <div style="text-align:center; background-color:#14aa6c;color:white;">
            <a href="updatenew.php<?php echo '?pos='.$row['position_Name'];?>" style="font-size:14px; color:red">Replace Personnel</a>
            </div>
            </div>
            </div>
            <?php
        }
        ?>

   </div>

   </div>









    <div style="width:60%;height:100%">
        <h2>Barangay Officers</h2>
        <div style="height:100%;display:flex;flex-direction: column;">
        <?php
        $counter =1;
        $length = mysqli_num_rows($sql_k);
        while($row = mysqli_fetch_array($sql_k))

        {


        if($counter % 4 == 1){
            echo "<div class='row' style='height:400px'>";
        }




            ?>
            <?php
            $image_data = $row['res_Img'];

            if ($image_data == null) {
                $encoded_image = "images/default.png";
                $img = "<img src='$encoded_image' style='width:200px; height:200px'></img>";
            }
            else{
                $encoded_image = base64_encode($image_data);
                $img = "<img src='data:image/jpeg;base64,{$encoded_image}' style='width:200px; height:200px;'></img>";
            }

            ?>
            <div class="col-sm-3" style="">
                <div class="card" style="width:200; height: 189;">
                    <?PHP

                    echo $img;

                    ?>
                    <div style="background-color:#14aa6c;color:white;height:139px">
                        <h4><b><?php

                                echo  $row['res_fName']." ".$row['res_mName']." ".$row['res_lName']." ".$row['suffix'];
                                ?></b></h4>
                        <p><?php echo "Barangay Kagawad - "; echo $row['position_Name'];?></p>

                    </div>
                    <div style="text-align:center; background-color:#14aa6c;color:white;">
                    <a href="updatenew.php<?php echo '?pos='.$row['position_Name'];?>" style="font-size:14px; color:red">Replace Personnel</a> </div>
                </div>

            </div>

            <?php




            if($counter % 4 == 0){
            echo '</div>';
            }


        $counter++;


        }
        ?>
        </div>
    </div>













</div>
</body>
</html>