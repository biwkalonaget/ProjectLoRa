<?php 
session_start();
include('../inc/head.php');
include('../connect_db.php');
if(isset($_POST['SaveEdit'])){
$product_id = mysqli_real_escape_string($objCon,$_POST['product_id']);
$product_name= mysqli_real_escape_string($objCon,$_POST['product_name']);

$product_dis= mysqli_real_escape_string($objCon,$_POST['product_dis']);
$deptid= mysqli_real_escape_string($objCon,$_POST['deptid']);
$Appb_id= mysqli_real_escape_string($objCon,$_POST['Appb_id']);
   
   $strSQL = "UPDATE product SET product_name = '$product_name',  product_dis = '$product_dis', deptid = '$deptid', Appb_id = '$Appb_id'
   WHERE product_id = $product_id ";
 
 $objQuery = mysqli_query($objCon,$strSQL);
     if($objQuery){
         echo "<script type=\"text/JavaScript\"> self.opener.location.reload(); window.close();</script>";
}
    exit;
}

?>