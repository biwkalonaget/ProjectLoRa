<?php

include('../database.php');
session_start();
/*
session_start();

if (!isset($_SESSION['isadmin'])) $_SESSION['isadmin'] = "";



if ($_SESSION["isadmin"] == 1){*/
$devicetype_id = mysqli_real_escape_string($con,$_POST['devicetype_id']);
$deviceName = mysqli_real_escape_string($con,$_POST['deviceName']);
$deviceDes = mysqli_real_escape_string($con,$_POST['deviceDes']);
$user_id = $_SESSION['user_id'];


$sql = "INSERT INTO device(deviceName, deviceDes, user_id, devicetype_id) 
VALUES('$deviceName','$deviceDes','$user_id','$devicetype_id')";

echo "<script>alert('เพิ่มอุปกรณ์สำเร็จ');self.opener.location.reload();window.close();</script>";

$objQuery = mysqli_query($con,$sql);

/*}*/

 /*else{

    $devicetypeName = mysqli_real_escape_string($con,$_POST['devicetypeName']);


$sql = "INSERT INTO devicetype( devicetypeName ) 
VALUES('$devicetypeName')";
    
    echo "<script>alert('เพิ่มอุปกรณ์สำเร็จ');window.location = '../login.php';</script>";
    
    $objQuery = mysqli_query($con,$sql);
    
 }*/

    if($objQuery){
        echo "<script type=\"text/JavaScript\"> self.opener.location.reload(); window.close();</script>";
    }
    
    exit;
?>