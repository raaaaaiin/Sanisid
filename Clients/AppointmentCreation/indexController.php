<?php
session_start();
class indexController{
     public $db ;
     public $certs = array();
    function __construct() {
        date_default_timezone_set('Asia/Manila');
        $this->db = mysqli_connect('localhost','root','','sanisidro',3306) or die('Error connecting to MySQL server.');
    }
    function render(): void
    {

        $this->readallcerts();
        require_once 'index_view.php';
    }
    function readallcerts(){
        $sql_ret = "SELECT
finance_clearance_list.clearance_form,
finance_clearance_set.purpose,
finance_clearance_set.picture,
finance_clearance_set.details,
finance_clearance_set.price
FROM finance_clearance_list LEFT JOIN finance_clearance_set ON finance_clearance_list.clearance_id = finance_clearance_set.clearance_id
";
        $result_ret = mysqli_query($this->db, $sql_ret);
        while($row_ret = mysqli_fetch_assoc($result_ret)){
            array_push($this->certs,array($row_ret["clearance_form"],$row_ret["purpose"],$row_ret["picture"],$row_ret["details"],$row_ret["price"]));
        }
    }
    function insertappointment(){

    $id= $_SESSION["id"];
    $name = $_SESSION["fullname"];
    $gender = $_SESSION["gender"];
    $email = $_SESSION["emailaddress"];
    $dob = $_SESSION["bod"];
    $app_date = $_POST['datepick'];
    $created_at = date("Y/m/d H:i:s");
    $app_time = $_POST['timepick'];
    $status = 'Pending';
    $purpose = $_POST["Request"];

        $pickerpurpose = $_POST['purposepick'];

        $sql_ret = "INSERT into appointments(appointments.requester,
appointments.`Name`,
appointments.gender,
appointments.dob,
appointments.app_date,
appointments.time,
appointments.`status`,
appointments.purpose,
appointments.created_at,
appointments.purp,
appointments.email,
appointments.proof) VALUES('$id','$name','$gender','$dob','$app_date','$app_time','$status','$purpose','$created_at','$pickerpurpose','$email','')";
        if($this->db->query($sql_ret)){};
    }

}

$display = new indexController;

@$Action =$_POST["Action"];

if($Action==1){

}else if($Action==2){

    $pickerpurpose = $_POST['purposepick'];
    $display->insertappointment();
}
else{
    $display->render(); ?>
<script>
    let btns = document.querySelectorAll('button');
    let timepick = document.getElementById('timepick');
    let datepick = document.getElementById('datepick');
    let purposepick = document.getElementById('purposepick');
    let purposecert = document.getElementById('purposecert');
    btns.forEach(function (i) {
        i.addEventListener('click', function() {
            testPass(i.innerHTML);
        });
    });

    function testPass(purpose){
        purposecert.value = purpose;
        openModal();
    }
    function setdate(){
        const FD = new FormData();
        FD.append('Action','2');
        FD.append('timepick',timepick.value);
        FD.append('datepick',datepick.value);
        FD.append('purposepick',purposepick.value);
        FD.append('Request',purposecert.value);
        var ajx = new XMLHttpRequest();
        ajx.onreadystatechange = function () {
            if (ajx.readyState == 4 ) {
                alert('Appointment created, please wait for email confirmation');
                window.location = 'indexController.php';
            }
        };
        ajx.open("POST", "./indexController.php", true);
        ajx.send(FD);

    }
    let selected;

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

</script>
    <?php
}
?>