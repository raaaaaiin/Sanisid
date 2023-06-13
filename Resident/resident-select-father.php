<!DOCTYPE html>

<?php
include("connections.php");
    $connect = mysqli_connect("localhost", "root", "", "sanisidro");  
$largestNumber= $rid= "";
                           $rowSQL = mysqli_query($db, "SELECT MAX( res_id ) AS max FROM `resident_detail`;" );
                                  $row = mysqli_fetch_array( $rowSQL );
                                  $largestNumber = $row['max'];
                                    $rid= $largestNumber+1;
                               
                                 

                                  ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Management Information System</title>

    <link href="css/css/mis.css" rel="stylesheet">
      <style> .info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }

          *{color:#344468;scrollbar-width:thin;scrollbar-color:var(--scroll-bar-color) var(--scroll-bar-bg-color)}::-webkit-scrollbar{width:12px;height:12px}::-webkit-scrollbar-track{background:var(--scroll-bar-bg-color)}::-webkit-scrollbar-thumb{background-color:var(--scroll-bar-color);border-radius:20px;border:3px solid var(--scroll-bar-bg-color)}@font-face{font-family:'Product Sans';font-style:normal;font-weight:400;src:local('Product Sans'),url(../../Font/ProductSans-Regular.woff) format('woff')}*,::after,::before{box-sizing:border-box}html{font-family:'Product Sans'!important;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}footer,header,nav{display:block}body{margin:0;font-family:'Product Sans';font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}[tabindex="-1"]:focus:not(:focus-visible){outline:0!important}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}b{font-weight:bolder}a{color:#007bff;text-decoration:none;background-color:transparent}a:hover{color:#0056b3;text-decoration:underline}a:not([href]):not([class]){color:inherit;text-decoration:none}a:not([href]):not([class]):hover{color:inherit;text-decoration:none}table{border-collapse:collapse}label{display:inline-block;margin-bottom:.5rem}button{border-radius:0}button:focus:not(:focus-visible){outline:0}button,input,select{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}[role=button]{cursor:pointer}select{word-wrap:normal}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:none}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}[hidden]{display:none!important}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:2.5rem}.h2,h2{font-size:2rem}.h3,h3{font-size:1.75rem}.h4,h4{font-size:1.5rem}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}.display-1{font-size:6rem;font-weight:300;line-height:1.2}.display-2{font-size:5.5rem;font-weight:300;line-height:1.2}.display-3{font-size:4.5rem;font-weight:300;line-height:1.2}.display-4{font-size:3.5rem;font-weight:300;line-height:1.2}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto{position:relative;width:100%;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}@media (min-width:576px){.col-sm{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-sm-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-sm-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-sm-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-sm-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-sm-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-sm-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-sm-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-sm-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-sm-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-sm-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-sm-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-sm-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-sm-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-sm-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width:768px){.col-md{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-md-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-md-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-md-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-md-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-md-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-md-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-md-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-md-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-md-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-md-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-md-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-md-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-md-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-md-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-md-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width:1200px){.col-xl{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-xl-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-xl-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-xl-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-xl-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-xl-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-xl-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-xl-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-xl-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-xl-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-xl-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-xl-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-xl-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-xl-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-xl-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-xl-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-xl-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-xl-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-xl-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-xl-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}.table{width:100%;margin-bottom:1rem;color:#212529}.table td{padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6}.table-sm td{padding:.3rem}.table-primary,.table-primary>td{background-color:#b8daff}.table-primary td{border-color:#7abaff}.table-hover .table-primary:hover{background-color:#9fcdff}.table-hover .table-primary:hover>td{background-color:#9fcdff}.table-success,.table-success>td{background-color:#c3e6cb}.table-success td{border-color:#8fd19e}.table-hover .table-success:hover{background-color:#b1dfbb}.table-hover .table-success:hover>td{background-color:#b1dfbb}@media (max-width:575.98px){.table-responsive-sm{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:767.98px){.table-responsive-md{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:1199.98px){.table-responsive-xl{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}}.table-responsive{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.col-form-label{padding-top:calc(.375rem + 1px);padding-bottom:calc(.375rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.5}.col-form-label-sm{padding-top:calc(.25rem + 1px);padding-bottom:calc(.25rem + 1px);font-size:.875rem;line-height:1.5}.form-text{display:block;margin-top:.25rem}.form-row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-5px;margin-left:-5px}.form-row>.col,.form-row>[class*=col-]{padding-right:5px;padding-left:5px}.form-inline{display:-ms-flexbox;display:flex;-ms-flex-flow:row wrap;flex-flow:row wrap;-ms-flex-align:center;align-items:center}@media (min-width:576px){.form-inline label{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;margin-bottom:0}}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.btn{transition:none}}.btn:hover{color:#212529;text-decoration:none}.btn.focus,.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.btn.disabled,.btn:disabled{opacity:.65}.btn:not(:disabled):not(.disabled){cursor:pointer}a.btn.disabled{pointer-events:none}.btn-primary{color:#fff;background-color:#007bff;border-color:#007bff}.btn-primary:hover{color:#fff;background-color:#0069d9;border-color:#0062cc}.btn-primary.focus,.btn-primary:focus{color:#fff;background-color:#0069d9;border-color:#0062cc;box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:#007bff;border-color:#007bff}.btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active{color:#fff;background-color:#0062cc;border-color:#005cbf}.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-success{color:#fff;background-color:#28a745;border-color:#28a745}.btn-success:hover{color:#fff;background-color:#218838;border-color:#1e7e34}.btn-success.focus,.btn-success:focus{color:#fff;background-color:#218838;border-color:#1e7e34;box-shadow:0 0 0 .2rem rgba(72,180,97,.5)}.btn-success.disabled,.btn-success:disabled{color:#fff;background-color:#28a745;border-color:#28a745}.btn-success:not(:disabled):not(.disabled).active,.btn-success:not(:disabled):not(.disabled):active{color:#fff;background-color:#1e7e34;border-color:#1c7430}.btn-success:not(:disabled):not(.disabled).active:focus,.btn-success:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(72,180,97,.5)}.btn-outline-primary{color:#007bff;border-color:#007bff}.btn-outline-primary:hover{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary.focus,.btn-outline-primary:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#007bff;background-color:transparent}.btn-outline-primary:not(:disabled):not(.disabled).active,.btn-outline-primary:not(:disabled):not(.disabled):active{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-success{color:#28a745;border-color:#28a745}.btn-outline-success:hover{color:#fff;background-color:#28a745;border-color:#28a745}.btn-outline-success.focus,.btn-outline-success:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#28a745;background-color:transparent}.btn-outline-success:not(:disabled):not(.disabled).active,.btn-outline-success:not(:disabled):not(.disabled):active{color:#fff;background-color:#28a745;border-color:#28a745}.btn-outline-success:not(:disabled):not(.disabled).active:focus,.btn-outline-success:not(:disabled):not(.disabled):active:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-link{font-weight:400;color:#007bff;text-decoration:none}.btn-link:hover{color:#0056b3;text-decoration:underline}.btn-link.focus,.btn-link:focus{text-decoration:underline}.btn-link.disabled,.btn-link:disabled{color:#6c757d;pointer-events:none}.btn-sm{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:.5rem}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.nav{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem}.nav-link:focus,.nav-link:hover{text-decoration:none}.nav-link.disabled{color:#6c757d;pointer-events:none;cursor:default}.pagination{display:-ms-flexbox;display:flex;padding-left:0;list-style:none;border-radius:.25rem}.page-link{position:relative;display:block;padding:.5rem .75rem;margin-left:-1px;line-height:1.25;color:#007bff;background-color:#fff;border:1px solid #dee2e6}.page-link:hover{z-index:2;color:#0056b3;text-decoration:none;background-color:#e9ecef;border-color:#dee2e6}.page-link:focus{z-index:3;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.page-item:first-child .page-link{margin-left:0;border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}.page-item.disabled .page-link{color:#6c757d;pointer-events:none;cursor:auto;background-color:#fff;border-color:#dee2e6}.pagination-sm .page-link{padding:.25rem .5rem;font-size:.875rem;line-height:1.5}.pagination-sm .page-item:first-child .page-link{border-top-left-radius:.2rem;border-bottom-left-radius:.2rem}.pagination-sm .page-item:last-child .page-link{border-top-right-radius:.2rem;border-bottom-right-radius:.2rem}@-webkit-keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}.media{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start}.media-body{-ms-flex:1;flex:1}.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0}.modal-content{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-header{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start;-ms-flex-pack:justify;justify-content:space-between;padding:1rem 1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:relative;-ms-flex:1 1 auto;flex:1 1 auto;padding:1rem}.modal-footer{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:end;justify-content:flex-end;padding:.75rem;border-top:1px solid #dee2e6;border-bottom-right-radius:calc(.3rem - 1px);border-bottom-left-radius:calc(.3rem - 1px)}.modal-footer>*{margin:.25rem}@media (min-width:576px){.modal-sm{max-width:300px}}@media (min-width:992px){.modal-xl{max-width:800px}}@media (min-width:1200px){.modal-xl{max-width:1140px}}@-webkit-keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1;-webkit-transform:none;transform:none}}@keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1;-webkit-transform:none;transform:none}}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.bg-primary{background-color:#007bff!important}a.bg-primary:focus,a.bg-primary:hover,button.bg-primary:focus,button.bg-primary:hover{background-color:#0062cc!important}.bg-success{background-color:#28a745!important}a.bg-success:focus,a.bg-success:hover,button.bg-success:focus,button.bg-success:hover{background-color:#1e7e34!important}.bg-white{background-color:#fff!important}.border{border:1px solid #dee2e6!important}.border-top{border-top:1px solid #dee2e6!important}.border-right{border-right:1px solid #dee2e6!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.border-left{border-left:1px solid #dee2e6!important}.border-0{border:0!important}.border-top-0{border-top:0!important}.border-right-0{border-right:0!important}.border-bottom-0{border-bottom:0!important}.border-left-0{border-left:0!important}.border-primary{border-color:#007bff!important}.border-success{border-color:#28a745!important}.border-white{border-color:#fff!important}.rounded-sm{border-radius:.2rem!important}.rounded{border-radius:.25rem!important}.rounded-top{border-top-left-radius:.25rem!important;border-top-right-radius:.25rem!important}.rounded-right{border-top-right-radius:.25rem!important;border-bottom-right-radius:.25rem!important}.rounded-bottom{border-bottom-right-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-left{border-top-left-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-0{border-radius:0!important}.flex-row{-ms-flex-direction:row!important;flex-direction:row!important}.justify-content-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.align-items-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-center{-ms-flex-align:center!important;align-items:center!important}.align-items-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-content-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}@media (min-width:576px){.flex-sm-row{-ms-flex-direction:row!important;flex-direction:row!important}.justify-content-sm-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-sm-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-sm-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-sm-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.align-items-sm-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-sm-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-sm-center{-ms-flex-align:center!important;align-items:center!important}.align-items-sm-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-content-sm-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-sm-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-sm-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-sm-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}}@media (min-width:768px){.flex-md-row{-ms-flex-direction:row!important;flex-direction:row!important}.justify-content-md-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-md-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-md-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-md-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.align-items-md-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-md-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-md-center{-ms-flex-align:center!important;align-items:center!important}.align-items-md-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-content-md-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-md-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-md-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-md-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}}@media (min-width:1200px){.flex-xl-row{-ms-flex-direction:row!important;flex-direction:row!important}.justify-content-xl-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-xl-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-xl-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-xl-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.align-items-xl-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-xl-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-xl-center{-ms-flex-align:center!important;align-items:center!important}.align-items-xl-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-content-xl-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-xl-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-xl-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-xl-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}}.float-left{float:left!important}.float-right{float:right!important}.float-none{float:none!important}@media (min-width:576px){.float-sm-left{float:left!important}.float-sm-right{float:right!important}.float-sm-none{float:none!important}}@media (min-width:768px){.float-md-left{float:left!important}.float-md-right{float:right!important}.float-md-none{float:none!important}}@media (min-width:1200px){.float-xl-left{float:left!important}.float-xl-right{float:right!important}.float-xl-none{float:none!important}}.user-select-all{-webkit-user-select:all!important;-moz-user-select:all!important;user-select:all!important}.user-select-auto{-webkit-user-select:auto!important;-moz-user-select:auto!important;-ms-user-select:auto!important;user-select:auto!important}.user-select-none{-webkit-user-select:none!important;-moz-user-select:none!important;-ms-user-select:none!important;user-select:none!important}.overflow-auto{overflow:auto!important}.overflow-hidden{overflow:hidden!important}.position-relative{position:relative!important}.position-fixed{position:fixed!important}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.fixed-bottom{position:fixed;right:0;bottom:0;left:0;z-index:1030}@supports ((position:-webkit-sticky) or (position:sticky)){.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}.shadow-sm{box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important}.shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important}.shadow-none{box-shadow:none!important}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.w-auto{width:auto!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.h-auto{height:auto!important}.my-0{margin-top:0!important}.mx-0{margin-right:0!important}.my-0{margin-bottom:0!important}.ml-0,.mx-0{margin-left:0!important}.my-1{margin-top:.25rem!important}.mx-1{margin-right:.25rem!important}.my-1{margin-bottom:.25rem!important}.ml-1,.mx-1{margin-left:.25rem!important}.my-2{margin-top:.5rem!important}.mx-2{margin-right:.5rem!important}.my-2{margin-bottom:.5rem!important}.ml-2,.mx-2{margin-left:.5rem!important}.my-3{margin-top:1rem!important}.mx-3{margin-right:1rem!important}.my-3{margin-bottom:1rem!important}.ml-3,.mx-3{margin-left:1rem!important}.my-4{margin-top:1.5rem!important}.mx-4{margin-right:1.5rem!important}.my-4{margin-bottom:1.5rem!important}.ml-4,.mx-4{margin-left:1.5rem!important}.my-5{margin-top:3rem!important}.mx-5{margin-right:3rem!important}.my-5{margin-bottom:3rem!important}.ml-5,.mx-5{margin-left:3rem!important}.p-0{padding:0!important}.py-0{padding-top:0!important}.px-0{padding-right:0!important}.py-0{padding-bottom:0!important}.pl-0,.px-0{padding-left:0!important}.p-1{padding:.25rem!important}.py-1{padding-top:.25rem!important}.px-1{padding-right:.25rem!important}.py-1{padding-bottom:.25rem!important}.pl-1,.px-1{padding-left:.25rem!important}.p-2{padding:.5rem!important}.py-2{padding-top:.5rem!important}.px-2{padding-right:.5rem!important}.py-2{padding-bottom:.5rem!important}.pl-2,.px-2{padding-left:.5rem!important}.p-3{padding:1rem!important}.py-3{padding-top:1rem!important}.px-3{padding-right:1rem!important}.py-3{padding-bottom:1rem!important}.pl-3,.px-3{padding-left:1rem!important}.p-4{padding:1.5rem!important}.py-4{padding-top:1.5rem!important}.px-4{padding-right:1.5rem!important}.py-4{padding-bottom:1.5rem!important}.pl-4,.px-4{padding-left:1.5rem!important}.p-5{padding:3rem!important}.py-5{padding-top:3rem!important}.px-5{padding-right:3rem!important}.py-5{padding-bottom:3rem!important}.pl-5,.px-5{padding-left:3rem!important}.my-auto{margin-top:auto!important}.mx-auto{margin-right:auto!important}.my-auto{margin-bottom:auto!important}.ml-auto,.mx-auto{margin-left:auto!important}@media (min-width:576px){.my-sm-0{margin-top:0!important}.mx-sm-0{margin-right:0!important}.my-sm-0{margin-bottom:0!important}.ml-sm-0,.mx-sm-0{margin-left:0!important}.my-sm-1{margin-top:.25rem!important}.mx-sm-1{margin-right:.25rem!important}.my-sm-1{margin-bottom:.25rem!important}.ml-sm-1,.mx-sm-1{margin-left:.25rem!important}.my-sm-2{margin-top:.5rem!important}.mx-sm-2{margin-right:.5rem!important}.my-sm-2{margin-bottom:.5rem!important}.ml-sm-2,.mx-sm-2{margin-left:.5rem!important}.my-sm-3{margin-top:1rem!important}.mx-sm-3{margin-right:1rem!important}.my-sm-3{margin-bottom:1rem!important}.ml-sm-3,.mx-sm-3{margin-left:1rem!important}.my-sm-4{margin-top:1.5rem!important}.mx-sm-4{margin-right:1.5rem!important}.my-sm-4{margin-bottom:1.5rem!important}.ml-sm-4,.mx-sm-4{margin-left:1.5rem!important}.my-sm-5{margin-top:3rem!important}.mx-sm-5{margin-right:3rem!important}.my-sm-5{margin-bottom:3rem!important}.ml-sm-5,.mx-sm-5{margin-left:3rem!important}.p-sm-0{padding:0!important}.py-sm-0{padding-top:0!important}.px-sm-0{padding-right:0!important}.py-sm-0{padding-bottom:0!important}.pl-sm-0,.px-sm-0{padding-left:0!important}.p-sm-1{padding:.25rem!important}.py-sm-1{padding-top:.25rem!important}.px-sm-1{padding-right:.25rem!important}.py-sm-1{padding-bottom:.25rem!important}.pl-sm-1,.px-sm-1{padding-left:.25rem!important}.p-sm-2{padding:.5rem!important}.py-sm-2{padding-top:.5rem!important}.px-sm-2{padding-right:.5rem!important}.py-sm-2{padding-bottom:.5rem!important}.pl-sm-2,.px-sm-2{padding-left:.5rem!important}.p-sm-3{padding:1rem!important}.py-sm-3{padding-top:1rem!important}.px-sm-3{padding-right:1rem!important}.py-sm-3{padding-bottom:1rem!important}.pl-sm-3,.px-sm-3{padding-left:1rem!important}.p-sm-4{padding:1.5rem!important}.py-sm-4{padding-top:1.5rem!important}.px-sm-4{padding-right:1.5rem!important}.py-sm-4{padding-bottom:1.5rem!important}.pl-sm-4,.px-sm-4{padding-left:1.5rem!important}.p-sm-5{padding:3rem!important}.py-sm-5{padding-top:3rem!important}.px-sm-5{padding-right:3rem!important}.py-sm-5{padding-bottom:3rem!important}.pl-sm-5,.px-sm-5{padding-left:3rem!important}.my-sm-auto{margin-top:auto!important}.mx-sm-auto{margin-right:auto!important}.my-sm-auto{margin-bottom:auto!important}.ml-sm-auto,.mx-sm-auto{margin-left:auto!important}}@media (min-width:768px){.my-md-0{margin-top:0!important}.mx-md-0{margin-right:0!important}.my-md-0{margin-bottom:0!important}.ml-md-0,.mx-md-0{margin-left:0!important}.my-md-1{margin-top:.25rem!important}.mx-md-1{margin-right:.25rem!important}.my-md-1{margin-bottom:.25rem!important}.ml-md-1,.mx-md-1{margin-left:.25rem!important}.my-md-2{margin-top:.5rem!important}.mx-md-2{margin-right:.5rem!important}.my-md-2{margin-bottom:.5rem!important}.ml-md-2,.mx-md-2{margin-left:.5rem!important}.my-md-3{margin-top:1rem!important}.mx-md-3{margin-right:1rem!important}.my-md-3{margin-bottom:1rem!important}.ml-md-3,.mx-md-3{margin-left:1rem!important}.my-md-4{margin-top:1.5rem!important}.mx-md-4{margin-right:1.5rem!important}.my-md-4{margin-bottom:1.5rem!important}.ml-md-4,.mx-md-4{margin-left:1.5rem!important}.my-md-5{margin-top:3rem!important}.mx-md-5{margin-right:3rem!important}.my-md-5{margin-bottom:3rem!important}.ml-md-5,.mx-md-5{margin-left:3rem!important}.p-md-0{padding:0!important}.py-md-0{padding-top:0!important}.px-md-0{padding-right:0!important}.py-md-0{padding-bottom:0!important}.pl-md-0,.px-md-0{padding-left:0!important}.p-md-1{padding:.25rem!important}.py-md-1{padding-top:.25rem!important}.px-md-1{padding-right:.25rem!important}.py-md-1{padding-bottom:.25rem!important}.pl-md-1,.px-md-1{padding-left:.25rem!important}.p-md-2{padding:.5rem!important}.py-md-2{padding-top:.5rem!important}.px-md-2{padding-right:.5rem!important}.py-md-2{padding-bottom:.5rem!important}.pl-md-2,.px-md-2{padding-left:.5rem!important}.p-md-3{padding:1rem!important}.py-md-3{padding-top:1rem!important}.px-md-3{padding-right:1rem!important}.py-md-3{padding-bottom:1rem!important}.pl-md-3,.px-md-3{padding-left:1rem!important}.p-md-4{padding:1.5rem!important}.py-md-4{padding-top:1.5rem!important}.px-md-4{padding-right:1.5rem!important}.py-md-4{padding-bottom:1.5rem!important}.pl-md-4,.px-md-4{padding-left:1.5rem!important}.p-md-5{padding:3rem!important}.py-md-5{padding-top:3rem!important}.px-md-5{padding-right:3rem!important}.py-md-5{padding-bottom:3rem!important}.pl-md-5,.px-md-5{padding-left:3rem!important}.my-md-auto{margin-top:auto!important}.mx-md-auto{margin-right:auto!important}.my-md-auto{margin-bottom:auto!important}.ml-md-auto,.mx-md-auto{margin-left:auto!important}}@media (min-width:1200px){.my-xl-0{margin-top:0!important}.mx-xl-0{margin-right:0!important}.my-xl-0{margin-bottom:0!important}.ml-xl-0,.mx-xl-0{margin-left:0!important}.my-xl-1{margin-top:.25rem!important}.mx-xl-1{margin-right:.25rem!important}.my-xl-1{margin-bottom:.25rem!important}.ml-xl-1,.mx-xl-1{margin-left:.25rem!important}.my-xl-2{margin-top:.5rem!important}.mx-xl-2{margin-right:.5rem!important}.my-xl-2{margin-bottom:.5rem!important}.ml-xl-2,.mx-xl-2{margin-left:.5rem!important}.my-xl-3{margin-top:1rem!important}.mx-xl-3{margin-right:1rem!important}.my-xl-3{margin-bottom:1rem!important}.ml-xl-3,.mx-xl-3{margin-left:1rem!important}.my-xl-4{margin-top:1.5rem!important}.mx-xl-4{margin-right:1.5rem!important}.my-xl-4{margin-bottom:1.5rem!important}.ml-xl-4,.mx-xl-4{margin-left:1.5rem!important}.my-xl-5{margin-top:3rem!important}.mx-xl-5{margin-right:3rem!important}.my-xl-5{margin-bottom:3rem!important}.ml-xl-5,.mx-xl-5{margin-left:3rem!important}.p-xl-0{padding:0!important}.py-xl-0{padding-top:0!important}.px-xl-0{padding-right:0!important}.py-xl-0{padding-bottom:0!important}.pl-xl-0,.px-xl-0{padding-left:0!important}.p-xl-1{padding:.25rem!important}.py-xl-1{padding-top:.25rem!important}.px-xl-1{padding-right:.25rem!important}.py-xl-1{padding-bottom:.25rem!important}.pl-xl-1,.px-xl-1{padding-left:.25rem!important}.p-xl-2{padding:.5rem!important}.py-xl-2{padding-top:.5rem!important}.px-xl-2{padding-right:.5rem!important}.py-xl-2{padding-bottom:.5rem!important}.pl-xl-2,.px-xl-2{padding-left:.5rem!important}.p-xl-3{padding:1rem!important}.py-xl-3{padding-top:1rem!important}.px-xl-3{padding-right:1rem!important}.py-xl-3{padding-bottom:1rem!important}.pl-xl-3,.px-xl-3{padding-left:1rem!important}.p-xl-4{padding:1.5rem!important}.py-xl-4{padding-top:1.5rem!important}.px-xl-4{padding-right:1.5rem!important}.py-xl-4{padding-bottom:1.5rem!important}.pl-xl-4,.px-xl-4{padding-left:1.5rem!important}.p-xl-5{padding:3rem!important}.py-xl-5{padding-top:3rem!important}.px-xl-5{padding-right:3rem!important}.py-xl-5{padding-bottom:3rem!important}.pl-xl-5,.px-xl-5{padding-left:3rem!important}.my-xl-auto{margin-top:auto!important}.mx-xl-auto{margin-right:auto!important}.my-xl-auto{margin-bottom:auto!important}.ml-xl-auto,.mx-xl-auto{margin-left:auto!important}}.text-justify{text-align:justify!important}.text-left{text-align:left!important}.text-right{text-align:right!important}.text-center{text-align:center!important}@media (min-width:576px){.text-sm-left{text-align:left!important}.text-sm-right{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.text-md-left{text-align:left!important}.text-md-right{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:1200px){.text-xl-left{text-align:left!important}.text-xl-right{text-align:right!important}.text-xl-center{text-align:center!important}}.text-uppercase{text-transform:uppercase!important}.text-white{color:#fff!important}.text-primary{color:#007bff!important}a.text-primary:focus,a.text-primary:hover{color:#0056b3!important}.text-success{color:#28a745!important}a.text-success:focus,a.text-success:hover{color:#19692c!important}.text-body{color:#212529!important}.text-white-50{color:rgba(255,255,255,.5)!important}.text-decoration-none{text-decoration:none!important}@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.table{border-collapse:collapse!important}.table td{background-color:#fff!important}}
      </style>

      <style> .info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }
          .red h3 {
              color: red;
          }

          .blue h3 {
              color: blue;
          }

          .green h3 {
              color: green;
          }


          body .opacity {
              opacity: 0.5;
          }
          body .outline-none {
              outline: none;
              user-select: none;
          }

          body{
              background-color:#f9fafe !important;
          }
          .responsive-table li {
              border-radius: 10px;
              padding: 5px;
              display: flex;
              justify-content: space-between;
              margin-bottom: 5px;
          }
          .responsive-table .table-header {
              background-color:#f9fafe !important;
              font-size: 20px;
              text-transform: uppercase;
              letter-spacing: 0.03em;
          }
          .responsive-table .table-row {
              background-color: #ffffff;
              box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1);
          }
          .responsive-table .table-row:hover{
              box-shadow: 0px 0px 9px 0px #1147c1;
          }
          .responsive-table .col-1 {
              flex-basis: 10%;
          }
          .responsive-table .col-2 {
              flex-basis: 40%;
          }
          .responsive-table .col-3 {
              flex-basis: 25%;
          }
          .responsive-table .col-4 {
              flex-basis: 25%;
          }
          .responsive-table .selected{
              background-color:#f3f6fd !important;
          }
          .responsive-table .b{

          }
          .selectedItem{
              background-color: #f3f6fd !important;
          }
          @media all and (max-width: 767px) {
              .responsive-table .table-header {
                  display: none;
              }
              .responsive-table li {
                  display: block;
              }
              .responsive-table .col {
                  flex-basis: 100%;
              }
              .responsive-table .col {
                  display: flex;
                  padding: 10px 0;
              }
              .responsive-table .col:before {
                  color: #6c7a89;
                  padding-right: 10px;
                  content: attr(data-label);
                  flex-basis: 50%;
                  text-align: right;
              }
          }

          .post-bar {
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
          .modal-overlay{
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

          .modal-content{

              background-color: #f4f4f4;
              margin: 5% auto;
              width: 50%;
              box-shadow: 0 5px 8px 0 rgba(0,0,0,0.2),0 7px 20px 0 rgba(0,0,0,0.17);
          }

          .modal-header h2, .modal-footer h3{
              margin: 0;
          }

          .modal-header{
              background: #14aa6c;
              padding: 15px;
              color: #fff;
          }

          .modal-body{
              padding: 10px 20px;
          }

          .modal-footer{
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
  <body style="font-family: calibri; font-size: 18px; "> 

<br> <?php  
 $connect = mysqli_connect("localhost", "root", "", "sanisidro");  
 $query ="SELECT rd.res_ID ,
rd.res_fName ,
rd.res_mName ,
rd.res_lName ,
sfx.suffix,
rd.res_Bday ,
rms.marital_Name,
rg.gender_Name,
rr.religion_Name,
rc.country_nationality,
rc.country_citizenship,
ro.occupation_Name,
ros.occuStat_Name,
rd.res_Date_Record FROM resident_detail rd 
LEFT JOIN ref_suffixname sfx ON rd.suffix_ID = sfx.suffix_ID 
LEFT JOIN ref_marital_status rms ON rd.marital_ID = rms.marital_ID 
LEFT JOIN ref_gender rg ON rd.gender_ID = rg.gender_ID 
LEFT JOIN ref_religion rr ON rd.religion_ID = rr.religion_ID 
LEFT JOIN ref_occupation ro ON rd.occupation_ID = ro.occupation_ID 
LEFT JOIN ref_occupation_status ros ON rd.occuStat_ID = ros.occuStat_ID 
LEFT JOIN ref_country rc ON rd.country_ID = rc.country_ID where gender_Name='Male'  && res_ID != $largestNumber   "  ;  
 $result = mysqli_query($db, $query);  
 ?>






<style>.info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }</style> <div class="info">
    <p>&nbsp; <strong>Instruction!</strong> This page will let you to assign a parent to a resident, just search the parents name and click the select button
    </p></div>


<h1 class="ml-4">Attach Father to User</h1>




<form id="filters" class="max-w-3xl mx-auto flex justify-center pl-4">
    <div class="grid sm:grid-cols-3 sm:grid-rows-1 grid-rows-3 gap-4 w-full sm:w-auto">
        <input id="fillers" style="width:90%;" type="text" name="keyword" class="border p-2 focus:outline-none" placeholder="Search by keyword...">

        <button class="btn btn-success ">Search</button>
    </div>
</form>
<div class="wrapper max-w-3xl mx-auto px-4">
    <?php
    while($row = mysqli_fetch_array($result))
    {
    ?>
    <div class="item table-header a ">
            <ul class="responsive-table p-0">
                <li class="table-row post-bar" >
                    <table class="table table table-hover" id="mytable" style="width:100%">
                        <h3 hidden>
                            <?php echo strtolower($row["res_fName"])?>  <?php echo  strtolower($row["res_lName"])?>  <?php echo  strtolower($row["res_mName"])?>
                        </h3>
                        <colgroup>
                            <col style="width: 7%" />
                            <col style="width: 7%" />
                            <col style="width: 7%" />
                            <col style="width: 7%" />
                            <col style="width: 7%" />
                            <col style="width: 7%" />
                            <col style="width: 7%" />
                            <col style="width: 7%" />
                            <col style="width: 7%" />
                            <col style="width: 7%" />
                            <col style="width: 7%" />
                            <col style="width: 7%" />
                        </colgroup>
                        <tr>
                            <td>

                                <a href="floader1.php?id=<?php echo $row['res_ID'] ?>" class="btn btn-primary btn-s">Select</a>
                            </td>
                            <td><?php echo $row["res_fName"]?></td>
                            <td><?php echo $row["res_mName"]?></td>
                            <td><?php echo $row["res_lName"]?></td>
                            <td><?php echo $row["suffix"]?></td>
                            <td><?php echo $row["res_Bday"]?></td>
                            <td><?php echo $row["marital_Name"]?></td>
                            <td><?php echo $row["gender_Name"]?></td>
                            <td><?php echo $row["religion_Name"]?></td>
                            <td><?php echo $row["country_nationality"]?></td>
                            <td><?php echo $row["country_citizenship"]?></td>
                            <td><?php echo $row["occupation_Name"]?></td>

                        </tr>
                    </table>
                </li>
            </ul>
        </div>


        <?php
    }
    ?>
</div>
<div class="item table-header a ">
    <ul class="responsive-table p-0">
        <li class="table-row post-bar" >
            <table class="table table table-hover" id="" style="width:100%">
                <h3 hidden>
                    No Available Mother at the moment nomother not available
                </h3>
                <colgroup>
                    <col  />
                    <col  />
                    <col  />
                    <col  />
                    <col  />
                    <col  />
                    <col  />
                    <col  />
                    <col  />
                </colgroup>
                <tr>
                    <td>

                        <a href="../accountlogout.php" class="btn btn-primary btn-s">Select</a>
                    </td>
                    <td>Parent</td>
                    <td>Not</td>
                    <td>Available</td>
                    <td>Yet?</td>
                    <td>select</td>
                    <td>this</td>
                    <td>instead</td>
                    <td>to</td>
                    <td>skip.</td>


                </tr>
            </table>
        </li>
    </ul>
</div>
<div style="width:100% ;display:flex;justify-content: center">

    <div class="pagination flex justify-center my-2"></div>
</div>
<script>
    const wrapper = document.querySelector(".wrapper")
    const pagination = document.querySelector(".pagination")
    const items = Array.from(document.querySelectorAll(".item"))
    const filler = document.querySelector('#fillers');
    let filteredItems = items;
    let currPage = 1;
    filler.addEventListener('keyup', e => {
        e.preventDefault()
        console.log(e.target);

        const keyword = document.querySelector("input[name=keyword]").value

        if (keyword) {
            filteredItems = items.filter(el => {
                return el.querySelector("h3").innerText.indexOf(keyword.toLowerCase()) > -1
            })
        } else {
            filteredItems = items
        }
        currPage = 1;
        if (filteredItems.length !== 0) {
            pagination.style.display = "flex";
            setHTML(filteredItems)
        } else {
            pagination.style.display = "none";
            wrapper.innerHTML = "<p>No Data Found.</p>"
        }
    })

    function paginate(totalItems, currentPage = 1, pageSize = 5, maxPages = 5) {

        let totalPages = Math.ceil(totalItems / pageSize);
        if (currentPage < 1) {
            currentPage = 1;
        } else if (currentPage > totalPages) {
            currentPage = totalPages;
        }

        let startPage, endPage;
        if (totalPages <= maxPages) {
            startPage = 1;
            endPage = totalPages;
        } else {
            let maxPagesBeforeCurrentPage = Math.floor(maxPages / 2);
            let maxPagesAfterCurrentPage = Math.ceil(maxPages / 2) - 1;
            if (currentPage <= maxPagesBeforeCurrentPage) {
                startPage = 1;
                endPage = maxPages;
            } else if (currentPage + maxPagesAfterCurrentPage >= totalPages) {
                startPage = totalPages - maxPages + 1;
                endPage = totalPages;
            } else {
                startPage = currentPage - maxPagesBeforeCurrentPage;
                endPage = currentPage + maxPagesAfterCurrentPage;
            }
        }

        let startIndex = (currentPage - 1) * pageSize;
        let endIndex = Math.min(startIndex + pageSize - 1, totalItems - 1);

        let pages = Array.from(Array((endPage + 1) - startPage).keys()).map(i => startPage + i);

        return {
            totalItems: totalItems,
            currentPage: currentPage,
            pageSize: pageSize,
            totalPages: totalPages,
            startPage: startPage,
            endPage: endPage,
            startIndex: startIndex,
            endIndex: endIndex,
            pages: pages
        };
    }

    function setHTML(items) {
        wrapper.innerHTML = ""
        pagination.innerHTML = ""
        const { totalItems, currentPage, pageSize, totalPages, startPage, endPage, startIndex, endIndex, pages } = paginate(items.length, currPage, 10, 5)

        const nav = document.createElement("nav")
        nav.classList.add(...['relative', 'z-0', 'inline-flex', 'rounded-md', 'shadow-sm', '-space-x-px'])

        let paginationHTML = ""


        pages.forEach(page => {
            if (currentPage === page) {
                paginationHTML += `<button class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium" page="${page}" ${currentPage === page && 'disabled'}>${page}</button>`
            } else {
                paginationHTML += `<button class="page bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium" page="${page}" ${currentPage === page && 'disabled'}>${page}</button>`
            }
        })


        nav.innerHTML = paginationHTML
        pagination.append(nav)

        const start = (currentPage - 1) * pageSize, end = currentPage * pageSize;
        items.slice(start, end).forEach(el => {
            wrapper.append(el)
        })
    }

    document.body.addEventListener("change", function (e) {
        console.log(e.target);
    })
    document.addEventListener('click', function (e) {
        const $this = e.target
        console.log($this);
        if ($this.classList.contains("page")) {
            currPage = parseInt($this.getAttribute("page"))
            setHTML(filteredItems)
        }
        if ($this.classList.contains("next")) {
            currPage += 1;
            setHTML(filteredItems)
        }
        if ($this.classList.contains("prev")) {
            currPage -= 1;
            setHTML(filteredItems)
        }
    });
    setHTML(filteredItems)
</script>
  </body>  
</html>