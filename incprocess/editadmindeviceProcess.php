<?php 
session_start();
include('../database.php');

if(isset($_POST['edit'])){
    
$devicetype_id = mysqli_real_escape_string($con,$_POST['devicetype_id']);
$devicetypeName = mysqli_real_escape_string($con,$_POST['devicetypeName']);


   
   $sql = "UPDATE devicetype SET devicetypeName = '$devicetypeName' WHERE devicetype_id = $devicetype_id ";
 
 $query = mysqli_query($con,$sql);

     if($query){
         echo "<script type=\"text/JavaScript\"> self.opener.location.reload(); window.close();</script>";
}
    exit;
}

?>