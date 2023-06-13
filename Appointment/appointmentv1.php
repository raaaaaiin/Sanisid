<?php
session_start();
$position = $_SESSION['position'];
?>
<html>


<head>
    <style> .info {
            color: rgba(29, 33, 36, 0.76);
            background-color: #e7f3fe;
            border-left: 6px solid #2196F3;
        }*{color:#344468;scrollbar-width:thin;scrollbar-color:var(--scroll-bar-color) var(--scroll-bar-bg-color)}::-webkit-scrollbar{width:12px;height:12px}::-webkit-scrollbar-track{background:var(--scroll-bar-bg-color)}::-webkit-scrollbar-thumb{background-color:var(--scroll-bar-color);border-radius:20px;border:3px solid var(--scroll-bar-bg-color)}@font-face{font-family:'Product Sans';font-style:normal;font-weight:400;src:local('Product Sans'),url(../../Font/ProductSans-Regular.woff) format('woff')}*,::after,::before{box-sizing:border-box}html{font-family:'Product Sans'!important;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}footer,header{display:block}body{margin:0;font-family:'Product Sans';font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}[tabindex="-1"]:focus:not(:focus-visible){outline:0!important}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}b{font-weight:bolder}a{color:#007bff;text-decoration:none;background-color:transparent}a:hover{color:#0056b3;text-decoration:underline}a:not([href]):not([class]){color:inherit;text-decoration:none}a:not([href]):not([class]):hover{color:inherit;text-decoration:none}img{vertical-align:middle;border-style:none}table{border-collapse:collapse}label{display:inline-block;margin-bottom:.5rem}button{border-radius:0}button:focus:not(:focus-visible){outline:0}button,input,select{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}[role=button]{cursor:pointer}select{word-wrap:normal}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:none}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}[hidden]{display:none!important}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:2.5rem}.h2,h2{font-size:2rem}.h3,h3{font-size:1.75rem}.h4,h4{font-size:1.5rem}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}.display-1{font-size:6rem;font-weight:300;line-height:1.2}.display-2{font-size:5.5rem;font-weight:300;line-height:1.2}.display-3{font-size:4.5rem;font-weight:300;line-height:1.2}.display-4{font-size:3.5rem;font-weight:300;line-height:1.2}.list-inline{padding-left:0;list-style:none}.img-fluid{max-width:100%;height:auto}.container,.cnt-fld{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.r{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.c,.c-1,.c-10,.c-11,.c-12,.c-2,.c-3,.c-4,.c-5,.c-6,.c-7,.c-8,.c-9,.c-auto{position:relative;width:100%;padding-right:15px;padding-left:15px}.c{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.c-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.c-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.c-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.c-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.c-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.c-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.c-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.c-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.c-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.c-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.c-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.c-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.c-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.table{width:100%;margin-bottom:1rem;color:#212529}.table-responsive{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.c-form-label{padding-top:calc(.375rem + 1px);padding-bottom:calc(.375rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.5}.form-text{display:block;margin-top:.25rem}.form-r{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-5px;margin-left:-5px}.form-r>.c,.form-r>[class*=c-]{padding-right:5px;padding-left:5px}.form-inline{display:-ms-flexbox;display:flex;-ms-flex-flow:r wrap;flex-flow:r wrap;-ms-flex-align:center;align-items:center}@media (min-width:576px){.form-inline label{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;margin-bottom:0}}.alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}@-webkit-keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}.media{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start}.media-body{-ms-flex:1;flex:1}.close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5}.close:hover{color:#000;text-decoration:none}.close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover{opacity:.75}button.close{padding:0;background-color:transparent;border:0}.mdl-open{overflow:hidden}.mdl-open .mdl{overflow-x:hidden;overflow-y:auto}.mdl{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0}.mdl-content{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.mdl-header{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start;-ms-flex-pack:justify;justify-content:space-between;padding:1rem 1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.mdl-header .close{padding:1rem 1rem;margin:-1rem -1rem -1rem auto}.mdl-body{position:relative;-ms-flex:1 1 auto;flex:1 1 auto;padding:1rem}.mdl-footer{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:end;justify-content:flex-end;padding:.75rem;border-top:1px solid #dee2e6;border-bottom-right-radius:calc(.3rem - 1px);border-bottom-left-radius:calc(.3rem - 1px)}.mdl-footer>*{margin:.25rem}@-webkit-keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1;-webkit-transform:none;transform:none}}@keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1;-webkit-transform:none;transform:none}}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.border{border:1px solid #dee2e6!important}.border-top{border-top:1px solid #dee2e6!important}.border-right{border-right:1px solid #dee2e6!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.border-left{border-left:1px solid #dee2e6!important}.border-0{border:0!important}.border-top-0{border-top:0!important}.border-right-0{border-right:0!important}.border-bottom-0{border-bottom:0!important}.border-left-0{border-left:0!important}.border-white{border-color:#fff!important}.d-none{display:none!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-table{display:table!important}.d-tbl-rw{display:tbl-rw!important}.dflx{display:-ms-flexbox!important;display:flex!important}.d-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}.flex-r{-ms-flex-direction:r!important;flex-direction:r!important}.flex-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.justify-content-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.jtcc{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.align-items-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-center{-ms-flex-align:center!important;align-items:center!important}.align-items-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-content-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.float-left{float:left!important}.float-right{float:right!important}.float-none{float:none!important}.user-select-all{-webkit-user-select:all!important;-moz-user-select:all!important;user-select:all!important}.user-select-auto{-webkit-user-select:auto!important;-moz-user-select:auto!important;-ms-user-select:auto!important;user-select:auto!important}.user-select-none{-webkit-user-select:none!important;-moz-user-select:none!important;-ms-user-select:none!important;user-select:none!important}.overflow-auto{overflow:auto!important}.overflow-hidden{overflow:hidden!important}.position-relative{position:relative!important}.position-fixed{position:fixed!important}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.fixed-bottom{position:fixed;right:0;bottom:0;left:0;z-index:1030}@supports ((position:-webkit-sticky) or (position:sticky)){.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}.shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important}.shadow-none{box-shadow:none!important}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.w-auto{width:auto!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.h-auto{height:auto!important}.m-0{margin:0!important}.ml-0{margin-left:0!important}.m-1{margin:.25rem!important}.ml-1{margin-left:.25rem!important}.m-2{margin:.5rem!important}.ml-2{margin-left:.5rem!important}.m-3{margin:1rem!important}.ml-3{margin-left:1rem!important}.m-4{margin:1.5rem!important}.ml-4{margin-left:1.5rem!important}.m-5{margin:3rem!important}.ml-5{margin-left:3rem!important}.p-0{padding:0!important}.px-0{padding-right:0!important}.px-0{padding-left:0!important}.p-1{padding:.25rem!important}.px-1{padding-right:.25rem!important}.px-1{padding-left:.25rem!important}.p-2{padding:.5rem!important}.px-2{padding-right:.5rem!important}.px-2{padding-left:.5rem!important}.p-3{padding:1rem!important}.px-3{padding-right:1rem!important}.px-3{padding-left:1rem!important}.p-4{padding:1.5rem!important}.px-4{padding-right:1.5rem!important}.px-4{padding-left:1.5rem!important}.p-5{padding:3rem!important}.px-5{padding-right:3rem!important}.px-5{padding-left:3rem!important}.m-auto{margin:auto!important}.ml-auto{margin-left:auto!important}.text-monospace{font-family:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace!important}.text-justify{text-align:justify!important}.text-nowrap{white-space:nowrap!important}.text-left{text-align:left!important}.text-right{text-align:right!important}.text-center{text-align:center!important}.text-uppercase{text-transform:uppercase!important}.text-white{color:#fff!important}.text-body{color:#212529!important}.text-white-50{color:rgba(255,255,255,.5)!important}.text-decoration-none{text-decoration:none!important}@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}img{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.table{border-collapse:collapse!important}}</style>

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
        .rsp-tbl li {
            border-radius: 10px;
            padding: 5px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        .rsp-tbl .tbl-hd {
            background-color:#f9fafe !important;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }
        .rsp-tbl .tbl-rw {
            background-color: #ffffff;
            box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1);
        }
        .rsp-tbl .tbl-rw:hover{
            box-shadow: 0px 0px 9px 0px #1147c1;
        }
        .rsp-tbl .c-1 {
            flex-basis: 10%;
        }
        .rsp-tbl .c-2 {
            flex-basis: 40%;
        }
        .rsp-tbl .c-3 {
            flex-basis: 25%;
        }
        .rsp-tbl .c-4 {
            flex-basis: 25%;
        }
        .rsp-tbl .selected{
            background-color:#f3f6fd !important;
        }
        .rsp-tbl .b{

        }
        .selectedItem{
            background-color: #f3f6fd !important;
        }
        @media all and (max-width: 767px) {
            .rsp-tbl .tbl-hd {
                display: none;
            }
            .rsp-tbl li {
                display: block;
            }
            .rsp-tbl .c {
                flex-basis: 100%;
            }
            .rsp-tbl .c {
                display: flex;
                padding: 10px 0;
            }
            .rsp-tbl .c:before {
                color: #6c7a89;
                padding-right: 10px;
                content: attr(data-label);
                flex-basis: 50%;
                text-align: right;
            }
        }

        .psbr {
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
        .mdl-overlay{
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
        }

        .mdl-content{

            background-color: #f4f4f4;
            margin: 5% auto;
            width: 50%;
            box-shadow: 0 5px 8px 0 rgba(0,0,0,0.2),0 7px 20px 0 rgba(0,0,0,0.17);
        }

        .mdl-header h2, .mdl-footer h3{
            margin: 0;
        }

        .mdl-header{
            background: #14aa6c;
            padding: 15px;
            color: #fff;
        }

        .mdl-body{
            padding: 10px 20px;
        }

        .mdl-footer{
            background: #ffffff;
            padding: 10px;
            color: #fff;
            text-align: center;
        }

        .closeBtn{
            font-size: 30px;
            color: #fff;
            float: right;
        }

        .closeBtn:hover,.closeBtn:focus{
            color: #ef3939;
            text-decoration: none;
            cursor:  pointer;
        }


    </style>
</head>

<body style="font-family: Roboto, sans-serif !important;">




<div id="simpleModal" class="mdl-overlay">
    <div class="mdl-content">
        <div class="mdl-header">
            <span class="closeBtn" onclick="Modalhide()">✖</span>
            <h2 style="color:white">Appointment approval</h2>
        </div>
        <div class="dflx mdl-body jtcc">
            <!--<img style="
                object-fit: contain;
  width: 250px;
  height: 250px;
              "src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row_ret['proof']); ?>" /> <br>-->
            <form method="POST" target="_blank" action="appointmentv1.php">
                Time:    <input id="time" name="time" type="text" value=""/><br>
                Date:    <input id="date" name="date" value=""/><br>
                Name:    <input id="name" name="name" value=""/><br>
                email:   <input id="email"  name="email" value=""/><br>
                purpose: <input id="purpose"  name="purpose" value=""/><br>
                Requirement: <input id="requirement"  name="requirement" value=""/><br>
                verdict: <input id="verdict"  name="verdict" value=""/><br>
                id:      <input id="id"  name="id" value=""/><br>



        </div>

        </form>
        <div class="mdl-footer">



            <input  type="submit" name=""
                    class="button app" value="Approve"  onclick="formsubmitter()"/>
            <input  type="submit" name=""
                    class="button rej" value="Reject"  onclick="formrejector()" />
        </div>
    </div>
</div>


<div clas="wrpr">
    <div class = "cnt-fld p-4">
        <style>.info {
                color: rgba(29, 33, 36, 0.76);
                background-color: #e7f3fe;
                border-left: 6px solid #2196F3;
            }</style> <div class="info">
            <p>&nbsp; <strong>Instruction!</strong> This page will allow you to manage the incoming registration, You may check the proof of recidency and decide whether to approve or reject the registration
                <br><strong>*Note</strong> This will send an email to resident to inform them if their registration is approved or rejected</p></div>
    <div class="r">
        <div class="c-12 ">
            <span ><h1 class="ml-4">Pending Accounts</h1></span>
            <ul class="rsp-tbl p-0">
                <li class="tbl-hd a">
                    <div class="c c-1">Status</div>
                    <div class="c c-1">Name</div>
                    <div class="c c-1">Gender</div>
                    <div class="c c-1">DOB</div>
                    <div class="c c-1">Date</div>
                    <div class="c c-1">Time</div>
                    <div class="c c-2">Email</div>
                    <div class="c c-1">Purpose</div>
                    <div class="c c-1">Action</div>
                </li>
                <?php


                include("../db.php");

                $sql_ret = "SELECT * FROM appointments";
                $result_ret = mysqli_query($db, $sql_ret);
                $resultCheck_ret = mysqli_num_rows($result_ret);
                $index = 0;
                if($resultCheck_ret > 0){
                    while($row_ret = mysqli_fetch_assoc($result_ret)){
                        ?>  <li class="tbl-rw b psbr"style="    align-items: center;">
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
                            <div class="c c-1"><span><?php echo $row_ret['Name']?></span><br></div>
                            <div class="c c-1"><span><?php echo $row_ret['gender']?></span></div>
                            <div class="c c-1"><span><?php echo $row_ret['dob']?></span></div>
                            <div class="c c-1"><span><?php echo $row_ret['app_date']?></span></div>
                            <div class="c c-1"><span><?php echo $row_ret['time']?></span></div>
                            <div class="c c-2"><span><?php echo $row_ret['email']?></span></div>
                            <div class="c c-1"><span><?php echo $row_ret['purpose']?></span></div>
                            <?php
                            $id = $row_ret['id'];
                            $name = $row_ret['Name'];
                            $gender = $row_ret['gender'];
                            $dob = $row_ret['dob'];
                            $app_date = $row_ret['app_date'];
                            $time = $row_ret['time'];
                            $email = $row_ret['email'];
                            $purpose = $row_ret['purpose'];
                            ?>
                            <div class="c c-1">
                                <form "dflx m-0 h-100 w-100" id="form<?php echo $index;?>" method="post" >
                                <input type="text" style="display: none;" value="<?php echo $row_ret['id']?>" name="selected"/>
                                <input type="text" style="display: none;" value="<?php echo $row_ret['email']?>" name="email"/>
                                <input type="text" style="display: none;" value="<?php echo $row_ret['Name']?>" name="name"/>
                                <input type="text" style="display: none;"  name="resitime" id="<?php echo $index;?>resitime"/>
                                <input type="text" style="display: none;"  name="residate" id="<?php echo $index;?>residate"/>
                                <input type="text" style="display: none;"  name="resiquirement" id="<?php echo $index;?>resiquirement"/>
                                <input type="text" style="display: none;" value="<?php echo $row_ret['purpose']?>" name="purpose"/>
                                <input type="text" style="width:130px !important;" onclick="Modalshow('','','<?php echo $name;?>','<?php echo $email;?>','<?php echo $purpose;?>','requirements','Approved','<?php echo $id;?>')" class="button app w-100" value="Set Appoint" />
                                <input  id="app<?php echo $index;?>" type="submit" name="approved"
                                       class="button app" value="✖" hidden />
                                <input  id="rej<?php echo $index;?>" type="submit" name="reject"
                                       class="button rej" value="✖" hidden />
                                </form>


                            </div>

                            <!--<img style="
                object-fit: contain;
  width: 250px;
  height: 250px;
              "src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row_ret['proof']); ?>" /> <br>-->

                        </li>

                        <?php
                        $index += 1;
                    }

                }
                ?>
            </ul>


                <?php

                if(array_key_exists('approved', $_POST)) {
                    approved();
                }
                else if(array_key_exists('reject', $_POST)) {
                    reject();
                }
                function approved() {
                    echo '<script>alert("Please Wait")</script>';
                    include("../db.php");
                    $value = $_POST['selected'];
                    $email = $_POST['email'];
                    $purpose = $_POST['purpose'];
                    $name = $_POST['name'];
                    $time = $_POST['resitime'];
                    $date = $_POST['residate'];
                    $requirements = $_POST['resiquirement'];

                    $sql = "UPDATE appointments SET status='Approved' WHERE id=$value" or die("Errors");
                    echo "<script>alert('$sql')</script>";
                    if ($db->query($sql) === TRUE)
                    {

                        echo "<script>alert('You successfully approved a registration');</script>";
                        sendMail($email,$name,$date,$time,$purpose,$requirements,'Approved',$value);

                    }


                }
                function reject() {
                    echo '<script>alert("Please Wait")</script>';
                    include("../db.php");
                    $value = $_POST['selected'];
                    $emailadd = $_POST['sendemail'];
                    $fullname = $_POST['fname'];
                    $sql = "UPDATE appointments SET status='Rejected' WHERE id=$value" or die("Errors");
                    $sql = "DELETE FROM request_acc WHERE id=$value;" or die("Errors");
                    if ($db->query($sql) === TRUE)
                    {


                        sendMail($emailadd,$fullname,"REJECTED");
                        echo "<script>alert('You successfully rejected a registration');</script>";

                    }
                }



                function sendMail($email,$name,$date,$time,$purpose,$requirements,$verdict,$id){


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
                    $mail->SMTPDebug = 0;
                    $mail->addAddress("$email");
                    $mail->Subject = 'Barangay San Isidro Appointment';
                    $ifverdict ="";
                    if($verdict == "Approved"){
                        $ifverdict ="Here's a QR Code Just show it to Barangay San Isidro staff to let them manage your request<br>
<br><img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".base64_encode($id)."%2F&choe=UTF-8'/>


<br>Note You should follow the schedule written below <br>
Time: $time<br>
Date: $date <br>
Purpose: $purpose<br>
Requirements/Reason: $requirements<br>";
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
                        /*echo '<script>window.location="appointment.php";</script>';*/

                    } else {
                        echo '<script>alert("Message could not be sent.");</script>';
                        echo '<script>window.location="appointment.php";</script>';

                    }
                }
                ?>

































</body>
<script>
    let selected;

    const boxes = Array.from(document.getElementsByClassName('frmsubmit'));

    boxes.forEach(box => {
        box.addEventListener('click', openModal);
    });

    // Get mdl element
    var mdl = document.getElementById('simpleModal');
    // Get open mdl button
    var modalBtn = document.getElementById('modalBtn');
    // Get close button
    var closeBtn = document.getElementsByClassName('closeBtn')[0];

    // Listen for open click
    // Listen for close click
    closeBtn.addEventListener('click', closeModal);
    // Listen for outside click
    window.addEventListener('click', outsideClick);

    // Open mdl
    function openModal(){
        mdl.style.display = 'block';

    }

    // Close mdl
    function closeModal(){
        mdl.style.display = 'none';
    }

    // Click outside and close
    function outsideClick(e){
        if(e.target == mdl){
            mdl.style.display = 'none';
        }
    }
    function Modalhide(){
        closeModal();
    }
    function Modalshow(a,b,c,c1,d,e,f,g){
        document.getElementById('time').value= a ;
        document.getElementById('date').value= b;
        document.getElementById('name').value= c;
        document.getElementById('email').value= c1;
        document.getElementById('purpose').value= d;
        document.getElementById('requirement').value= e;
        document.getElementById('verdict').value= f;
        document.getElementById('id').value= g;
        /*document.getElementById('maximize').value= y;*/
        openModal();
        selected = g;
    }
    function formsubmitter(){
        alert('app'+selected);
        document.getElementById(selected+'resitime').value= document.getElementById('time').value;
        document.getElementById(selected+'residate').value=  document.getElementById('date').value;
        document.getElementById(selected+'resiquirement').value =  document.getElementById('requirement').value;
        document.getElementById('app'+selected).click();
    }
    function formrejector(){
        document.getElementById('rej'+selected).click();
    }
</script>
</html>