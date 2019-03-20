<?php 
session_start();
include('../database.php');
if(isset($_POST['edit'])){
    
$user_id = mysqli_real_escape_string($con,$_POST['user_id']);
$firstname = mysqli_real_escape_string($con,$_POST['firstname']);
$lastname= mysqli_real_escape_string($con,$_POST['lastname']);
$username= mysqli_real_escape_string($con,$_POST['username']);

   
   $sql = "UPDATE user SET firstName = '$firstname',  lastName = '$lastname', username = '$username'
   WHERE user_id = $user_id ";
 
 $query = mysqli_query($con,$sql);

     if($query){
         echo "<script type=\"text/JavaScript\"> self.opener.location.reload(); window.close();</script>";
}
    exit;
}

?>