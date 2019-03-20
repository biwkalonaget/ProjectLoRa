<?php
include('../database.php');
session_start();

if (!isset($_SESSION['isadmin'])) $_SESSION['isadmin'] = "";



if ($_SESSION["isadmin"] == 1){
 
$firstname = mysqli_real_escape_string($con,$_POST['firstname']);
$lastname = mysqli_real_escape_string($con,$_POST['lastname']);
$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);


$sql = "INSERT INTO user( firstname, lastname, username, password) 
    VALUES('".$firstname."','".$lastname."','".$username."',MD5('".$password."'))";

echo "<script>alert('เพิ่มสมาชิกสำเร็จ');self.opener.location.reload();window.close();</script>";

$objQuery = mysqli_query($con,$sql);

}

 else{

    $firstname = mysqli_real_escape_string($con,$_POST['firstname']);
    $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    


    
    $sql = "INSERT INTO user( firstname, lastname, username, password) 
    VALUES('".$firstname."','".$lastname."','".$username."',MD5('".$password."'))";
    
    echo "<script>alert('ลงทะเบียนสำเร็จ');window.location = '../login.php';</script>";
    
    $objQuery = mysqli_query($con,$sql);
    
 }

    if($objQuery){
        echo "<script type=\"text/JavaScript\"> self.opener.location.reload(); window.close();</script>";
    }
    
    exit;
?>