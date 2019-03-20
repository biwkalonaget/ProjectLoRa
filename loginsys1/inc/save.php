<?php 
session_start();
include('../inc/head.php');
include('../connect_db.php');

if(isset($_POST['Save'])){
   
$username= mysqli_real_escape_string($objCon,$_POST['username']);
$password= mysqli_real_escape_string($objCon,$_POST['password']);
$f_name= mysqli_real_escape_string($objCon,$_POST['f_name']);
$l_name= mysqli_real_escape_string($objCon,$_POST['l_name']);
$email= mysqli_real_escape_string($objCon,$_POST['email']);
$tel= mysqli_real_escape_string($objCon,$_POST['tel']);
$address= mysqli_real_escape_string($objCon,$_POST['address']);
$provice= mysqli_real_escape_string($objCon,$_POST['position_id']);
   
   $strSQL = "INSERT INTO user( username, password, f_name, l_name, tel, address, email, position_id ) 
    VALUES('$username','$password','$f_name','$l_name','$tel','$address','$email','$provice')";
 
 $objQuery = mysqli_query($objCon,$strSQL);
     if($objQuery){
         echo "<script type=\"text/JavaScript\"> self.opener.location.reload(); window.close();</script>";
}
    exit;
}

?>