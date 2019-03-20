<?php
include('../database.php');

$delete_id = $_GET['delete_id'];
$sql="DELETE  FROM device WHERE device_id ='$delete_id'";
$result = mysqli_query($con,$sql);
if($result){
    
    /*echo"<script type='text/javascript'>alert('ลบข้อมูลสำเร็จ')</script>";*/
    
    echo "<meta http-equiv ='refresh'content='0;URL=../userdevicetable.php'>";
    
} else {

    echo"<script type='text/javascript'>alert('ลบข้อมูลไม่สำเร็จ');window.history.go(-1);</script>";
}    

?>