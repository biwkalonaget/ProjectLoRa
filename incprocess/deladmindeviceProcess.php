<?php
include('../database.php');
$delete_id = $_GET['delete_id'];
$sql="DELETE  FROM devicetype WHERE devicetype_id ='$delete_id'";
$result = mysqli_query($con,$sql);
if($result){
    
    /*echo"<script type='text/javascript'>alert('ลบข้อมูลสำเร็จ')</script>";*/
    
    echo "<meta http-equiv ='refresh'content='0;URL=../admindevicetable.php'>";
    
} else {

    echo"<script type='text/javascript'>alert('ลบข้อมูลไม่สำเร็จ');window.history.go(-1);</script>";
}    

?>