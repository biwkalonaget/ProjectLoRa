<?php
include('../database.php');
session_start();

if (!isset($_SESSION['isadmin'])) $_SESSION['isadmin'] = "";



if ($_SESSION["isadmin"] == 1){
 
$devicetypeName = mysqli_real_escape_string($con,$_POST['devicetypeName']);


$sql = "INSERT INTO devicetype( devicetypeName ) 
VALUES('$devicetypeName')";

echo "<script>alert('เพิ่มอุปกรณ์สำเร็จ');self.opener.location.reload();window.close();</script>";

$objQuery = mysqli_query($con,$sql);

}

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