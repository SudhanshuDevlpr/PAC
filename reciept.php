<?php
if (isset($_POST['submit'])) {
    session_start();
    include 'config.php';
    
// Create a new DateTime object with the current date and time
$date = new DateTime();

// Set the desired timezone (optional)
$date->setTimezone(new DateTimeZone('America/New_York'));

// Format the date and time
 $i=1070;
 $currentDateTime = $date->format('Y-m-d');
 $month=date('m');
// $reciept_id=$month . $i;
// echo $reciept_id;
 $currentDateTime;
 $paymode=$_SESSION['rolle'];//currently we arre not using this beacuse of some eroor but in future we use this
 $_SESSION['name'];
 $cashier_id=$_SESSION['opr_id'];
$adv_id = $_POST['advid']; //advoacte inform
$doctype = $_POST['doc']; //type of document
$documentnumber = $_POST['docment']; // document number
$npac = $_POST['npac']; //number of pac
$total = $_POST['value']; //coming threw js dybamically createds
$varificationamount=10;//it change in fututre according bar
$pcamount=$total-$varificationamount;
    ///in offline case verification table
$vf_vfstatus='pending';
$vf_vffeestatus='paid';
$vf_pacfeestatus='paid';
//insert all value in verification table threw cashier now

$sql="INSERT INTO `verification` (`vf_doctype`, `vf_docno`, `vf_vfstatus`, `vf_vffeestatus`, `vf_pacfeestatus`,`vf_pacquntity`, `vf_paymode`, `vf_advid`)
 VALUES ('$doctype', '$documentnumber', 'pending', 'paid', 'paid', 
 '$npac', 'offline', '$adv_id')";

//mysqli_query($conn, $sql);

// Retrieve the last inserted ID
//$vf_receiptid = mysqli_insert_id($conn);
 //now exicute query
if(mysqli_query($conn,$sql)){
    $vf_receiptid = mysqli_insert_id($conn);
 $pypacsql="INSERT INTO `payments` (`py_paydate`, `py_payamt`, `py_paymethod`,  `py_payfor`, `py_cahierid`, `py_paystatus`,`py_vfid`)
  VALUES 
  (current_timestamp(), '$pcamount', 'other', 'pac', '$cashier_id','completed','$vf_receiptid')";

if(mysqli_query($conn,$pypacsql)){//this query exicute to store data about pac varication amount in pauyemnt method

$pyvfsql="INSERT INTO `payments` (`py_paydate`, `py_payamt`, `py_paymethod`,  `py_payfor`, `py_cahierid`, `py_paystatus`,`py_vfid`)
  VALUES 
  (current_timestamp(), '$varificationamount', 'other', 'verification', '$cashier_id','completed','$vf_receiptid')";

mysqli_query($conn,$pyvfsql);
}
}else{
    echo "check your insert query";
}

}
else{
   // header("location:registration.php");
}
?>

