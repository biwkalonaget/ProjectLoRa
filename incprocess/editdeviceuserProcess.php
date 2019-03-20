<?php 
session_start();

include('../database.php');



if(isset($_POST['edit'])){

$device_id = $_SESSION["device_id"];
$devicetype_id = mysqli_real_escape_string($con,$_POST['devicetype_id']);
$deviceName = mysqli_real_escape_string($con,$_POST['deviceName']);
$deviceDes= mysqli_real_escape_string($con,$_POST['deviceDes']);


   
   $sql = "UPDATE device SET deviceName = '$deviceName', deviceDes = '$deviceDes'

   WHERE device_id = $device_id";
 
 $query = mysqli_query($con,$sql);

 $sql1 = "UPDATE device SET devicetype_id = '$devicetype_id'

   WHERE device_id = $device_id";

$query1 = mysqli_query($con,$sql1);

     if($query){
         echo "<script type=\"text/JavaScript\"> self.opener.location.reload(); window.close();</script>";
}
    exit;



}


?>