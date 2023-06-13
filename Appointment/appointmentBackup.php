<?php
include("../db.php");
session_start();
$position = $_SESSION['position'];
$id = $_SESSION['id'];
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
?><html>


<head>
    <style> .info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }
        *{color:#344468;scrollbar-width:thin;scrollbar-color:var(--scroll-bar-color) var(--scroll-bar-bg-color)}::-webkit-scrollbar{width:12px;height:12px}::-webkit-scrollbar-track{background:var(--scroll-bar-bg-color)}::-webkit-scrollbar-thumb{background-color:var(--scroll-bar-color);border-radius:20px;border:3px solid var(--scroll-bar-bg-color)}@font-face{font-family:'Product Sans';font-style:normal;font-weight:400;src:local('Product Sans'),url(../../Font/ProductSans-Regular.woff) format('woff')}*,::after,::before{box-sizing:border-box}html{font-family:'Product Sans'!important;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}header{display:block}body{margin:0;font-family:'Product Sans';font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}[tabindex="-1"]:focus:not(:focus-visible){outline:0!important}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}b{font-weight:bolder}a{color:#007bff;text-decoration:none;background-color:transparent}a:hover{color:#0056b3;text-decoration:underline}a:not([href]):not([class]){color:inherit;text-decoration:none}a:not([href]):not([class]):hover{color:inherit;text-decoration:none}table{border-collapse:collapse}label{display:inline-block;margin-bottom:.5rem}button{border-radius:0}button:focus:not(:focus-visible){outline:0}button,input,select{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}[role=button]{cursor:pointer}select{word-wrap:normal}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:none}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}[hidden]{display:none!important}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:2.5rem}.h2,h2{font-size:2rem}.h3,h3{font-size:1.75rem}.h4,h4{font-size:1.5rem}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}.display-1{font-size:6rem;font-weight:300;line-height:1.2}.display-2{font-size:5.5rem;font-weight:300;line-height:1.2}.display-3{font-size:4.5rem;font-weight:300;line-height:1.2}.display-4{font-size:3.5rem;font-weight:300;line-height:1.2}.list-inline{padding-left:0;list-style:none}.container,.ctnr-fld{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.r{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.c,.c-1,.c-10,.c-11,.c-12,.c-2,.c-3,.c-4,.c-5,.c-6,.c-7,.c-8,.c-9{position:relative;width:100%;padding-right:15px;padding-left:15px}.c{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.c-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.c-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.c-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.c-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.c-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.c-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.c-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.c-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.c-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.c-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.c-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.c-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.table{width:100%;margin-bottom:1rem;color:#212529}.table-responsive{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.c-form-label{padding-top:calc(.375rem + 1px);padding-bottom:calc(.375rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.5}.form-text{display:block;margin-top:.25rem}.form-r{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-5px;margin-left:-5px}.form-r>.c,.form-r>[class*=c-]{padding-right:5px;padding-left:5px}.form-inline{display:-ms-flexbox;display:flex;-ms-flex-flow:r wrap;flex-flow:r wrap;-ms-flex-align:center;align-items:center}@media (min-width:576px){.form-inline label{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;margin-bottom:0}}.alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}@-webkit-keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}.media{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start}.media-body{-ms-flex:1;flex:1}@-webkit-keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1;-webkit-transform:none;transform:none}}@keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1;-webkit-transform:none;transform:none}}.align-baseline{vertical-align:baseline!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.border{border:1px solid #dee2e6!important}.border-right{border-right:1px solid #dee2e6!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.border-left{border-left:1px solid #dee2e6!important}.border-0{border:0!important}.border-right-0{border-right:0!important}.border-bottom-0{border-bottom:0!important}.border-left-0{border-left:0!important}.border-white{border-color:#fff!important}.d-none{display:none!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-table{display:table!important}.d-tbrw{display:tbrw!important}.dflx{display:-ms-flexbox!important;display:flex!important}.d-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}.flex-r{-ms-flex-direction:r!important;flex-direction:r!important}.flex-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.justify-content-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.align-items-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-center{-ms-flex-align:center!important;align-items:center!important}.align-items-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-content-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.float-left{float:left!important}.float-right{float:right!important}.float-none{float:none!important}.user-select-all{-webkit-user-select:all!important;-moz-user-select:all!important;user-select:all!important}.user-select-none{-webkit-user-select:none!important;-moz-user-select:none!important;-ms-user-select:none!important;user-select:none!important}.overflow-hidden{overflow:hidden!important}.position-relative{position:relative!important}@supports ((position:-webkit-sticky) or (position:sticky)){.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}.shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important}.shadow-none{box-shadow:none!important}.hght-25{width:25%!important}.hght-50{width:50%!important}.hght-75{width:75%!important}.hght-100{width:100%!important}.hght-25{height:25%!important}.hght-50{height:50%!important}.hght-75{height:75%!important}.hght-100{height:100%!important}.m-0{margin:0!important}.ml-0{margin-left:0!important}.m-1{margin:.25rem!important}.ml-1{margin-left:.25rem!important}.m-2{margin:.5rem!important}.ml-2{margin-left:.5rem!important}.m-3{margin:1rem!important}.ml-3{margin-left:1rem!important}.m-4{margin:1.5rem!important}.ml-4{margin-left:1.5rem!important}.m-5{margin:3rem!important}.ml-5{margin-left:3rem!important}.p-0{padding:0!important}.px-0{padding-right:0!important}.px-0{padding-left:0!important}.p-1{padding:.25rem!important}.px-1{padding-right:.25rem!important}.px-1{padding-left:.25rem!important}.p-2{padding:.5rem!important}.px-2{padding-right:.5rem!important}.px-2{padding-left:.5rem!important}.p-3{padding:1rem!important}.px-3{padding-right:1rem!important}.px-3{padding-left:1rem!important}.p-4{padding:1.5rem!important}.px-4{padding-right:1.5rem!important}.px-4{padding-left:1.5rem!important}.p-5{padding:3rem!important}.px-5{padding-right:3rem!important}.px-5{padding-left:3rem!important}

        .text-justify{text-align:justify!important}  .text-nowrap{white-space:nowrap!important}  .text-left{text-align:left!important}  .text-right{text-align:right!important}  .text-center{text-align:center!important}  .text-uppercase{text-transform:uppercase!important}  .text-white{color:#fff!important}  .text-body{color:#212529!important}  .text-white-50{color:rgba(255,255,255,.5)!important}  .text-decoration-none{text-decoration:none!important}@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}  a:not(.btn){text-decoration:underline}  h2,h3,p{orphans:3;widows:3}  h2,h3{page-break-after:avoid}@page{size:a3}  body{min-width:992px!important}  .container{min-width:992px!important}  .table{border-collapse:collapse!important}}
    </style>

    <style> .info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }
        .button{
            align-items: center;
            appearance: none;
            background-color: #FCFCFD;
            border-radius: 4px;
            border-width: 0;
            box-sizing: border-box;
            color: #36395A;
            cursor: pointer;
            display: inline-flex;
            font-family: &quot;JetBrains Mono&quot;,monospace;
            height: 30px;
            justify-content: center;
            line-height: 1;
            list-style: none;
            overflow: hidden;
            padding-left: 16px;
            padding-right: 16px;
            position: relative;
            text-align: left;
            text-decoration: none;
            transition: box-shadow .15s,transform .15s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            will-change: box-shadow,transform;
            font-size: 18px; }
        .app{
            box-shadow: rgb(45 35 66 / 40%) 0 2px 4px, rgb(45 35 66 / 30%) 0 7px 13px -3px, #14aa6c 0 -3px 0 inset;
        }
        .rej{
            box-shadow: rgb(45 35 66 / 40%) 0 2px 4px, rgb(45 35 66 / 30%) 0 7px 13px -3px, #aa1414 0 -3px 0 inset;
        }
        body{
            background-color:#f9fafe !important;
        }
        .rspnsv-tbl li {
            border-radius: 10px;
            padding: 5px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        .rspnsv-tbl .tblhdr {
            background-color:#f9fafe !important;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }
        .rspnsv-tbl .tbrw {
            background-color: #fbfdff;
            box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1);
        }
        .rspnsv-tbl .tbrw:hover{
            box-shadow: 0px 0px 9px 0px #1147c1;
        }
        .rspnsv-tbl .c-1 {
            flex-basis: 10%;
        }
        .rspnsv-tbl .c-2 {
            flex-basis: 40%;
        }
        .rspnsv-tbl .c-3 {
            flex-basis: 25%;
        }
        .rspnsv-tbl .c-4 {
            flex-basis: 25%;
        }
        .rspnsv-tbl .selected{
            background-color:#f3f6fd !important;
        }
        .rspnsv-tbl .b{

        }
        .selectedItem{
            background-color: #f3f6fd !important;
        }
        @media all and (max-width: 767px) {
            .rspnsv-tbl .tblhdr {
                display: none;
            }
            .rspnsv-tbl li {
                display: block;
            }
            .rspnsv-tbl .c {
                flex-basis: 100%;
            }
            .rspnsv-tbl .c {
                display: flex;
                padding: 10px 0;
            }
            .rspnsv-tbl .c:before {
                color: #6c7a89;
                padding-right: 10px;
                content: attr(data-label);
                flex-basis: 50%;
                text-align: right;
            }
        }

        .pstbr {
            margin: 0;
            padding: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;
            float: left;
            width: 100%;
            background-color: #fff;
            border-left: 1px solid #e4e4e4;
            border-right: 1px solid #e4e4e4;
            border-bottom: 1px solid #e4e4e4;
            margin-bottom: 20px;
            border-radius: 15px;
        }
    </style>

</head>
<body  style="font-family: Roboto, sans-serif !important;">




<div clas="wrpr">
    <div class = "ctnr-fld p-4">
        <style>.info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }</style> <div class="info">
            <p>&nbsp; <strong>Instruction!</strong> This page is used to decide whether to approve or reject a appointment.
                <br>&nbsp;<strong> First Step </strong> Manually check the record schedule first if there are available slot for that day.
                <br>&nbsp;<strong> Second Step </strong> if the resident is good to go for an appointment click approve then set the time and date.
                <br>&nbsp;<strong> Third Step </strong> if the resident is not legible to take an appointment click reject and put the reason.
                <br>&nbsp;<strong> Note </strong> This will send an email to the resident with the all basic information
            </p></div>
        <div class="r">
            <div class="c-12 ">
                <span ><h1 class="ml-4">Appointments</h1></span>
                <ul class="rspnsv-tbl p-0">
                    <li class="tblhdr a">
                        <div class="c c-1">Status</div>
                        <div class="c c-4">Name</div>
                        <div class="c c-1">Gender</div>
                        <div class="c c-1">DOB</div>
                        <div class="c c-1">Date</div>
                        <div class="c c-1">Time</div>
                        <div class="c c-2">Purpose</div>
                        <div class="c c-1">Action</div>
                    </li>




                    <?php
                    if($position != "Resident"){
                        ?>
                        <?php
                        $sql_ret = "SELECT * FROM appointments order by  id desc";
                        $result_ret = mysqli_query($db, $sql_ret);
                        $resultCheck_ret = mysqli_num_rows($result_ret);

                        if($resultCheck_ret > 0){
                            while($row_ret = mysqli_fetch_assoc($result_ret)){
                                ?>
                                <li class="tbrw b pstbr"style="    align-items: center;">
                                    <div class="c c-1">
                                         <span style="<?php if($row_ret['status'] == "Rejected")
                                         {
                                             echo("color:red");

                                         }elseif($row_ret['status'] == "Approved"){
                                             echo("color:green");
                                         }else{
                                             echo("color:gray");
                                         }

                                         ?>"><?php echo $row_ret['status']?></span>
                                    </div>
                                    <div class="c c-4"><span><?php echo $row_ret['Name']?></span><br></div>
                                    <div class="c c-1"><span><?php echo $row_ret['gender']?></span></div>
                                    <div class="c c-1"><span><?php echo $row_ret['dob']?></span></div>

                                    <div class="c c-1"><span><?php echo $row_ret['app_date']?></span></div>
                                    <div class="c c-1"><span><?php echo $row_ret['time']?></span></div>
                                    <div class="c c-2"><span><?php echo $row_ret['purpose']?></span></div>
                                    <div class="c c-1">



                                        <form class="dflx m-0 hght-100 hght-100" method="post">
                                            <input style="display: none;" value="<?php echo $row_ret['id']?>" name="selected"/>
                                            <input type="submit" name="approved"
                                                   class="button m-1 app" value="✔" />

                                            <input type="submit" name="reject"
                                                   class="button m-1 rej" value="✖" />
                                        </form>
                                    </div>
                                </li>
                                <?php
                            }
                        }
                    }else{
                        ?>


                        <?php
                        $sql_ret = "SELECT * FROM appointments where requester=$id order by id desc";
                        $result_ret = mysqli_query($db, $sql_ret);
                        $resultCheck_ret = mysqli_num_rows($result_ret);

                        if($resultCheck_ret > 0){
                            while($row_ret = mysqli_fetch_assoc($result_ret)){
                                ?>
                                <li class="tbrw b pstbr"style="    align-items: center;">

                                    <div class="c c-1">
                                        <span style="<?php if($row_ret['status'] == "Rejected" || $row_ret['status'] == "Deleted")
                                        {
                                            echo("color:red");

                                        }elseif($row_ret['status'] == "Approved"){
                                            echo("color:green");
                                        }else{
                                            echo("color:gray");
                                        }

                                        ?>"><?php echo $row_ret['status']?></span>
                                    </div>
                                    <div class="c c-4"><span><?php echo $row_ret['Name']?></span><br></div>
                                    <div class="c c-1"><span><?php echo $row_ret['gender']?></span></div>
                                    <div class="c c-1"><span><?php echo $row_ret['dob']?></span></div>

                                    <div class="c c-1"><span><?php echo $row_ret['app_date']?></span></div>
                                    <div class="c c-1"><span><?php echo $row_ret['time']?></span></div>
                                    <div class="c c-2"><span><?php echo $row_ret['purpose']?></span></div>
                                    <div class="c c-1">
<form method="post">
                                            <input name="delete" type="submit" value="Delete"></span>
                                            <input name="id" type="text" value="<?php echo $row_ret['id']?>" hidden></span>
                                            <input name="status" type="text"  value="<?php echo $row_ret['status']?>" hidden></span>

                                        </form>
                                    </div>





                                </li>

                                <?php
                            }
                        }
                    }

                    ?>


                </ul>

            </div>
        </div>
    </div>
</div>














<?php

if(array_key_exists('approved', $_POST)) {
    approved();
}
else if(array_key_exists('reject', $_POST)) {
    reject();
}
function approved() {

    include("../db.php");
    $value = $_POST['selected'];
    $sql = "UPDATE appointments SET status='Approved' WHERE id=$value" or die("Errors");
    if ($db->query($sql) === TRUE)
    {


        sendMail('marcraineer0089@gmail.com','Raineer','06/27/2000','Barangay Clearance Good Moral','Approved','4');
        echo "<script>alert('You successfully approved an appointment');</script>";

    }


}
function reject() {
    include("../db.php");
    $value = $_POST['selected'];
    $sql = "UPDATE appointments SET status='Rejected' WHERE id=$value" or die("Errors");

    if ($db->query($sql) === TRUE)
    {


        sendMail('marcraineer0089@gmail.com','Raineer','06/27/2000','Barangay Clearance Good Moral','Rejected','4');
        echo "<script>alert('You have reject an appointment');</script>";

    }

}

function sendMail($email,$name,$date,$purpose,$verdict,$id){




    include 'PHPMailer-6.2.0/src/PHPMailer.php';
    include 'PHPMailer-6.2.0/src/SMTP.php';
    include 'PHPMailer-6.2.0/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer;

    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->IsHTML(true);
    $mail->setFrom('jcrueldad@student.fatima.edu.ph', 'Mailer');
    $mail->Username = "jcrueldad@student.fatima.edu.ph";
    $mail->Password = "khwpffoqwomgvpzb";
    $mail->Priority = 1;
    $mail->WordWrap = 50;
    $mail->SMTPDebug = 1;
    $mail->addAddress("$email");
    $mail->Subject = 'Barangay San Isidro Appointment';
    $ifverdict ="";
    if($verdict == "Approved"){
        $ifverdict ="Here's a QR Code Just show it to Barangay San Isidro staff to let them manage your request<br>
<br><img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl="."http://$_SERVER[HTTP_HOST]/Resident/residentRegistration.php?crypt=$output"."%2F&choe=UTF-8'/>


<br>Note You should follow the schedule written below <br>
Time: <br>
Date: <br>
Purpose: <br>
Requirements: <br>";
    }
    $mail->Body    = "
Dear <b>$name</b><br>
<br>
Thank you for completing your appointment with <b>San Isidro Appointment and Management System</b>.<br>
<br>
This email serves as a confirmation that your appointment is <b>$verdict</b><br>
<br>
<br>
$ifverdict
<br>
<br>

Regards,<br>
The <b>San Isidro Appointment and Management Development</b> team";

    if(!$mail->send()) {
        echo '<script>alert("Message could not be sent.");</script>';
        echo '<script>alert("'.'Mailer Error: ' . $mail->ErrorInfo . '");</script>';
        echo '<script>window.location="appointment.php";</script>';

    } else {
        echo '<script>alert("Success,Email sent!");</script>';
        echo '<script>window.location="appointment.php";</script>';

    }
}

?>

</body>
</html>